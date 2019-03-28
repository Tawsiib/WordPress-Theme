<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_counter_section', true);
    $mark_fun_factors = isset($mark_section_meta)?$mark_section_meta:array();
    $mark_columns = array(1=>12,2=>6,3=>4,4=>3);
    $mark_column = $mark_columns[count($mark_fun_factors)];

?>
<!-- fun factor section start -->
<section class="space-3">
    <div class="container">
        <div class="row">
            <?php
                foreach ($mark_fun_factors as $mark_fun_factor):
            ?>
            <div class="col-lg-<?php echo esc_attr($mark_column)?> col-md-6 col-6">
                <div class="fun-box text-center fun-separator">
                    <div class="value" data-target="<?php echo esc_attr($mark_fun_factor['number'])?>">0</div>
                    <div class="title">
                        <?php echo esc_html($mark_fun_factor['title'])?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- fun factor section end -->