<?php
    /**
     * Title: Pricing Plan
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'   => 'group',
                       'field'  => 'tour_pricing_section',
                       'label'  => __('Pricing Information', 'tour'),
                       'fields' => array(
                           array(
                               'type'       => 'text',
                               'field'      => 'section-heading',
                               'label'      => __('Section Heading', 'tour'),
                               'value'      => __('Most Popular Tours', 'tour'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type' => 'group',
                               'field' => 'pricing',
                               'label'    => __('Popup Details', 'tour'),
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
                                       'label'      => __('Pricing Heading', 'tour'),
                                       'value'      => __('Start Booking Now', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'options',
                                       'label'      => __('Pricing Options', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'number',
                                       'field'      => 'price',
                                       'label'      => __('Price', 'tour'),
                                       'value'      => 297,
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),

                                   array(
                                       'type'       => 'text',
                                       'field'      => 'pricing_button_label',
                                       'label'      => __('Pricing Button Label', 'tour'),
                                       'value'      => __('Book Now!', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                               ),
                           ),
                           array(
                               'type'       => 'text',
                               'field'      => 'button_label',
                               'label'      => __('Button Label', 'tour'),
                               'value'      => __('Book Now!', 'tour'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'       => 'url',
                               'field'      => 'button_url',
                               'label'      => __('Button Url', 'tour'),
                               'value'      => __('https://', 'tour'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),

                       )
                   )
    );
