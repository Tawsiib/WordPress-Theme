<?php
    /*
     Plugin Name: Nattours-Helper
     Plugin URI:
     Author: Asib Ikbal
     Author URI: https://facebook.com/asib.ikbal
     Description: A companion plugin for Nattours one page theme
     Version: 1.0
     License: GPLv2 or later
     Text Domain: nattours-helper
     Domain Path: /languages/
     */
    function nattoursh_load_text_domain() {
        load_plugin_textdomain('nattours-helper', false, dirname(__FILE__) . '/languages/');
    }
    add_action('plugin_loaded', 'nattoursh_load_text_domain');

    // Register Custom Post Type

    function nattoursh_register_my_cpts() {

        /**
         * Post Type: stories.
         */

        $labels = array(
            "name"                  => __("stories", "nattours-helper"),
            "singular_name"         => __("story", "nattours-helper"),
            "menu_name"             => __("Stories", "nattours-helper"),
            "all_items"             => __("All Stories", "nattours-helper"),
            "add_new"               => __("Add Story", "nattours-helper"),
            "add_new_item"          => __("Add New Story", "nattours-helper"),
            "edit_item"             => __("Edit Story", "nattours-helper"),
            "new_item"              => __("New Story", "nattours-helper"),
            "view_item"             => __("View Story", "nattours-helper"),
            "view_items"            => __("View Stories", "nattours-helper"),
            "search_items"          => __("Search Stories", "nattours-helper"),
            "featured_image"        => __("Story Image", "nattours-helper"),
            "set_featured_image"    => __("Set Story Image", "nattours-helper"),
            "remove_featured_image" => __("Remove Story Image", "nattours-helper"),
            "use_featured_image"    => __("Use Story Image", "nattours-helper"),
            "insert_into_item"      => __("Insert into Story", "nattours-helper"),
            "uploaded_to_this_item" => __("Uploaded to this story", "nattours-helper"),
            "filter_items_list"     => __("Filters Stories List", "nattours-helper"),
            "items_list_navigation" => __("Stories List Navigation", "nattours-helper"),
            "items_list"            => __("Stories List", "nattours-helper"),
        );

        $args = array(
            "label"                 => __("stories", "nattours-helper"),
            "labels"                => $labels,
            "description"           => "",
            "public"                => true,
            "publicly_queryable"    => true,
            "show_ui"               => true,
            "delete_with_user"      => false,
            "show_in_rest"          => false,
            "rest_base"             => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "has_archive"           => "stories",
            "show_in_menu"          => true,
            "show_in_nav_menus"     => true,
            "exclude_from_search"   => false,
            "capability_type"       => "post",
            "map_meta_cap"          => true,
            "hierarchical"          => false,
            "rewrite"               => array("slug" => "stories", "with_front" => true),
            "query_var"             => true,
            "menu_position"         => 5,
            "menu_icon"             => "dashicons-pressthis",
            "supports"              => array("title", "thumbnail", "excerpt", "author", "page-attributes"),
        );

        register_post_type("story", $args);

        /**
         * Post Type: Sections.
         */

        $labels = array(
            "name"                  => __("Sections", "nattours-helper"),
            "singular_name"         => __("Section", "nattours-helper"),
            "menu_name"             => __("Sections", "nattours-helper"),
            "all_items"             => __("All Sections", "nattours-helper"),
            "add_new"               => __("Add Section", "nattours-helper"),
            "add_new_item"          => __("Add New Section", "nattours-helper"),
            "edit_item"             => __("Edit Section", "nattours-helper"),
            "new_item"              => __("New Section", "nattours-helper"),
            "view_item"             => __("View Section", "nattours-helper"),
            "view_items"            => __("View Sections", "nattours-helper"),
            "search_items"          => __("Search Section", "nattours-helper"),
            "featured_image"        => __("Section Image", "nattours-helper"),
            "set_featured_image"    => __("Set Section Image", "nattours-helper"),
            "remove_featured_image" => __("Remove Section Image", "nattours-helper"),
            "use_featured_image"    => __("Use Section Image", "nattours-helper"),
            "insert_into_item"      => __("Insert into Section", "nattours-helper"),
            "uploaded_to_this_item" => __("Upload to this section", "nattours-helper"),
            "filter_items_list"     => __("Filter Sections Lists", "nattours-helper"),
            "items_list_navigation" => __("Sections List Navigation", "nattours-helper"),
            "items_list"            => __("Sections List", "nattours-helper"),
        );

        $args = array(
            "label"                 => __("Sections", "nattours-helper"),
            "labels"                => $labels,
            "description"           => "",
            "public"                => false,
            "publicly_queryable"    => false,
            "show_ui"               => true,
            "delete_with_user"      => false,
            "show_in_rest"          => false,
            "rest_base"             => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "has_archive"           => false,
            "show_in_menu"          => true,
            "show_in_nav_menus"     => true,
            "exclude_from_search"   => true,
            "capability_type"       => "post",
            "map_meta_cap"          => true,
            "hierarchical"          => false,
            "rewrite"               => array("slug" => "section", "with_front" => true),
            "query_var"             => false,
            "menu_position"         => 5,
            "menu_icon"             => "dashicons-admin-page",
            "supports"              => array("title", "thumbnail"),
        );

        register_post_type("section", $args);



    }

    add_action('init', 'nattoursh_register_my_cpts');
