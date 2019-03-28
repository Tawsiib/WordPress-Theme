<?php
    /**
     * Title: Mission Information
     * Post Type: section
     * order: 20
     */

    piklist('field', array(
        'type'   => 'group',
        'field'  => 'mark_mission_section',
        'label'  => __('Mission Information','mark'),
        'fields' => array(
            array(
                'type'  => 'text',
                'field' => 'heading',
                'label' => __('Mission Heading', 'mark'),
                'value' => __('Here We Are','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'text',
                'field' => 'sub-heading',
                'label' => __('Mission Sub-Heading', 'mark'),
                'value' => __('Our mission is very simple. we just wanna dominate our space','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'  => 'editor',
                'field' => 'description',
                'label' => __('Mission Description', 'mark'),
                'value' => __('<p>Malesuada fringilla suscipit risus nec eleifend. Pellentesque eu quam sem malesuada quam pellente.</p>
                <p>Fringilla suscipit risus nec eleifend. Pellentesque eu quam sem malesuada quam pellente</p>','mark'),
                'attributes'=> array(
                    'class' => 'widefat'
                )
            ),
        )
    ));