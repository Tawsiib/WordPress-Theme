<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_team_section', true);
    $mark_team_members = $mark_section_meta['mark_team'];
?>
<!--team section start-->
<section class="space-3 space-adjust" id="team">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2 class="title ">
                        <?php echo esc_html($mark_section_meta['section-heading'])?>
                    </h2>
                    <div class="sub-title">
                        <?php echo apply_filters('the_content',$mark_section_meta['description']);?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (count($mark_team_members)>0): ?>
        <div class="row">
            <?php
                foreach ($mark_team_members as $mark_team_member):
                    $mark_social_profiles = $mark_team_member['mark_social_profiles'];
                    $mark_team_image_id = $mark_team_member['image'][0];
                    $mark_team_image = wp_get_attachment_image_src($mark_team_image_id,'large');
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 team-member">
                <?php if (isset($mark_team_image)): ?>
                <div class="thumb">
                    <img src="<?php echo esc_url($mark_team_image[0]); ?>" alt="">
                </div>
                <?php endif; ?>
                <h3 class="team-title">
                    <?php echo esc_html($mark_team_member['name'])?>
                </h3>
                <div class="team-designation">
                    <?php echo esc_html($mark_team_member['title'])?>
                </div>

                <div class="team-socail-links">
                    <?php
                        foreach ($mark_social_profiles as $social_key=>$mark_social_profile):
                            if ($mark_social_profile != ''):
                    ?>
                    <a href="<?php echo esc_url($mark_social_profile)?>">
                        <i class="fa fa-<?php echo esc_attr($social_key);?>"></i>
                    </a>
                        <?php
                            endif;
                        endforeach;
                    ?>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- team section end-->