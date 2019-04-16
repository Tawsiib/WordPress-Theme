<?php
    /**
     * Title: Sections Information
     * Post Type: page
     */
    piklist('field', array(
                       'type'     => 'select',
                       'field'    => 'tour_page_sections',
                       'label'    => __('Sections', 'mark'),
                       'add_more' => true,
                       'choices'  => piklist(
                           get_posts(
                               array(
                                   'posts_per_page' => -1,
                                   'post_type'      => 'section',
                               )
                           ), array('ID', 'post_title'))
                   )
    );