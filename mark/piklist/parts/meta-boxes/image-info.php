<?php
    /**
     * Title: Image Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_image_info_section',
        'label'  => __('Image Section Information','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Image Heading', 'mark'),
                'value' => __('What are You feeling today?','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'editor',
                'field' => 'description',
                'label' => __('Image Description', 'mark'),
                'value' => __('One small step for man, one giant leap for mankind. :p','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'file',
                'field' => 'image',
                'label' => __('Image Section Description', 'mark'),
            ),
        )
    ));