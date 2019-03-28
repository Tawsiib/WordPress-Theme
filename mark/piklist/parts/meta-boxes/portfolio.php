<?php
    /**
     * Title: Portfolio settings
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'     => 'group',
        'field'    => 'mark_portfolio_section',
        'label'    => __('Portfolio Information', 'mark'),
        'fields'   => array(
            array(
                'type'       => 'text',
                'field'      => 'section-heading',
                'label'      => __('Section Heading', 'mark'),
                'value'      => __('Our Works', 'mark'),
                'attributes' =>array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'     => 'group',
                'field'    => 'mark_portfolio',
                'label'    => __('Portfolio Details', 'mark'),
                'add_more' => true,
                'fields'   => array(
                    array(
                        'type'       => 'text',
                        'field'      => 'title',
                        'label'      => __('Portfolio Title', 'mark'),
                        'attributes' => array(
                            'class' => 'widefat'
                        )
                    ),
                    array(
                        'type'       => 'text',
                        'field'      => 'filter',
                        'label'      => __('Portfolio Filter', 'mark'),
                        'attributes' => array(
                            'class' => 'widefat'
                        )
                    ),
                    array(
                        'type'       => 'file',
                        'field'      => 'image',
                        'label'      => __('Portfolio Image', 'mark'),
                        'attributes' => array(
                            'class' => 'widefat'
                        )
                    ),
                )
            ),
        )
    ));