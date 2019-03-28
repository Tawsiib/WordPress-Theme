<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_image_info_section', true);
    $mark_image_info_id = $mark_section_meta['image'][0];
    if (isset($mark_image_info_id)){
        $mark_image = wp_get_attachment_image_src($mark_image_info_id,'medium-large');
    }else{
        $mark_image = array(get_template_directory_uri()."/assets/img/as2.jpg");
    }
?>
<!--block section start-->
<section class="bg-dark light-txt">
    <!--<div class="">-->
    <div class="row">
        <div class="col-md-6 align-self-center">
            <div class="img-block-txt">
                <h2 class="mb-3">
                    <?php echo esc_html($mark_section_meta['heading'])?>
                </h2>
                <?php echo apply_filters('the_content',$mark_section_meta['description']);?>
            </div>
        </div>
        <div class="col-md-6 block-bg-height"
             style="background: url('<?php echo esc_url($mark_image[0]); ?>') center center / cover no-repeat; "></div>
    </div>
    <!--</div>-->
</section>
<!--block section end-->