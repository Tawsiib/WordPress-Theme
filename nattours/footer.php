<footer class="footer">
    <div class="footer__logo-box">
        <?php
            if (is_active_sidebar('footer-logo')){
                dynamic_sidebar('footer-logo');
            }
        ?>
    </div>

    <div class="row">
        <div class="col-1-of-2">
            <?php
                if (has_nav_menu('footer-left')):
                $footer_menu = wp_nav_menu(
                    array(
                        'theme_location'  => 'footer-left',
                        'container'       => 'div',
                        'container_class' => 'footer__navigation',
                        'menu_class'      => 'footer__list',
                        'echo'            => false
                    ));
                $footer_menu = str_replace('<li', '<li class="footer__item"', $footer_menu);
                $footer_menu = str_replace('<a', '<a class="footer__link"', $footer_menu);
                echo wp_kses_post($footer_menu);
                endif;
            ?>
        </div>
        <div class="col-1-of-2">
                <?php
                    if (is_active_sidebar('footer-right')){
                        dynamic_sidebar('footer-right');
                    }
                ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
