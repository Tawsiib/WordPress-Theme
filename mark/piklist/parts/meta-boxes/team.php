<?php
    /**
     * Title: Team Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
                       'type'   => 'group',
                       'field'  => 'mark_team_section',
                       'label'  => __('Team Information', 'mark'),
                       'fields' => array(
                           array(
                               'type'       => 'text',
                               'field'      => 'section-heading',
                               'label'      => __('Team Section Heading', 'mark'),
                               'value'      => __('Team', 'mark'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'       => 'textarea',
                               'field'      => 'description',
                               'label'      => __('Team Description', 'mark'),
                               'value'      => __('Team Description Goes here', 'mark'),
                               'attributes' => array(
                                   'class' => 'widefat'
                               )
                           ),
                           array(
                               'type'     => 'group',
                               'field'    => 'mark_team',
                               'label'    => __('Social Profiles', 'mark'),
                               'add_more' => true,
                               'fields'   => array(
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'name',
                                       'label'      => __('Team Member Name', 'mark'),
                                       'value'      => __('Asib Ikbal', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'       => 'text',
                                       'field'      => 'title',
                                       'label'      => __('Team Member Title', 'mark'),
                                       'value'      => __('CEO & Founder', 'mark'),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                                   array(
                                       'type'  => 'file',
                                       'field' => 'image',
                                       'label' => __('Team Member Photo', 'mark'),
                                   ),
                                   array(
                                       'type'       => 'group',
                                       'field'      => 'mark_social_profiles',
                                       'label'      => __('Social Profiles', 'mark'),
                                       'fields'     => mark_get_social_profiles(),
                                       'attributes' => array(
                                           'class' => 'widefat'
                                       )
                                   ),
                               )

                           ),



                       )
                   )
    );