<?php 
	
	/* The following was an ACF JSON converted to ACF PHP format */

	if( function_exists('acf_add_local_field_group') ):
		acf_add_local_field_group(
			
			array(
    'key' => 'group_5b4f64f78fb8f',
    'title' => 'Section Webinar iFrame (Hybrid)',
    'fields' => array(
        array(
            'key' => 'field_5b4f64fa36fc8',
            'label' => 'Webinar Schedule',
            'name' => 'webinar_schedule',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add Row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5b4f6504bc1a5',
                    'label' => 'Webinar Schedule Title (Optional)',
                    'name' => 'webinar_schedule_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0
                ),
                array(
                    'key' => 'field_5b4f6504bc1d7',
                    'label' => 'Webinar Schedule Name (Optional)',
                    'name' => 'webinar_schedule_name',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0
                ),
                array(
                    'key' => 'field_5b4f6504bc1ec',
                    'label' => 'Webminar Schedule Copy',
                    'name' => 'webinar_schedule_copy',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => 'wpautop',
                    'readonly' => 0,
                    'disabled' => 0
                ),
                array(
                    'key' => 'field_5b4f6504bc1fd',
                    'label' => 'Webminar Schedule Speakers',
                    'name' => 'webinar_schedule_speakers',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5b4f65092cb3f',
                            'label' => 'Webinar Speaker #1 (Image)',
                            'name' => 'webinar_schedule_speakers_image1',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'return_format' => 'url',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => ''
                        ),
                        array(
                            'key' => 'field_5b4f65092cb8e',
                            'label' => 'Webinar Speaker #1 (Text)',
                            'name' => 'webinar_schedule_speakers_text1',
                            'type' => 'text',
                            'instructions' => 'Enter Speaker\'s Name',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5b4f65092cbb3',
                            'label' => 'Webinar Speaker #2 (Image)',
                            'name' => 'webinar_schedule_speakers_image2',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'return_format' => 'url',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => ''
                        ),
                        array(
                            'key' => 'field_5b4f65092cbd3',
                            'label' => 'Webinar Speaker #2 (Text)',
                            'name' => 'webinar_schedule_speakers_text2',
                            'type' => 'text',
                            'instructions' => 'Enter Speaker\'s Name',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5b4f65092cbf0',
                            'label' => 'Webinar Speaker #3 (Image)',
                            'name' => 'webinar_schedule_speakers_image3',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => ''
                        ),
                        array(
                            'key' => 'field_5b4f65092cc0e',
                            'label' => 'Webinar Speaker #3 (Text)',
                            'name' => 'webinar_schedule_speakers_text3',
                            'type' => 'text',
                            'instructions' => 'Enter Speaker\'s Name',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        )
                    )
                )
            )
        ),
        array(
            'key' => 'field_5b4f64fa36fd9',
            'label' => 'Pardot Section',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'placement' => 'top',
            'endpoint' => 0
        ),
        array(
            'key' => 'field_5b4f64fa36fe9',
            'label' => 'Pardot Form Title (Optional)',
            'name' => 'pardot_form_title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => ''
        ),
        array(
            'key' => 'field_5b4f64fa3700b',
            'label' => 'Pardot Form Name (Optional)',
            'name' => 'pardot_form_name',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => ''
        ),
        array(
            'key' => 'field_5b4f64fa37036',
            'label' => 'Pardot Form Copy (Optional)',
            'name' => 'pardot_form_copy',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => 'wpautop'
        ),
        array(
            'key' => 'field_5b4f64fa3704c',
            'label' => 'Pardot Form Handler URL',
            'name' => 'pardot_form_handler_url',
            'type' => 'text',
            'instructions' => 'please enter a HTTPS:// url address, or type in \'hide\' to hide form.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => ''
        ),
        array(
            'key' => 'field_5b4f64fa3705f',
            'label' => 'Pardot Form Height',
            'name' => 'pardot_form_height',
            'type' => 'number',
            'instructions' => 'Enter estimated height in pixels',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => 700,
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => ''
        ),
        array(
            'key' => 'field_5b4f64fa37070',
            'label' => 'Pardot Form Width',
            'name' => 'pardot_form_width',
            'type' => 'number',
            'instructions' => 'Enter estimated height in pixels',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => ''
        )
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/hybrid-webinar-iframe.php'
            )
        )
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
    'modified' => 1531930458
)
			
		);
endif; ?>