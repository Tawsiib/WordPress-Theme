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
<section class="s-pageheader <?php if (is_front_page()){echo 's-pageheader--home';} ?>">

    <header class="header">
        <div class="header__content row">

            <?php if ( current_theme_supports('custom-logo') ): ?>
                <div class="header__logo">
                    <?php the_custom_logo(); ?>
                </div> <!-- end header__logo -->
            <?php endif; ?>

            <ul class="header__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>
            </ul> <!-- end header__social -->

            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">

                <form role="search" method="get" class="header__search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s"
                               title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>

                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

            </div>  <!-- end header__search -->


            <?php get_template_part('/template-parts/common/navigation')?>

        </div> <!-- header-content -->
    </header> <!-- header -->

    <?php
    if (is_front_page()) {
        get_template_part('template-parts/featured');
    }
    ?>



</section> <!-- end s-pageheader -->