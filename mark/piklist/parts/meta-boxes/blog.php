<?php
    /**
     * Title: Blog  Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_blog_section',
        'label'  => __('Section Information','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Section Heading', 'mark'),
                'value' => __('Blog','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'nav_label',
                'label' => __('Navigation Label', 'mark'),
                'value' => __('View All Blog Posts','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'file',
                'field' => 'background_image',
                'label' => __('Background Image', 'mark'),
            ),
        )
    ));