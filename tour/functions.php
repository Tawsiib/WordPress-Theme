<?php
    //require bundle plugin using tgm plugin activation
    require_once (get_theme_file_path("/inc/tgmpa.php"));

    //cache busting
    if ('http://localhost/wordpress' == site_url()) {
        define('VERSION', time());
    } else {
        define('VERSION', wp_get_theme()->get('Version'));
    }

    if (!function_exists('tour_theme_setup')) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         */
        function tour_theme_setup() {
            load_theme_textdomain('tour', get_template_directory_uri() . "/languages");
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
                    'primary'     => __('Main Menu', 'tour'),
                    'footer-left' => __('Footer Left Menu', 'tour')
                )
            );
            add_image_size('tour-small', 300, 200);

        }
    endif;
    add_action('after_setup_theme', 'tour_theme_setup');

    /**
     * Enqueue scripts and styles.
     */
    function tour_assets() {
        define('ASSET_DIR', get_template_directory_uri() . "/assets/");
        wp_enqueue_style('fonts-css', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
        wp_enqueue_style('style-css', ASSET_DIR . 'css/style.css', null, VERSION);
        wp_enqueue_style('tour-css', get_stylesheet_uri(), null, VERSION);

        if (is_page_template('page-template/tour-landing-page.php')) {
            wp_enqueue_script('tour-reservation-js', ASSET_DIR . 'js/reservation.js', array('jquery'), VERSION, true);
            $ajax_url = admin_url('admin-ajax.php');
            wp_localize_script('tour-reservation-js', 'toururl', array('ajaxurl' => $ajax_url));
        }
    }
    add_action('wp_enqueue_scripts', 'tour_assets');

    function tour_add_menu_class($classes, $args) {
        // Add custom classes for list items to primary menu
        if ('primary' != $args->location) {
            $classes[] = 'navigation__item';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'tour_add_menu_class', 10, 2);

    function tour_menu_item_link_class($atts, $args) {
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
    add_filter('nav_menu_link_attributes', 'tour_menu_item_link_class', 20, 2);

    function tour_nav_fix($menus) {
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
    add_filter('wp_nav_menu_objects', 'tour_nav_fix');

    function tour_section_type_process($part) {
        // Piklist meta-box binding with custom post type
        $section_id = 0;
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        $section_post_type = get_post_type($section_id);
        if ('section' == $section_post_type) {
            $section_meta = get_post_meta($section_id, 'tour_section_type', true);
            $sections     = array('banner', 'about', 'feature', 'pricing', 'reservation',);
            foreach ($sections as $section) {
                if ("{$section}.php" == $part['part'] && "{$section}" != $section_meta) {
                    return false;
                }
            }
        }
        return $part;
    }
    add_filter('piklist_part_process', 'tour_section_type_process');

    function tour_page_process($part) {
        // piklist meta-box binding for page template
        $page_id = 0;
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        $tour_current_template = get_post_meta($page_id, '_wp_page_template', true);
        if ($tour_current_template) {
            if ("page-template/tour-landing-page.php" != $tour_current_template) {
                return false;
            }
        }
        return $part;
    }
    add_filter('piklist_part_process', 'tour_page_process');

    function tour_bg_image_style() {
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
    add_action('wp_head', 'tour_bg_image_style');

    /**
     * Register widget area.
     */
    function tour_widgets_init() {
        register_sidebar(array(
                             'name'          => __('Footer Right Sidebar', 'tour'),
                             'id'            => 'footer-right',
                             'description'   => __('Add Footer Text Here.', 'tour'),
                             'class'         => 'footer__copyright',
                             'before_widget' => '<p id="%1$s" class="%2$s footer__copyright">',
                             'after_widget'  => '</p>',
                             'before_title'  => '',
                             'after_title'   => '',
                         ));
        register_sidebar(array(
                             'name'          => __('Footer Logo Widget', 'tour'),
                             'id'            => 'footer-logo',
                             'description'   => __('Add Footer Logo here.', 'tour'),
                             'before_widget' => '<picture id="%1$s" class="%2$s footer__logo">',
                             'after_widget'  => '</picture>',
                             'before_title'  => '',
                             'after_title'   => '',
                         ));
    }
    add_action('widgets_init', 'tour_widgets_init');

    function tour_reservation() {
        $name        = $_POST['name'] ?? '';
        $email       = $_POST['email'] ?? '';
        $small       = $_POST['small'] ?? '';
        $large       = $_POST['large'] ?? '';
        $admin_email = get_option('admin_email');
        $_message    = sprintf("A Reservation From:%s\n Email:%s\n for %s %s plan", $name, $email, $small, $large);
        wp_mail($admin_email, __("someone tried to make a reservation for tour", "tour"), $_message);
        die("Reservation Successful");
    }
    add_action('wp_ajax_reserve', 'tour_reservation');
    add_action('wp_ajax_nopriv_reserve', 'tour_reservation');
    //remove piklist icon from dashboard admin panel
    function my_remove_filters(){
        remove_filter('piklist_admin_pages', array('piklist_setting', 'admin_pages'));
    }
    add_action( 'after_setup_theme', 'my_remove_filters' );