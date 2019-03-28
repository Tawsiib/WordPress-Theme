<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_about_section', true);
    $mark_parallax_image_id = $mark_section_meta['image'][0];
    if (isset($mark_parallax_image_id)){
        $mark_parallax_image = wp_get_attachment_image_src($mark_parallax_image_id,'full');
    }else{
        $mark_parallax_image = array(get_template_directory_uri()."/assets/img/asb.jpg");
    }
?>

<!-- parallax section start -->
<section class=" parallax base-gradient light-txt"
         style="background-image: url('<?php echo esc_url($mark_parallax_image[0]); ?>');">
    <div class="container-full">
        <div class="row">
            <div class="col-md-6 text-center space-3 align-self-center">
                <h5 class="text-uppercase letter-space-2">
                    <?php echo esc_html($mark_section_meta['heading'])?>
                </h5>
            </div>
            <div class="col-md-6 space-3 pl-5 dark-bg-opacity">
                <div class="row">
                    <div class="col-lg-8 col-11">
                        <h2 class="text-light mb-3">
                            <?php echo esc_html($mark_section_meta['sub-heading'])?>
                        </h2>

                        <?php echo apply_filters('the_content',$mark_section_meta['description']) ?>
                        <a href="<?php echo esc_url($mark_section_meta['button-url'])?>" class="btn btn-primary-solid">
                            <?php echo esc_html($mark_section_meta['button-label'])?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- parallax section end -->