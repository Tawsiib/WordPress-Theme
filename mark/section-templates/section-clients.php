<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section,'mark_clients_section',true);
    if (count($mark_section_meta)>0):
?>

<!-- clients section start -->
<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-logo">
                    <?php
                        foreach ($mark_section_meta as $mark_client):
                            $mark_client_logo_id = $mark_client['logo'][0];
                            $mark_client_logo = wp_get_attachment_image_src($mark_client_logo_id,'mark-logo',);
                    ?>
                    <a href="<?php echo esc_url($mark_client['url'])?>" class="client-item">
                        <img src="<?php echo esc_url($mark_client_logo[0]);?>"
                             alt="<?php echo esc_attr($mark_client['alt_txt'])?>">
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- clients section end -->
<?php endif; ?>