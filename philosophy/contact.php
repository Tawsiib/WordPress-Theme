<?php
/**
 * Template Name: Contact Page
 */

the_post();
get_header();
?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail("large"); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <?php the_content(); ?>

                <div class="row">
                    <?php
                    if ( is_active_sidebar("contact-info") ) {
                        dynamic_sidebar("contact-info");
                    }
                    ?>
                </div>

                <h3><?php _e("Say Hello.", "philosophy") ?></h3>

                <form name="cForm" id="cForm" method="post" action="">
                    <?php
                    if ( get_field('contact_form_shortcode') ) {
                        echo do_shortcode(get_field('contact_form_shortcode'));
                    }
                    ?>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </article>

    </section> <!-- s-content -->


<?php get_footer(); ?>