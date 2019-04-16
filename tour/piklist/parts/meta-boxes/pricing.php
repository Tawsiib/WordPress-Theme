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
                               'field' => 'popup',
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
                                       'field'      => 'popup-heading',
                                       'label'      => __('Pop-Up Heading', 'tour'),
                                       'value'      => __('Start Booking Now', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'sub-heading',
                                       'label'      => __('Pop-Up Sub-Heading', 'tour'),
                                       'value'      => __('IMPORTANT – PLEASE READ THESE TERMS BEFORE BOOKING', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'description',
                                       'label'      => __('Pop-Up Description', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'popup_button_label',
                                       'label'      => __('Pop-Up Button Label', 'tour'),
                                       'value'      => __('Book Now!', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'popup_button_url',
                                       'label'      => __('Pop-Up Button Url', 'tour'),
                                       'value'      => __('Book Now!', 'tour'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'  => 'file',
                                       'field' => 'image',
                                       'label' => __('Image', 'tour'),
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
