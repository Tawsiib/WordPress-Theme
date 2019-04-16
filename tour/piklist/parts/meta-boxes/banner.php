<?php
    /**
     * Title: Banner Information
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'   => 'group',
        'field'  => 'tour_banner_section',
        'validate' => array(
            array(
                'type'    => 'limit',
                'options' => array(
                    'min' => 1,
                )
            )
        ),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Heading', 'tour'),
                'value' => __('OUTDOORS','tour'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'sub-heading',
                'label' => __('Banner Sub-Heading', 'tour'),
                'value' => __('IS WHERE LIFE HAPPENS','tour'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button-label',
                'label' => __('Button Label', 'tour'),
                'value' => __('Discover Our Tours','tour'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button-url',
                'label' => __('Button Url', 'tour'),
                'value' => __('https://facebook.com/asib.ikbal','tour'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));
