<?php
    /**
     * Title: Section Type
     * Post Type: section
     */
    piklist('field', array(
        'type'    => 'select',
        'field'   => 'tour_section_type',
        'label'   => __('Select Section Type', 'mark'),
        'choices' => array(
            'banner'      => __('Banner', 'mark'),
            'about'       => __('About', 'mark'),
            'feature'     => __('Feature', 'mark'),
            'reservation' => __('Reservation', 'mark'),
            'story'       => __('Story', 'mark'),
            'pricing'     => __('Pricing', 'mark'),

        ),
    ));