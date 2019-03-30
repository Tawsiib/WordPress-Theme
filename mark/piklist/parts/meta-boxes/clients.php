<?php
    /**
     * Title: Clients Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_clients_section',
        'label'  => __('Clients Logo Details','mark'),
        'add_more' => true,
        'fields' => array(
            array(
                'type'  => 'url',
                'field' => 'url',
                'label' => __('Clients Url', 'mark'),
                'value' => __('https://google.com','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'alt_txt',
                'label' => __('Alternate Text For Logo', 'mark'),
                'value' => __('Google','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'file',
                'field' => 'logo',
                'label' => __('Clients Logo', 'mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));