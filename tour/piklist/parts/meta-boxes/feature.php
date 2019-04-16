<?php
    /**
     * Title: Feature Information
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'     => 'group',
        'field'    => 'tour_feature_section',
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
                'label'      => __('Feature Heading', 'tour'),
                'value'      => __('Explore The World', 'tour'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'textarea',
                'field'      => 'description',
                'label'      => __('Feature Description', 'tour'),
                'value'      => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.', 'tour'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'icon',
                'label' => __('Featured Icon Name', 'tour'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
        )
    ));
