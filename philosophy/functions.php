<?php
/**
 * Define Constant For Browser Cache Busting
 * For Local and global development Environment...
 */
if ( site_url() == 'http://localhost/wordpress/' ) {
    define('VERSION', time());
} else {
    define('VERSION', wp_get_theme()->get('Version'));
}

/**
 * Implement TGM Plugin Activation
 */
require_once(get_theme_file_path('/inc/tgm.php'));

/**
 * Implement Additional Feature & Attachments for gallery Post
 */
require_once(get_theme_file_path('/inc/attachments.php'));

function philosophy_theme_setup()
{

    load_theme_textdomain('philosophy', '/languages');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_editor_style('/assets/css/editor-style.css');
    add_theme_support('html5', array('comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('quote', 'audio', 'video', 'link', 'gallery', 'image'));
    register_nav_menu('topmenu', __('Top Menu', 'philosophy'));
    add_image_size('philosophy-square', 400, 400, true);

}

add_action('after_setup_theme', 'philosophy_theme_setup');

function philosophy_assets()
{
    /**
     * Enqueue all essential stylesheet(CSS) File here...
     */
    wp_enqueue_style('font-awesome-css', get_theme_file_uri('/assets/css/font-awesome/css/font-awesome.css'), null, 1.0);
    wp_enqueue_style('fonts-css', get_theme_file_uri('/assets/css/fonts.css'), null, 1.0);
    wp_enqueue_style('base-css', get_theme_file_uri('/assets/css/base.css'), null, 1.0);
    wp_enqueue_style('vendor-css', get_theme_file_uri('/assets/css/vendor.css'), null, 1.0);
    wp_enqueue_style('main-css', get_theme_file_uri('/assets/css/main.css'), null, 1.0);
    wp_enqueue_style('philosophy-css', get_stylesheet_uri(), null, VERSION);

    /**
     * Enqueue all essential JavaScript File here...
     */
    wp_enqueue_script('modernizr-js', get_theme_file_uri('/assets/js/modernizr.js'), null, 1.0, false);
    wp_enqueue_script('pace-min-js', get_theme_file_uri('/assets/js/pace.min.js'), null, 1.0, false);
    wp_enqueue_script('plugin-js', get_theme_file_uri('/assets/js/plugins.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.js'), array('jquery'), 1.0, true);

}

add_action('wp_enqueue_scripts', 'philosophy_assets');

/**
 * Function For Custom Pagination Start Here...
 * This function is created for Custom page pagination
 */
function philosophy_pagination()
{

    global $wp_query;
    $links = paginate_links(
        array(

            'current'  => max(1, get_query_var('paged')),
            'total'    => $wp_query->max_num_pages,
            'type'     => 'list',
            'mid-size' => 3,

        ));
    /**
     * Replacing string on pagination
     */
    $links = str_replace("page-numbers", "pgn__num", $links);
    $links = str_replace("<ul class='pgn__num'>", "<ul>", $links);
    $links = str_replace("next pgn__num", "pgn__next", $links);
    $links = str_replace("prev pgn__num", "pgn__prev", $links);
    echo $links;

}
/**
 *  Function For Custom Pagination End Here...
 */

remove_action('term_description','wpautop'); //remove an extra p tag from category description

function philosophy_about_us_widgets(){
    register_sidebar(
        array(
            'name'          => __('About Us Page', 'philosophy'),
            'id'            => 'about-us',
            'description'   => __('This widgets section is for About page', 'philosophy'),
            'before_widget' => '<div id="%1$s" class="col-block %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="quarter-top-margin">',
            'after_title'   => '</h3>',

        )
    );
    register_sidebar(
        array(
            'name'          => __('Contact Page Info', 'philosophy'),
            'id'            => 'contact-info',
            'description'   => __('This widgets is for Contact page Infomation section', 'philosophy'),
            'before_widget' => '<div id="%1$s" class="col-six tab-full %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',

        )
    );
}

add_action('widgets_init','philosophy_about_us_widgets');
