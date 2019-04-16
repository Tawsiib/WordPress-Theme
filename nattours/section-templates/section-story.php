<?php
    global $nattours_section;
    $nattours_section_meta = get_post_meta($nattours_section,'nattours_story_section',true);
    $nattours_section_id = get_post($nattours_section);
    $nattours_arguments = array(
            'post_type' => 'story',
            'meta_key' => 'is_recommended',
            'meta_value' => 'yes',
            'post_status' => 'publish',
            'posts_per_page' => 2,
    );
    $nattours_story = new WP_Query($nattours_arguments);
?>

<section class="section-stories" id="<?php esc_attr_e($nattours_section_id->post_name); ?>">
    <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri()?>./assets/img/video.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri()?>./assets/img/video.webm" type="video/webm">
            <?php _e('Your browser is not supported!','nattours'); ?>
        </video>
    </div>

    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
            <?php esc_html_e($nattours_section_meta['story-heading']) ?>
        </h2>
    </div>
    <?php
     while ($nattours_story->have_posts()):
        $nattours_story->the_post();
    ?>
    <div class="row">
        <div class="story">
            <figure class="story__shape">
                <?php echo get_avatar(get_the_author_meta('ID'),'full',null,'Person on a nattours',array('height'=>150,'width'=>200,'class' => 'story__img'))?>
                <figcaption class="story__caption"><?php the_author(); ?></figcaption>
            </figure>
            <div class="story__text">
                <h3 class="heading-tertiary u-margin-bottom-small"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    <?php
     endwhile;
     wp_reset_query();
    ?>
    <div class="u-center-text u-margin-top-huge">
        <a href="<?php echo esc_url(home_url("/")."stories")?>" class="btn-text">
           <?php esc_html_e($nattours_section_meta['button_label']) ?> &rarr;
        </a>
    </div>
</section>