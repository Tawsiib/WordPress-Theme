<?php
    global $nattours_section;
    $nattours_section_id = get_post($nattours_section);
    $nattours_section_meta = get_post_meta($nattours_section,'nattours_feature_section',true);
    if (isset($nattours_section_meta) && is_array($nattours_section_meta)):
?>
<section class="section-features" id="<?php esc_attr_e($nattours_section_id->post_name); ?>">
    <div class="row">
        <?php
            foreach ($nattours_section_meta as $nattours_feature_section):
        ?>
        <div class="col-1-of-4">
            <div class="feature-box">
                <i class="feature-box__icon <?php esc_attr_e($nattours_feature_section['icon']) ?>"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">
                    <?php esc_html_e($nattours_feature_section['heading']) ?>
                </h3>
                <p class="feature-box__text">
                    <?php esc_attr_e($nattours_feature_section['description']) ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>