<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
'key' => 'group_5c160aa59e142',
'title' => 'Contact Form',
'fields' => array(
array(
'key' => 'field_5c160b5b4f023',
'label' => 'Contact Form Shortcode',
'name' => 'contact_form_shortcode',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
'maxlength' => '',
),
),
'location' => array(
array(
array(
'param' => 'page_template',
'operator' => '==',
'value' => 'contact.php',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => 1,
'description' => '',
));

acf_add_local_field_group(array(
'key' => 'group_5c04ef0f9b6fc',
'title' => 'Featured Posts',
'fields' => array(
array(
'key' => 'field_5c04ef1de8afe',
'label' => 'Featured',
'name' => 'featured',
'type' => 'true_false',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'message' => '',
'default_value' => 0,
'ui' => 0,
'ui_on_text' => '',
'ui_off_text' => '',
),
),
'location' => array(
array(
array(
'param' => 'post_type',
'operator' => '==',
'value' => 'post',
),
),
),
'menu_order' => 0,
'position' => 'side',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => 1,
'description' => '',
));

acf_add_local_field_group(array(
'key' => 'group_5c0f773e7d742',
'title' => 'Social Links',
'fields' => array(
array(
'key' => 'field_5c0f7750532f0',
'label' => 'Facebook',
'name' => 'facebook',
'type' => 'url',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
),
array(
'key' => 'field_5c0f7762532f1',
'label' => 'Twitter',
'name' => 'twitter',
'type' => 'url',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
),
array(
'key' => 'field_5c0f7781532f2',
'label' => 'Instagram',
'name' => 'instagram',
'type' => 'url',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
),
),
'location' => array(
array(
array(
'param' => 'user_form',
'operator' => '==',
'value' => 'all',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => 1,
'description' => '',
));

acf_add_local_field_group(array(
'key' => 'group_5c06b258179c7',
'title' => 'Source_File',
'fields' => array(
array(
'key' => 'field_5c06b27dc0491',
'label' => 'File_url',
'name' => 'file_url',
'type' => 'url',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
),
),
'location' => array(
array(
array(
'param' => 'post_format',
'operator' => '==',
'value' => 'audio',
),
),
array(
array(
'param' => 'post_format',
'operator' => '==',
'value' => 'video',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => 1,
'description' => '',
));

endif;