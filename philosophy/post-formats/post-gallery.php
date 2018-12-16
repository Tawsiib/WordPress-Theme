<article class="masonry__brick entry format-gallery" data-aos="fade-up">
    <?php if ( class_exists('Attachments') ):
        $attachments = new Attachments('gallery');
        if ( $attachments->exist() ):
            ?>

            <div class="entry__thumb slider">
                <div class="slider__slides">
                    <?php while ( $attachment = $attachments->get() ): ?>
                        <div class="slider__slide">
                            <?php echo $attachments->image('philosophy-square');?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php
        endif;
    endif;

    get_template_part('/post-formats/summary');
    ?>

</article> <!-- end article -->
