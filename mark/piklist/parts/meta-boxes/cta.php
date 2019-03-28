<?php
    /**
     * Title: Call To Action Information
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_cta_section',
        'label'  => __('CTA Information','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('CTA Heading', 'mark'),
                'value' => __('Are You Impressed?','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'sub-heading',
                'label' => __('CTA Sub-Heading', 'mark'),
                'value' => __('OR WANT TO KNOW MORE BEFORE PURCHASE','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),

            array(
                'type'  => 'text',
                'field' => 'button-one-label',
                'label' => __('CTA button one label', 'mark'),
                'value' => __('lets start now','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button-two-label',
                'label' => __('CTA button two label', 'mark'),
                'value' => __('purchase now','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button-one-url',
                'label' => __('CTA button one url', 'mark'),
                'value' => __('https://facebook.com/asib.ikbal','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'button-two-url',
                'label' => __('CTA button two url', 'mark'),
                'value' => __('https://facebook.com/asib.ikbal','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'file',
                'field' => 'image',
                'label' => __('Call To Action Image', 'mark'),
            ),
        )
    ));