<?php
    /**
     * Title: Story Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'nattours_story_section',
        'label'  =>__('Story Details','nattours'),
        'fields' => array(
            array(
              'type' => 'text',
              'field' => 'story-heading',
              'label' =>__('Section Heading','nattours'),
              'value' =>__('We make people genuinely happy','nattours'),
              'attributes' => array(
                  'class' => 'widefat',
              )
            ),
            array(
              'type' => 'text',
              'field' => 'button_label',
              'label' =>__('Story Button Label','nattours'),
              'value' =>__('Read all stories','nattours'),
              'attributes' => array(
                  'class' => 'widefat',
              )
            ),
        )

        )
    );