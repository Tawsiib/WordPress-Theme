<?php
    /**
     * Title: Services Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'     => 'group',
                       'field'    => 'mark_services_section',
                       'label'    => __('Services Information', 'mark'),
                       'fields'   => array(
                           array(
                               'type'=> 'text',
                               'field'      => 'section-heading',
                               'label'      => __('Services Section Heading', 'mark'),
                               'value'      => __('Services', 'mark'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'     => 'group',
                               'field'    => 'mark_services',
                               'label'    => __('Services Section Details', 'mark'),
                               'add_more' => true,
                               'fields'   => array(
                                   array(
                                       'type'  => 'text',
                                       'field' => 'bi-icon',
                                       'label' => __('Services Icon', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'heading',
                                       'label'      => __('Services  Heading', 'mark'),
                                       'value'      => __('Web Solution', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'description',
                                       'label'      => __('Services Description', 'mark'),
                                       'value'      => __('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latinin contaversy.', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                               )
                           )
                       )
                   )
    );