<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_testimonials_section', true);
    $mark_testimonials = $mark_section_meta['mark_testimonials'];

?>
<!--testimonial section start-->
<section class="space-3 space-adjust" id="testimonial">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2 class="title ">
                        <?php echo esc_html($mark_section_meta['section-heading']);?>
                    </h2>
                </div>
            </div>
            <?php if (isset($mark_testimonials)): ?>
            <div class="col-md-8">
                <div id="js_testimonial" class="owl-carousel owl-theme text-center testimonial-wrapper">
                    <?php
                        foreach ($mark_testimonials as $mark_testimonial):
                            $mark_testimonial_image_id = $mark_testimonial['image'][0];
                            if (isset($mark_testimonial_image_id)){
                                $mark_testimonial_image        = wp_get_attachment_image_src($mark_testimonial_image_id, 'thumbnail');
                                $mark_testimonial_image_markup = sprintf("<img class='testimonial-thumb' src='%s'/>", $mark_testimonial_image[0]);
                            }else{
                                $mark_testimonial_image =array(get_template_directory_uri()."/assets/img/as1.jpg");
                                $mark_testimonial_image_markup = sprintf("<img class='testimonial-thumb' src='%s'/>",$mark_testimonial_image[0]);
                            }
                            ?>
                    <div class="item mb-5"
                         data-dot="<?php echo esc_attr($mark_testimonial_image_markup)?>
                         <div class='testimonial-name'><?php echo esc_html($mark_testimonial['title'])?></div>">
                        <img class="mb-5 quote"
                             src="<?php echo get_template_directory_uri() ?>./assets/img/quote.svg"
                             alt=""/>
                        <?php echo apply_filters('the_content',$mark_testimonial['testimonial']);?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- testimonial section end-->