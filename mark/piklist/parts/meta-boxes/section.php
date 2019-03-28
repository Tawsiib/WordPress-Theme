<?php
    /**
     * Title: Section Type
     * Post Type: section
     */
    piklist('field', array(
        'type'    => 'select',
        'field'   => 'mark_section_type',
        'label'   => __('Select Section Type', 'mark'),
        'choices' => array(
            'banner'       => __('Banner', 'mark'),
            'mission'      => __('Mission', 'mark'),
            'feature'     => __('Features', 'mark'),
            'about'        => __('About', 'mark'),
            'services'      => __('Services', 'mark'),
            'benefits'      => __('Benefits', 'mark'),
            'testimonials'  => __('Testimonials', 'mark'),
            'image-info'   => __('Image Info', 'mark'),
            'counter'      => __('Counter', 'mark'),
            'cta'          => __('Call To Action', 'mark'),
            'team'         => __('team', 'mark'),
            'portfolio'    => __('Portfolio', 'mark'),
            'pricing'      => __('Pricing', 'mark'),
            'shop'         => __('Shop', 'mark'),
            'blog'         => __('Blog', 'mark'),
            'clients'      => __('Clients', 'mark'),
            'subscription' => __('Subscription', 'mark'),
            'contact'      => __('Contact', 'mark'),

        ),
    ));