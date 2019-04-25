<?php
    //require bundle plugin using tgm plugin activation
    require_once(get_theme_file_path("/inc/tgmpa.php"));

    //cache busting
    if ('http://localhost/wordpress' == site_url()) {
        define('VERSION', time());
    } else {
        define('VERSION', wp_get_theme()->get('Version'));
    }

    if (!function_exists('nattours_theme_setup')) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         */
        function nattours_theme_setup() {
            load_theme_textdomain('nattours', get_template_directory_uri() . "/languages");
            add_theme_support('post-thumbnails');
            add_theme_support('title-tag');
            add_theme_support('automatic-feed-links');
            add_theme_support('custom-logo', array(
                'height'     => 40,
                'width'      => 80,
                'flex-width' => true,
            ));
            add_theme_support('custom-header');
            add_theme_support('html5', array(
                'search-form',
                'comment-form',
                'comment-lists',
                'gallery',
                'caption',
            ));
            register_nav_menus(
                array(
                    'primary'     => __('Main Menu', 'nattours'),
                    'footer-left' => __('Footer Left Menu', 'nattours')
                )
            );
            add_image_size('nattours-small', 300, 200);

        }
    endif;
    add_action('after_setup_theme', 'nattours_theme_setup');

    /**
     * Enqueue scripts and styles.
     */
    function nattours_assets() {
        define('ASSET_DIR', get_template_directory_uri() . "/assets/");
        wp_enqueue_style('fonts-css', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
        wp_enqueue_style('style-css', ASSET_DIR . 'css/style.css', null, VERSION);
        wp_enqueue_style('nattours-css', get_stylesheet_uri(), null, VERSION);

        if (is_page_template('page-template/nattours-landing-page.php')) {
            wp_enqueue_script('nattours-reservation-js', ASSET_DIR . 'js/reservation.js', array('jquery'), VERSION, true);
            $ajax_url = admin_url('admin-ajax.php');
            wp_localize_script('nattours-reservation-js', 'toururl', array('ajaxurl' => $ajax_url));
        }
    }
    add_action('wp_enqueue_scripts', 'nattours_assets');

    function nattours_add_menu_class($classes, $args) {
        // Add custom classes for list items to primary menu
        if ('primary' != $args->location) {
            $classes[] = 'navigation__item';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'nattours_add_menu_class', 10, 2);

    function nattours_menu_item_link_class($atts, $args) {
        // Add custom classes for list item links to primary menu
        if ('primary' != $args->location) {
            if (isset($atts['class'])) {
                $atts['class'] .= 'navigation__link';
            } else {
                $atts['class'] = 'navigation__link';
            }
        }
        return $atts;
    }
    add_filter('nav_menu_link_attributes', 'nattours_menu_item_link_class', 20, 2);

    function nattours_nav_fix($menus) {
        $string_replace = home_url("/") . "section/";
        foreach ($menus as $menu) {
            $menu_url = str_replace($string_replace, "#", $menu->url);
            if ($menu_url != $menu->url) {
                $menu_url = rtrim($menu_url, "/");
            }
            $menu->url = $menu_url;
        }
        return $menus;
    }
    add_filter('wp_nav_menu_objects', 'nattours_nav_fix');

    function nattours_section_type_process($part) {
        // Piklist meta-box binding with custom post type
        $section_id = 0;
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        $section_post_type = get_post_type($section_id);
        if ('section' == $section_post_type) {
            $section_meta = get_post_meta($section_id, 'nattours_section_type', true);
            $sections     = array('banner', 'about', 'feature', 'pricing', 'reservation', 'story');
            foreach ($sections as $section) {
                if ("{$section}.php" == $part['part'] && "{$section}" != $section_meta) {
                    return false;
                }
            }
        }
        return $part;
    }
    add_filter('piklist_part_process', 'nattours_section_type_process');

    function nattours_page_process($part) {
        // piklist meta-box binding for page template
        $page_id = 0;
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        $nattours_current_template = get_post_meta($page_id, '_wp_page_template', true);
        if ($nattours_current_template) {
            if ("page-template/nattours-landing-page.php" != $nattours_current_template) {
                return false;
            }
        }
        return $part;
    }
    add_filter('piklist_part_process', 'nattours_page_process');

    function nattours_bg_image_style() {
        if (has_header_image()) {
            $header_image = get_header_image();
        } else {
            $header_image = get_template_directory_uri() . '/assets/img/hero-small.jpg';
        }
        ?>
        <style>
            .header {
                background-image: -webkit-gradient(linear, left top, right bottom, from(rgba(126, 213, 111, 0.8)), to(rgba(40, 180, 133, 0.8))), url(<?php echo esc_url($header_image);?>);
                background-image: linear-gradient(to right bottom, rgba(126, 213, 111, 0.8), rgba(40, 180, 133, 0.8)), url(<?php echo esc_url($header_image);?>);
            }
        </style>
        <?php
    }
    add_action('wp_head', 'nattours_bg_image_style');

    /**
     * Register widget area.
     */
    function nattours_widgets_init() {
        register_sidebar(array(
                             'name'          => __('Footer Right Sidebar', 'nattours'),
                             'id'            => 'footer-right',
                             'description'   => __('Add Footer Text Here.', 'nattours'),
                             'before_widget' => '',
                             'after_widget'  => '',
                             'before_title'  => '',
                             'after_title'   => '',
                         ));
        register_sidebar(array(
                             'name'          => __('Footer Logo Widget', 'nattours'),
                             'id'            => 'footer-logo',
                             'description'   => __('Add Footer Logo here.', 'nattours'),
                             'before_widget' => '<picture id="%1$s" class="%2$s footer__logo">',
                             'after_widget'  => '</picture>',
                             'before_title'  => '',
                             'after_title'   => '',
                         ));
    }
    add_action('widgets_init', 'nattours_widgets_init');

    function nattours_reservation() {
        $name        = $_POST['name'] ?? '';
        $email       = $_POST['email'] ?? '';
        $small       = $_POST['small'];
        $large       = $_POST['large'];
        $admin_email = get_option('admin_email');
        $_message    = sprintf("A Reservation From:%s\n Email:%s\n for %s %s plan", $name, $email, $small, $large);
        wp_mail($admin_email, __("someone tried to make a reservation for nattours", "nattours"), $_message);
        if (!empty($name)) {
            if (!empty($email)){
                die("Reservation Successful!");
            }else{
                die("Resevation Failed! You have to type your Email");
            }
        }else{
            die("Resevation Failed! You have to type your Full Name");
        }
    }
    add_action('wp_ajax_reserve', 'nattours_reservation');
    add_action('wp_ajax_nopriv_reserve', 'nattours_reservation');

    //remove piklist icon from dashboard admin panel
    function nattours_remove_filters() {
        remove_filter('piklist_admin_pages', array('piklist_setting', 'admin_pages'));
    }
    add_action('after_setup_theme', 'nattours_remove_filters');
    
    //add counter between span before link text for primary menu location
    function nattours_nav_counter($title, $item, $args, $depth){
        static $counter = 0;
        if ('primary' === $args->theme_location){
            $args->link_before = sprintf( '<span>0%d</span> ', ++$counter );
        }
        return $title;
    }
    add_filter( 'nav_menu_item_title', 'nattours_nav_counter',10,4);
