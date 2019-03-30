<?php
    require_once (get_theme_file_path("/inc/tgmpa.php"));

    define('VERSION',time());

    if (!function_exists('')) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         */
        function mark_theme_setup() {
            load_theme_textdomain('mark', get_template_directory_uri() . "/languages");
            add_theme_support('post-thumbnails');
            add_theme_support('title-tag');
            add_theme_support('automatic-feed-links');
            add_theme_support('custom-logo');
            add_theme_support('custom-header');
            add_theme_support('html5', array(
                'search-form',
                'comment-form',
                'comment-lists',
                'gallery',
                'caption',
            ));
            register_nav_menu('', __('', 'mark'));
            add_image_size('mark-blog-bg',1218 ,896,true);
            add_image_size('mark-blog-landscape',583,383,true);
            add_image_size('mark-logo',192,192,);

        }
    endif;
    add_action('after_setup_theme', 'mark_theme_setup');

    /**
     * Enqueue scripts and styles.
     */
    function mark_assets() {
        define('ASSET_DIR', get_template_directory_uri() . "/assets/");
        wp_enqueue_style('fonts-css', '//fonts.googleapis.com/css?family=Cabin|Open+Sans:300,400,600,700');
        wp_enqueue_style('bootstrap-css', ASSET_DIR . 'vendor/bootstrap/css/bootstrap.min.css', '', 1.0);
        wp_enqueue_style('font-awesome-css', ASSET_DIR . 'vendor/font-awesome/css/font-awesome.min.css', '', VERSION);
        wp_enqueue_style('bicon-css', ASSET_DIR . 'vendor/bicon/css/bicon.css', '', VERSION);
        wp_enqueue_style('owl-carousel-min-css', ASSET_DIR . 'vendor/owl/assets/owl.carousel.min.css', '', VERSION);
        wp_enqueue_style('owl-theme-css', ASSET_DIR . 'vendor/owl/assets/owl.theme.default.min.css', '', 1.0);
        wp_enqueue_style('magnific-popup-css', ASSET_DIR . 'vendor/magnific-popup/magnific-popup.css', '', VERSION);
        wp_enqueue_style('animate-css', ASSET_DIR . 'vendor/animate.css', '', VERSION);
        wp_enqueue_style('main-css', ASSET_DIR . 'css/main.css', '', VERSION);
        wp_enqueue_style('mark-css', get_stylesheet_uri(), '', VERSION);

        wp_enqueue_script('bootstrap-js', ASSET_DIR . 'vendor/bootstrap/js/bootstrap.min.js', array('jquery'), 1.0, true);
        wp_enqueue_script('owl-carousel-js', ASSET_DIR . 'vendor/owl/owl.carousel.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('magnific-popup-js', ASSET_DIR . 'vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('wow-min-js', ASSET_DIR . 'vendor/wow.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('visible-js', ASSET_DIR . 'vendor/visible.js', array('jquery'), VERSION, true);
        wp_enqueue_script('animatenumber-min-js', ASSET_DIR . 'vendor/jquery.animateNumber.min.js', array('jquery'), VERSION, true);
        wp_enqueue_script('isotope-js', ASSET_DIR . 'vendor/jquery.isotope.js', array('jquery'), VERSION, true);
        wp_enqueue_script('imagesloaded-js', ASSET_DIR . 'vendor/imagesloaded.js', array('jquery'), VERSION, true);
        wp_enqueue_script('scripts-js', ASSET_DIR . 'js/scripts.js', array('jquery'), VERSION, true);
    }

    add_action('wp_enqueue_scripts', 'mark_assets');

    /**
     * Register widget area.
     */
    function _widgets_init() {
        register_sidebar(array(
                             'name'          => esc_html__('Sidebar', ''),
                             'id'            => 'sidebar-1',
                             'description'   => esc_html__('Add widgets here.', ''),
                             'before_widget' => '<section id="%1$s" class="widget %2$s">',
                             'after_widget'  => '</section>',
                             'before_title'  => '<h2 class="widget-title">',
                             'after_title'   => '</h2>',
                         ));
    }
    add_action('widgets_init', '_widgets_init');

    function mark_section_type_process($part) {
        $section_id = 0;
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        $section_post_type = get_post_type($section_id);
        if ('section' == $section_post_type) {
            $section_meta = get_post_meta($section_id, 'mark_section_type', true);
            $sections     = array('banner', 'mission', 'feature', 'about', 'services', 'benefits', 'testimonials', 'image-info', 'counter', 'cta', 'team', 'portfolio', 'pricing', 'shop', 'blog', 'clients', 'subscription', 'contact');
            foreach ($sections as $section) {
                if ("{$section}.php" == $part['part'] && "{$section}" != $section_meta) {
                    return false;
                }
            }
        }
        return $part;
    }
    add_filter('piklist_part_process', 'mark_section_type_process');

    function mark_page_process($part) {
        $page_id = 0;
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        $mark_current_template = get_post_meta($page_id, '_wp_page_template', true);
        if ($mark_current_template) {
            if ("page-template/mark-landing-page.php" != $mark_current_template) {
                return false;
            }
        }
        return $part;
    }
    add_filter('piklist_part_process', 'mark_page_process');

    function mark_get_social_profiles(){
        $fields = array();
        $social_profiles = apply_filters('mark_social_profiles',array('facebook','twitter','youtube','dribbble','instagram',));
        foreach ($social_profiles as $social_profile){
            $field = array(
                    'type'       => 'url',
                    'field'      => $social_profile,
                    'label'      => ucfirst($social_profile),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                );
                array_push($fields,$field);
        }
        return $fields;
    }
    function my_remove_filters(){
        remove_filter('piklist_admin_pages', array('piklist_setting', 'admin_pages'));
    }
    add_action( 'after_setup_theme', 'my_remove_filters' );
