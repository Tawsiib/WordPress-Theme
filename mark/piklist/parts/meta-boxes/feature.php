<?php
    /**
     * Title: Feature settings
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'     => 'group',
        'field'    => 'mark_feature_section',
        'label'    => __('Featured Information', 'mark'),
        'add_more' => true,
        'fields'   => array(
            array(
                'type'  => 'file',
                'field' => 'icon',
                'label' => __('Feature Icon', 'mark'),
            ),
            array(
                'type'       => 'text',
                'field'      => 'heading',
                'label'      => __('Feature Heading', 'mark'),
                'value'      => __('Reliability', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'editor',
                'field'      => 'description',
                'label'      => __('Feature Description', 'mark'),
                'value'      => __('Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem malesuada quam pellente.', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
        )
    ));