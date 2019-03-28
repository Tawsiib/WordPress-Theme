<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_portfolio_section', true);
    $mark_portfolios   = $mark_section_meta['mark_portfolio'];
    $mark_filters      = array();
    if (count($mark_portfolios) > 0) {
        foreach ($mark_portfolios as $mark_portfolio) {
            $mark_temp_filters = explode(",", $mark_portfolio['filter']);
            foreach ($mark_temp_filters as $mark_temp_filter) {
                $mark_filters[strtolower(trim($mark_temp_filter))] = $mark_temp_filter;
            }
        }
    }
?>
<!--portfolio section start-->
<section class="space-3 space-adjust" id="portfolio">
    <div class="section-title text-center">
        <h2 class="title">
            <?php echo esc_html($mark_section_meta['section-heading']) ?>
        </h2>
    </div>
    <!--portfolio-->
    <div class="container">

        <div class="text-center">
            <ul class="portfolio-filter">
                <li class="active"><a href="#" data-filter="*"> All</a></li>
                <?php
                    foreach ($mark_filters as $mark_filter):
                        $mark_filter_link = strtolower($mark_filter);
                ?>
                <li>
                    <a href="#" data-filter=".<?php echo esc_attr(trim($mark_filter_link));?>">
                       <?php echo esc_html($mark_filter);?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php if (count($mark_portfolios) > 0) :?>
        <div class="row portfolio portfolio-gallery column-3 gutter "><!--portfolio grid option col-2 - col-6 -->
            <?php
                foreach ($mark_portfolios as $mark_portfolio):
                    $mark_image_full = wp_get_attachment_image_src($mark_portfolio['image'][0],'large');
                    $mark_image_medium = wp_get_attachment_image_src($mark_portfolio['image'][0],'medium');
                    $mark_image_class =str_replace(","," ",$mark_portfolio['filter']);
            ?>
            <div class="portfolio-item <?php echo esc_attr(strtolower($mark_image_class));?> ">
                <a href="<?php echo esc_url($mark_image_full[0])?>"
                   class="thumb popup-gallery" title="<?php echo esc_attr($mark_portfolio['title'])?>">
                    <img src="<?php echo esc_url($mark_image_medium[0])?>"
                         alt="<?php echo esc_attr($mark_portfolio['title'])?>">
                    <div class="portfolio-hover">
                        <div class="portfolio-description">
                            <h4 class="mb-1">
                                <?php echo esc_html($mark_portfolio['title'])?>
                            </h4>
                            <p>Lightbox</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

    </div>
    <!--portfolio-->
</section>
<!--portfolio section end-->