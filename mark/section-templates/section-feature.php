<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_feature_section', true);
?>

<!--feature section start-->
<section class="space-3 section-gray">
    <div class="arrow-top-shape"></div>
    <div class="container">
        <div class="row justify-content-md-center">
            <?php
                if (isset($mark_section_meta)):
                    foreach ($mark_section_meta as $mark_feature):
                        $mark_featured_icon_id = $mark_feature['icon'][0];
                        if ($mark_featured_icon_id){
                            $mark_featured_icon = wp_get_attachment_image_src($mark_featured_icon_id,'thumbnail');
                        }else{
                            $mark_featured_icon = array(get_template_directory_uri().'/assets/img/icon/icon-3.jpg');
                        }
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="feature-list text-center">
                    <div class="feature-list-img">
                        <img src="<?php echo esc_url($mark_featured_icon[0]) ;?>" alt="">
                    </div>
                    <h3 class="feature-title">
                        <?php echo esc_html($mark_feature['heading'])?>
                    </h3>
                    <div class="feature-info">
                        <?php echo apply_filters('the_content',$mark_feature['description']);?>
                    </div>
                </div>
            </div>
            <?php
                    endforeach;
                endif;
            ?>

        </div>
    </div>
</section>
<!--feature section end-->