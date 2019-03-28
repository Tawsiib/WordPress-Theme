<?php
    /**
     * Title: Testimonials Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'     => 'group',
                       'field'    => 'mark_testimonials_section',
                       'label'    => __('Testimonials Information', 'mark'),
                       'fields'   => array(
                           array(
                               'type'       => 'text',
                               'field'      => 'section-heading',
                               'label'      => __('Section Heading', 'mark'),
                               'value'      => __('Testimonials', 'mark'),
                               'attributes' =>array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'     => 'group',
                               'field'    => 'mark_testimonials',
                               'label'    => __('Section Details', 'mark'),
                               'add_more' => true,
                               'fields'   => array(
                                   array(
                                       'type'       => 'file',
                                       'field'      => 'image',
                                       'label'      => __('Photo', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'title',
                                       'label'      => __('Title', 'mark'),
                                       'value'      => __('Asib Ikbal', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'textarea',
                                       'field'      => 'testimonial',
                                       'label'      => __('Testimonials Description', 'mark'),
                                       'value'      => __('This one is a big one that has been haunting me since teenage years. When I was in
                            highschool. This one is a big one that has been haunting me since teenage years.', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                               )
                           ),

                       )
                   )
    );