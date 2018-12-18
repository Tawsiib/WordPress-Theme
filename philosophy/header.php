<!DOCTYPE html>
<html class="no-js" lang="<?php language_attributes(); ?>">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>

<!-- pageheader
================================================== -->
<section class="s-pageheader <?php if ( is_front_page() ) {
    echo 's-pageheader--home';
} ?>">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <?php
                if ( current_theme_supports('custom-logo') ) {
                    the_custom_logo();
                } else {
                    echo "<h1><a href='" . home_url("/") . "'>" . get_bloginfo('name') . "</a></h1>";
                }
                ?>
            </div> <!-- end header__logo -->

            <?php
                if (is_active_sidebar('header-social')){
                    dynamic_sidebar('header-social');
                }
            ?>

            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">

                <?php get_search_form(); ?>

                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

            </div>  <!-- end header__search -->


            <?php get_template_part('/template-parts/common/navigation') ?>

        </div> <!-- header-content -->
    </header> <!-- header -->

    <?php
    if ( is_front_page() ) {
        get_template_part('template-parts/featured');
    }
    ?>


</section> <!-- end s-pageheader -->