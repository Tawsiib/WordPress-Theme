<?php
    /**
     * Title: About Meta Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_about_section',
        'label'  => __('About Information', 'mark'),
        'fields' => array(
            array(
                'type'       => 'file',
                'field'      => 'image',
                'label'      => __('About Parallax Image', 'mark'),
            ),array(
                'type'       => 'text',
                'field'      => 'heading',
                'label'      => __('About Heading', 'mark'),
                'value'      => __('About Us Heading', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'text',
                'field'      => 'sub-heading',
                'label'      => __('About Sub-Heading', 'mark'),
                'value'      => __('WE ARE WORKHOLIC', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'editor',
                'field'      => 'description',
                'label'      => __('About Description', 'mark'),
                'value'      => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, amet at atque, aut deserunt dignissimos dolor dolorum error facere id laboriosam minima molestias.', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'text',
                'field'      => 'button-label',
                'label'      => __('About Button Label', 'mark'),
                'value'      => __('Read More', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'       => 'text',
                'field'      => 'button-url',
                'label'      => __('About Button Url', 'mark'),
                'value'      => __('#', 'mark'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
        )
    ));