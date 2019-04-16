<?php
    /**
     * Title: About Details
     * Post Type: section
     * order: 20
     */
    piklist('field', array(
        'type'   => 'group',
        'field'  => 'nattours_about_section',
        'label' => __('About Information','nattours'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Heading', 'nattours'),
                'value' => __('Exciting nattourss for adventurous people','nattours'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button-label',
                'label' => __('Button Label', 'nattours'),
                'value' => __('Learn more','nattours'),
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
                        'label' => __('About Sub-Heading', 'nattours'),
                        'value' => __('You\'re going to fall in love with nature','nattours'),
                        'attributes'=> array(
                            'class' => 'widefat'
                        )
                    ),
                    array(
                        'type'  => 'textarea',
                        'field' => 'description',
                        'label' => __('About Description', 'nattours'),
                        'value' => __('Description Goes Here...','nattours'),
                        'attributes'=> array(
                            'class' => 'widefat'
                        )
                    ),
                    array(
                        'type'  => 'file',
                        'field' => 'image',
                        'label' => __('Image', 'nattours'),
                    ),
                )
            ),



        )
    ));
