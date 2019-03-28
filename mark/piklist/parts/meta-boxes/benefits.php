<?php
    /**
     * Title: Benefits Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'   => 'group',
                       'field'  => 'mark_benefits_section',
                       'label'  => __('Benefits Information', 'mark'),
                       'fields' => array(
                           array(
                               'type'     => 'group',
                               'field'    => 'mark_benefits',
                               'label'    => __('Benefits Section Details', 'mark'),
                               'fields'   => array(
                                   array(
                                       'type'       => 'file',
                                       'field'      => 'image',
                                       'label'      => __('Benefits Image', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'heading',
                                       'label'      => __('Benefits Heading', 'mark'),
                                       'value'      => __('Benefits', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'description',
                                       'label'      => __('Benefits Description', 'mark'),
                                       'value'      => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, nostrum, porro! Cum ducimus ea eaque ex explicabo facilis impedit ipsum laborum maxime', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                               )
                           ),
                           array(
                               'type'       => 'group',
                               'field'      => 'benefits',
                               'label'      => __('Benefits Information Details', 'mark'),
                               'value'      => __('Some benefits goes here', 'mark'),
                               'add_more' => true,
                               'fields' => array(
                                   array(
                                     'type' => 'text',
                                     'field' => 'benefit_icon',
                                     'label' => __('Fav-Icons Name For Benefits','mark'),
                                     'value' => __('fa-check','mark'),
                                     'attributes' => array(
                                         'class' => 'widefat'
                                     )
                                   ),
                                   array(
                                     'type' => 'text',
                                     'field' => 'benefit',
                                     'label' => __('Benefits Information','mark'),
                                     'value' => __('Some Benefits Goes Here','mark'),
                                     'attributes' => array(
                                         'class' => 'widefat'
                                     )
                                   ),
                               )
                           ),
                       )
                   )
    );