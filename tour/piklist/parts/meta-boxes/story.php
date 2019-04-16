<?php
    /**
     * Title: Story Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'tour_story_section',
        'label'  =>__('Story Details','tour'),
        'fields' => array(
            array(
              'type' => 'text',
              'field' => 'story-heading',
              'label' =>__('Section Heading','tour'),
              'value' =>__('We make people genuinely happy','tour'),
              'attributes' => array(
                  'class' => 'widefat',
              )
            ),
            array(
              'type' => 'text',
              'field' => 'button_label',
              'label' =>__('Story Button Label','tour'),
              'value' =>__('Read all stories','tour'),
              'attributes' => array(
                  'class' => 'widefat',
              )
            ),
        )

        )
    );