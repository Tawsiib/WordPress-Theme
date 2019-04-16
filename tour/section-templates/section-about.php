<?php
    global $tour_section;
    $tour_section_id = get_post($tour_section);
    $tour_section_meta = get_post_meta($tour_section,'tour_about_section',true);
    if (isset($tour_section_meta) && is_array($tour_section_meta)):
        $tour_about_informations = $tour_section_meta['about_info'];
?>
    <section class="section-about"  id="<?php esc_attr_e($tour_section_id->post_name); ?>">
        <?php if (isset($tour_section_meta['heading'])): ?>
    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
            <?php esc_html_e($tour_section_meta['heading']); ?>
        </h2>
    </div>
        <?php endif; ?>
    <div class="row">
    <?php if (isset($tour_about_informations) && !empty($tour_about_informations)): ?>
        <div class="col-1-of-2">
            <?php
                foreach ($tour_about_informations as $tour_about_information):
            ?>
            <h3 class="heading-tertiary u-margin-bottom-small">
                <?php esc_html_e($tour_about_information['sub-heading']); ?>
            </h3>
            <p class="paragraph">
                <?php esc_html_e($tour_about_information['description']); ?>
            </p>
            <?php endforeach; ?>

            <a href="<?php echo esc_url($tour_section_meta['button-url'])?>" class="btn-text">
                <?php  esc_html_e($tour_section_meta['button-label']); ?> &rarr;
            </a>
        </div>
    <?php
    endif;
    if (isset($tour_about_informations)):
    ?>
        <div class="col-1-of-2">
            <div class="composition">
                <?php
                    $tour_counter = 1;
                    foreach ($tour_about_informations as $tour_about_information):
                    $tour_gallery_image_id = $tour_about_information['gallery_image'][0];
                    if (isset($tour_gallery_image_id) && !empty($tour_gallery_image_id)){
                        $tour_gallery_image_large = wp_get_attachment_image_src($tour_gallery_image_id,'full');
                        $tour_gallery_image_small = wp_get_attachment_image_src($tour_gallery_image_id,'tour-small');
                    }
                    else{
                        $tour_gallery_image_large = array(get_template_directory_uri().'/assets/img/nat-1-large.jpg');
                        $tour_gallery_image_small = array(get_template_directory_uri().'/assets/img/nat-1.jpg');
                    }
                ?>
                <img srcset="<?php echo esc_url($tour_gallery_image_small[0]) ?> 300w, <?php echo esc_url($tour_gallery_image_large[0]) ?> 1000w"
                     sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                     alt="Photo 1"
                     class="composition__photo composition__photo--p<?php esc_attr_e($tour_counter++)?>"
                     src="<?php echo esc_url($tour_gallery_image_large[0])?>">
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>