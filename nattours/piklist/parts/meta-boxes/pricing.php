<?php
    /**
     * Title: Pricing Plan
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'   => 'group',
                       'field'  => 'nattours_pricing_section',
                       'label'  => __('Pricing Information', 'nattours'),
                       'fields' => array(
                           array(
                               'type'       => 'text',
                               'field'      => 'section-heading',
                               'label'      => __('Section Heading', 'nattours'),
                               'value'      => __('Most Popular Tours', 'nattours'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type' => 'group',
                               'field' => 'pricing',
                               'label'    => __('Pricing Details', 'nattours'),
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
                                       'type'       => 'text',
                                       'field'      => 'heading',
                                       'label'      => __('Pricing Heading', 'nattours'),
                                       'value'      => __('Start Booking Now', 'nattours'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'options',
                                       'label'      => __('Pricing Options', 'nattours'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'number',
                                       'field'      => 'price',
                                       'label'      => __('Price', 'nattours'),
                                       'value'      => 297,
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'pricing_button_label',
                                       'label'      => __('Pricing Button Label', 'nattours'),
                                       'value'      => __('Book Now!', 'nattours'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                               ),
                           ),
                           array(
                               'type'       => 'text',
                               'field'      => 'button_label',
                               'label'      => __('Button Label', 'nattours'),
                               'value'      => __('Book Now!', 'nattours'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'       => 'url',
                               'field'      => 'button_url',
                               'label'      => __('Button Url', 'nattours'),
                               'value'      => __('https://', 'nattours'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),

                       )
                   )
    );
