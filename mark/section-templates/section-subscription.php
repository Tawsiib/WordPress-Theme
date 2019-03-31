<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section,'mark_subscription_section',true);
?>
<!-- subscribe section start -->
<section class="space-2 subscribe-from">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline row" method="post" target="_blank"
                      action="<?php echo esc_url($mark_section_meta['url']);?>">
                    <div class="form-group col-lg-3 col-md-4">
                        <h3><?php echo esc_html($mark_section_meta['heading'])?></h3>
                    </div>
                    <div class="form-group col-lg-6 col-md-5">
                        <input  name="EMAIL" type="text" class="form-control w-100"
                               placeholder="<?php _e('Enter your email address','mark'); ?>" />
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <button type="submit" class="btn btn-block btn-primary-solid">
                            <?php echo esc_html($mark_section_meta['button_label'])?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- subscribe section end -->