<?php
    /**
     * Title: Subscription Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_subscription_section',
        'label'  => __('Subscription Information','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Heading','mark'),
                'value' => __('Subscribe Now','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'url',
                'field' => 'url',
                'label' => __('Mailchimp Form URL','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'button_label',
                'label' => __('Button Label','mark'),
                'value' => __('Subscribe','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));