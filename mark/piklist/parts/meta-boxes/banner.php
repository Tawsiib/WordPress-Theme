<?php
    /**
     * Title: Banner Information
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_banner_section',
        'label'  => __('Banner Information','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Banner Heading', 'mark'),
                'value' => __('Gain the beautiful result','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'sub-heading',
                'label' => __('Banner Sub-Heading', 'mark'),
                'value' => __('Unlocking the next dimension in business analysis','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'file',
                'field' => 'image',
                'label' => __('Banner Image', 'mark'),
            ),
            array(
                'type'  => 'text',
                'field' => 'button-one-label',
                'label' => __('Banner button one label', 'mark'),
                'value' => __('lets start now','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button-two-label',
                'label' => __('Banner button two label', 'mark'),
                'value' => __('purchase now','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button-one-url',
                'label' => __('Banner button one url', 'mark'),
                'value' => __('https://facebook.com/asib.ikbal','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button-two-url',
                'label' => __('Banner button two url', 'mark'),
                'value' => __('https://facebook.com/asib.ikbal','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));