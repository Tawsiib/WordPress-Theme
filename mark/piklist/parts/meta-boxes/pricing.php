<?php
    /**
     * Title: Pricing Plan
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'   => 'group',
                       'field'  => 'mark_pricing_section',
                       'label'  => __('Pricing Information', 'mark'),
                       'fields' => array(
                           array(
                               'type'       => 'text',
                               'field'      => 'section-heading',
                               'label'      => __('Pricing Section Heading', 'mark'),
                               'value'      => __('Choose Your Plan', 'mark'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'       => 'text',
                               'field'      => 'sub-heading',
                               'label'      => __('Pricing Section Sub Heading', 'mark'),
                               'value'      => __('Nam libero tempore cum soluta nobis est eligendi.', 'mark'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'     => 'group',
                               'field'    => 'pricing_plans',
                               'label'    => __('Pricing Plans', 'mark'),
                               'add_more' => true,
                               'fields'   => array(
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'heading',
                                       'label'      => __('Title', 'mark'),
                                       'value'      => __('Basic', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'price',
                                       'label'      => __('Pricing', 'mark'),
                                       'value'      => __('10', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'tenure',
                                       'label'      => __('Tenure', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'options',
                                       'label'      => __('Pricing Options', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'    => 'radio',
                                       'field'   => 'is_recommended',
                                       'label'   => 'Would you like to recommend this plan?',
                                       'value'   => 'no',
                                       'choices' => array(
                                           'yes' => 'Yes',
                                           'no'  => 'No',
                                       ),
                                   ),
                                   array(
                                       'type'  => 'text',
                                       'field' => 'recommended_label',
                                       'label' => __('Recommended Label', 'mark'),
                                       'value' => __('Recommended', 'mark'),
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'button_label',
                                       'label'      => __('Button Label', 'mark'),
                                       'value'      => __('Purchase Now', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'button_url',
                                       'label'      => __('Button Url', 'mark'),
                                       'value'      => __('#', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),

                               )
                           ),
                           array(
                               'type'       => 'file',
                               'field'      => 'image',
                               'label'      => __('Image', 'mark'),
                           ),

                       )
                   )
    );
