<?php
    /**
     * Title: About Details
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'   => 'group',
        'field'  => 'tour_about_section',
        'label' => __('About Information','tour'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Heading', 'tour'),
                'value' => __('Exciting tours for adventurous people','tour'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button-label',
                'label' => __('Button Label', 'tour'),
                'value' => __('Learn more','tour'),
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
            array(
                'type' =>'group',
                'field' =>'about_info',
                'add_more' => true,
                'validate' => array(
                    array(
                        'type'    => 'limit',
                        'options' => array(
                            'min' => 1,
                            'max' => 3
                        )
                    )
                ),
                'fields' => array(
                    array(
                        'type'  => 'text',
                        'field' => 'sub-heading',
                        'label' => __('About Sub-Heading', 'tour'),
                        'value' => __('You\'re going to fall in love with nature','tour'),
                        'attributes'=> array(
                            'class' => 'widefat'
                        )
                    ),
                    array(
                        'type'  => 'textarea',
                        'field' => 'description',
                        'label' => __('About Description', 'tour'),
                        'value' => __('Description Goes Here...','tour'),
                        'attributes'=> array(
                            'class' => 'widefat'
                        )
                    ),
                    array(
                        'type'  => 'file',
                        'field' => 'image',
                        'label' => __('Image', 'tour'),
                    ),
                )
            ),



        )
    ));
