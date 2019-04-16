<?php
    /**
     * Title: Banner Information
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'   => 'group',
        'field'  => 'nattours_banner_section',
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
                'label' => __('Heading', 'nattours'),
                'value' => __('OUTDOORS','nattours'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'sub-heading',
                'label' => __('Banner Sub-Heading', 'nattours'),
                'value' => __('IS WHERE LIFE HAPPENS','nattours'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button-label',
                'label' => __('Button Label', 'nattours'),
                'value' => __('Discover Our Tours','nattours'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button-url',
                'label' => __('Button Url', 'nattours'),
                'value' => __('https://facebook.com/asib.ikbal','nattours'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));
