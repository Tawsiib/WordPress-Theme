<?php
    /**
     * Title: Story Recommendation
     * Post Type: story
     * order:20
     */
    piklist('field',array(
        'type'    => 'radio',
        'field'   => 'is_recommended',
        'label'   => __('Would you like to show this Story?','nattours'),
        'value'   => 'no',
        'choices' => array(
            'yes' => 'Yes',
            'no'  => 'No',
        ),
    ));