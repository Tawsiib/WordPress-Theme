<?php
    global $mark_section;
    $mark_section_meta = get_post_meta($mark_section, 'mark_blog_section', true);
    $mark_posts        = get_posts(array(
                                       'posts_per_page' => 1,
                                       'orderby'        => 'date',
                                       'order'          => 'DESC',
                                       'status'         => 'publish'
                                   ));
    if (count($mark_posts)>0):
        $mark_post_thumbnail = get_the_post_thumbnail_url($mark_posts[0],'mark-blog-landscape');
        $mark_post_background = $mark_section_meta['background_image'][0];

        if ($mark_post_background){
            $mark_blog_bg = wp_get_attachment_image_src($mark_post_background,'mark-blog-bg');
        }
        else{
            $mark_post_bg = array(get_template_directory_uri().'/assets/img/b-img.jpg');
        }
        ?>
<!--blog section start-->
<section class="blog-block" id="blog">
    <!--<div class="">-->
    <div class="row">
        <div class="col-md-6 align-self-center">

            <div class="img-block-txt">
                <div class="section-title">
                    <h2 class="title ">
                        <?php echo esc_html($mark_section_meta['heading']); ?>
                    </h2>
                </div>
                <h2 class="mb-1">
                    <a href="<?php echo get_the_permalink($mark_posts[0]);?>">
                        <?php echo esc_html($mark_posts[0]->post_title)?>
                    </a>
                </h2>
                <div class="meta mb-4">
                    <a href="#" class="date">
                        <?php echo get_the_date('',$mark_posts[0])?>
                    </a>
                    <?php _e('By','mark'); ?>
                    <a href="#">
                        <?php echo get_the_author_meta('display_name',$mark_posts[0]->post_author)?>
                    </a>
                </div>
                <?php echo apply_filters('the_content',$mark_posts[0]->post_excerpt);?>
                <a href="<?php echo get_the_permalink(get_option('page_for_posts'));?>" class="btn-link">
                    <?php echo esc_html($mark_section_meta['nav_label']) ?>
                </a>
            </div>
        </div>
        <div class="col-md-6 base-gradient blog-bg-height"
             style="background: url('<?php echo esc_url($mark_blog_bg[0]) ?>') center center / cover no-repeat; ">
            <img src="<?php if($mark_post_thumbnail){echo esc_url($mark_post_thumbnail);} ?>" alt=""/>
        </div>
    </div>
    <!--</div>-->
</section>
<!--blog section end-->
<?php endif; ?>