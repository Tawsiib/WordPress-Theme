<?php
    /**
     * Title: Section Type
     * Post Type: section
     */
    piklist('field', array(
        'type'    => 'select',
        'field'   => 'nattours_section_type',
        'label'   => __('Select Section Type', 'nattours'),
        'choices' => array(
            'banner'      => __('Banner', 'nattours'),
            'about'       => __('About', 'nattours'),
            'feature'     => __('Feature', 'nattours'),
            'reservation' => __('Reservation', 'nattours'),
            'story'       => __('Story', 'nattours'),
            'pricing'     => __('Pricing', 'nattours'),
        ),
    ));