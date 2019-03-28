<?php
    /**
     * Title: Counter Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_counter_section',
        'label'  => __('Counter Information','mark'),
        'add_more' => true,
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'title',
                'label' => __('Counter Title', 'mark'),
                'value' => __('Cups Of Coffee','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'number',
                'field' => 'number',
                'label' => __('Counter Number', 'mark'),
                'value' => 10,
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));