<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_benefits_section', true);
    $mark_benefits=($mark_section_meta['benefits']);
    $mark_benefits_info = $mark_section_meta['mark_benefits'];
    $mark_section_meta = $mark_benefits_image_id = $mark_benefits_info['image'][0];
    if (isset($mark_benifits_image_id)) {
        $mark_benefits_image = wp_get_attachment_image_src($mark_benefits_image_id, 'medium-large');
    } else {
        $mark_benefits_image = array(get_template_directory_uri() . '/assets/img/diagram.png');
    }
?>
<!--block section start-->
<section class="space-3 section-gray">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="section-title mb-4">
                    <h2 class="title">
                        <?php echo esc_html($mark_benefits_info['heading']) ?>
                    </h2>
                </div>
                <?php
                    echo apply_filters('the_content', $mark_benefits_info['description']);
                    if (isset($mark_benefits) && is_array($mark_benefits)):
                        foreach ($mark_benefits as $mark_benefit):
                            if (isset($mark_benefit['benefit_icon']) && !empty($mark_benefit['benefit_icon'])){
                                $mark_benefit_icon = $mark_benefit['benefit_icon'];
                            }else{
                                $mark_benefit_icon = 'fa-check';
                            }
                            ?>
                            <ul class="list-unstyled">
                                <li><i class="fa <?php echo esc_attr($mark_benefit_icon)?> pr-2 text-purple"></i>
                                    <?php echo esc_html($mark_benefit['benefit']); ?>
                                </li>
                            </ul>
                        <?php
                        endforeach;
                    endif;
                ?>
            </div>

            <div class="col-md-6 order-md-first">
                <img class="img-fluid mb-mt-0 mt-4"
                     src="<?php echo esc_url($mark_benefits_image[0]) ?>" alt=""/>
            </div>

        </div>
    </div>
    <div class="arrow-bottom-shape pt-5"></div>
</section>
<!--block section end-->