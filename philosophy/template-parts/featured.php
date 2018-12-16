<?php
$philosophy_featured  = new WP_Query(
    array(
        'meta_key'       => 'featured',
        'meta_value'     => '1',
        'posts_per_page' => 3,
    )
);

$philosophy_post_data = array();
while ( $philosophy_featured->have_posts() ) {
    $philosophy_featured->the_post();
    $philosophy_categories = get_the_category();
    $philosophy_random_categories = mt_rand(0,count($philosophy_categories)-1);
    $philosophy_post_data [] = array(
        'thumbnail'     => get_the_post_thumbnail_url(get_the_ID(), "large"),
        'category'      => $philosophy_categories[$philosophy_random_categories]->name,
        'title'         => get_the_title(),
        'date'          => get_the_date(),
        'author'        => get_the_author_meta("display_name"),
        'author_avatar' => get_avatar_url(get_the_author_meta('ID')),
    );
}

if ( $philosophy_featured->post_count > 1 ):
    ?>

    <div class="pageheader-content row">
        <div class="col-full">
            <div class="featured">
                <div class="featured__column featured__column--big">
                    <div class="entry" style="background-image:url('<?php echo esc_url($philosophy_post_data[0]['thumbnail']); ?>');">

                        <div class="entry__content">
                            <span class="entry__category">
                                <a href="#0">
                                    <?php echo esc_html($philosophy_post_data[0]['category'])?>
                                </a>
                            </span>

                            <h1>
                                <a href="#0" title="">
                                    <?php echo esc_html($philosophy_post_data[0]['title']); ?>
                                </a>
                            </h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar"
                                         src="<?php echo esc_url($philosophy_post_data[0]['author_avatar']); ?>" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li>
                                        <a href="#0">
                                            <?php echo esc_html($philosophy_post_data[0]['author']); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <?php echo esc_html($philosophy_post_data[0]['date']); ?>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->
                </div> <!-- end featured__big -->

                <div class="featured__column featured__column--small">
                    <?php for ( $i = 1; $i < 3; $i++ ): ?>
                        <div class="entry"
                             style="background-image:url('<?php echo esc_url($philosophy_post_data[$i]['thumbnail']); ?>');">

                            <div class="entry__content">
                                <span class="entry__category">
                                    <a href="#0">
                                        <?php echo esc_html($philosophy_post_data[$i]['category'])?>
                                    </a>
                                </span>

                                <h1>
                                    <a href="#0" title="">
                                        <?php echo esc_html($philosophy_post_data[$i]['title']); ?>
                                    </a>
                                </h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar"
                                             src="<?php echo esc_url($philosophy_post_data[$i]['author_avatar']); ?>"
                                             alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li>
                                            <a href="#0">
                                                <?php echo esc_html($philosophy_post_data[$i]['author']); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <?php echo esc_html($philosophy_post_data[$i]['date']); ?>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->
                    <?php endfor; ?>

                </div> <!-- end featured__small -->
            </div> <!-- end featured -->

        </div> <!-- end col-full -->
    </div> <!-- end pageheader-content row -->
<?php endif; ?>