<?php
    global $tour_section;
    $tour_section_id = get_post($tour_section);
    $tour_section_meta = get_post_meta($tour_section,'tour_banner_section',true);
?>
<?php if (isset($tour_section_meta) && is_array($tour_section_meta)): ?>
<header class="header" id="<?php esc_attr_e($tour_section_id->post_name); ?>">
    <div class="header__logo-box">
        <?php
            if (current_theme_supports('custom-logo') && has_custom_logo()){
                the_custom_logo();
            }
        ?>
    </div>
    <div class="header__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">
                <?php esc_html_e($tour_section_meta['heading']); ?>
            </span>
            <span class="heading-primary--sub">
                <?php esc_html_e($tour_section_meta['sub-heading']); ?>
            </span>
        </h1>
        <a href="<?php echo esc_url($tour_section_meta['button-url']) ?>" class="btn btn--white btn--animated">
            <?php esc_html_e($tour_section_meta['button-label']) ?>
        </a>
    </div>
</header>
<?php endif; ?>