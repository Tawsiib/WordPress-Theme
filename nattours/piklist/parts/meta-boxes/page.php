<?php
    /**
     * Title: Sections Information
     * Post Type: page
     */
    piklist('field', array(
                       'type'     => 'select',
                       'field'    => 'nattours_page_sections',
                       'label'    => __('Sections', 'nattours'),
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