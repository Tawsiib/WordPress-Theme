<?php
    global $nattours_section;
    $nattours_section_id = get_post($nattours_section);
    $nattours_section_meta = get_post_meta($nattours_section,'nattours_about_section',true);
    if (isset($nattours_section_meta) && is_array($nattours_section_meta)):
        $nattours_about_informations = $nattours_section_meta['about_info'];
?>
    <section class="section-about"  id="<?php esc_attr_e($nattours_section_id->post_name); ?>">
        <?php if (isset($nattours_section_meta['heading'])): ?>
    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
            <?php esc_html_e($nattours_section_meta['heading']); ?>
        </h2>
    </div>
        <?php endif; ?>
    <div class="row">
    <?php if (isset($nattours_about_informations) && !empty($nattours_about_informations)): ?>
        <div class="col-1-of-2">
            <?php
                foreach ($nattours_about_informations as $nattours_about_information):
            ?>
            <h3 class="heading-tertiary u-margin-bottom-small">
                <?php esc_html_e($nattours_about_information['sub-heading']); ?>
            </h3>
            <p class="paragraph">
                <?php esc_html_e($nattours_about_information['description']); ?>
            </p>
            <?php endforeach; ?>

            <a href="<?php echo esc_url($nattours_section_meta['button-url'])?>" class="btn-text">
                <?php  esc_html_e($nattours_section_meta['button-label']); ?> &rarr;
            </a>
        </div>
    <?php
    endif;
    if (isset($nattours_about_informations)):
    ?>
        <div class="col-1-of-2">
            <div class="composition">
                <?php
                    $nattours_counter = 1;
                    foreach ($nattours_about_informations as $nattours_about_information):
                    $nattours_gallery_image_id = $nattours_about_information['image'][0];
                    if (isset($nattours_gallery_image_id) && !empty($nattours_gallery_image_id)){
                        $nattours_gallery_image_large = wp_get_attachment_image_src($nattours_gallery_image_id,'full');
                        $nattours_gallery_image_small = wp_get_attachment_image_src($nattours_gallery_image_id,'nattours-small');
                    }
                    else{
                        $nattours_gallery_image_large = array(get_template_directory_uri().'/assets/img/nat-1-large.jpg');
                        $nattours_gallery_image_small = array(get_template_directory_uri().'/assets/img/nat-1.jpg');
                    }
                ?>
                <img srcset="<?php echo esc_url($nattours_gallery_image_small[0]) ?> 300w, <?php echo esc_url($nattours_gallery_image_large[0]) ?> 1000w"
                     sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                     alt="Photo 1"
                     class="composition__photo composition__photo--p<?php esc_attr_e($nattours_counter++)?>"
                     src="<?php echo esc_url($nattours_gallery_image_large[0])?>">
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>