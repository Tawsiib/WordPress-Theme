<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>
    <div class="navigation__background">&nbsp;</div>

    <?php
        if (has_nav_menu('primary')):
        //primary menu
        $args = array(
            'theme_location'  => 'primary',
            'container'       => 'nav',
            'container_class' => 'navigation__nav',
            'menu_class'      => 'navigation__list',
            'link_before'     => '<span></span>'
        );
        echo wp_kses_post(wp_nav_menu($args));
        endif;
    ?>
</div>

