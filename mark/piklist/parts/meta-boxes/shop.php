<?php
    /**
     * Title: Shop Page Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_shop_section',
        'label'  => __('Shop Page Info','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Section Heading', 'mark'),
                'value' => __('Shop','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'number',
                'field' => 'number_of_products',
                'label' => __('Number Of Products', 'mark'),
                'value' => 6,
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button_label',
                'label' => __('Navigation Button Label', 'mark'),
                'value' => __('Go To Shop','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button_url',
                'label' => __('Navigation Button Url', 'mark'),
                'value' => __('#','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));