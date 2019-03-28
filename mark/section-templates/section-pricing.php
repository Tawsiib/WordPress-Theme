<?php
    global $mark_section;
    $mark_section_meta      = get_post_meta($mark_section, 'mark_pricing_section', true);
    $mark_parallax_image_id = $mark_section_meta['image'][0];
    if ($mark_parallax_image_id) {
        $mark_parallax_image = wp_get_attachment_image_src($mark_parallax_image_id, 'full');
    } else {
        $mark_parallax_image = array(get_template_directory_uri() . "/assets/img/parallax.jpg");
    }
?>

<!-- pricing section start -->
<section class="price-table-section" id="pricing">
    <div class="space-3 parallax price-bg-height"
         style="background-image: url('<?php echo esc_url($mark_parallax_image[0]) ?>');">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center light-txt">
                        <h2 class="title ">
                            <?php echo esc_html($mark_section_meta['section-heading']) ?>
                        </h2>
                        <div class="sub-title">
                            <?php echo apply_filters('the_content', $mark_section_meta['sub-heading']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if (count($mark_section_meta['pricing_plans']) > 0):
                    ?>
                    <div class="row">
                        <?php
                            foreach ($mark_section_meta['pricing_plans'] as $mark_pricing_plan):
                                $mark_recommended = $mark_pricing_plan['is_recommended'];
                                ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-list text-center <?php if ('yes' == $mark_recommended[0]) {
                                        echo esc_attr('featured-price');
                                    } ?>">
                                        <?php if ('yes' == $mark_recommended[0]): ?>
                                            <!--only for featured price-->
                                            <div class="ribbon">
                                                <img src="<?php echo get_template_directory_uri() ?>./assets/img/ribbon.png"
                                                     srcset="<?php echo get_template_directory_uri() ?>./assets/img/ribbon@2x.png 2x"
                                                     alt="">
                                            </div>

                                            <div class="recommanded">
                                                <?php echo esc_html($mark_pricing_plan['recommended_label']) ?>
                                            </div>
                                            <!--only for featured price-->
                                        <?php endif; ?>
                                        <h2 class="price-title">
                                            <?php echo esc_html($mark_pricing_plan['heading']) ?>
                                        </h2>
                                        <div class="price-value">
                                            <sup><?php _e('$', 'mark') ?></sup> <?php echo esc_html($mark_pricing_plan['price']) ?>
                                            <div class="price-duration">
                                                <?php echo esc_html($mark_pricing_plan['tenure']) ?>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled price-info-list">
                                            <?php
                                                $mark_plan_options = explode("\n", $mark_pricing_plan['options']);
                                                foreach ($mark_plan_options as $mark_plan_option):
                                                    ?>
                                                    <li>- <?php echo esc_html($mark_plan_option); ?></li>
                                                <?php endforeach; ?>

                                        </ul>
                                        <a href="#" class="btn
                                        <?php
                                            if ('yes' == $mark_recommended[0]):
                                                echo esc_attr('btn-primary-solid');
                                            else:
                                                echo esc_attr('btn-gray-border');
                                            endif;
                                        ?>">
                                            <?php echo esc_html($mark_pricing_plan['button_label']) ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</section>
<!-- pricing section end -->
