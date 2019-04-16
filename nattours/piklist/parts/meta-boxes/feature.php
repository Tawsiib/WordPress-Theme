<?php
    /**
     * Title: Feature Information
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'     => 'group',
        'field'    => 'nattours_feature_section',
        'add_more' => true,
        'validate' => array(
            array(
                'type'    => 'limit',
                'options' => array(
                    'min' => 1,
                    'max' => 4
                )
            )
        ),
        'fields'   => array(
            array(
                'type'       => 'text',
                'field'      => 'heading',
                'label'      => __('Feature Heading', 'nattours'),
                'value'      => __('Explore The World', 'nattours'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'textarea',
                'field'      => 'description',
                'label'      => __('Feature Description', 'nattours'),
                'value'      => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.', 'nattours'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'icon',
                'label' => __('Featured Icon Name', 'nattours'),
                'value' => __('','nattours'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
        )
    ));
