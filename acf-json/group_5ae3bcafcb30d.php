<?php 
	
	/* The following was an ACF JSON converted to ACF PHP format */

	if( function_exists('acf_add_local_field_group') ):
		acf_add_local_field_group(
			
			array(
    'key' => 'group_5ae3bcafcb30d',
    'title' => 'Modules',
    'fields' => array(
        array(
            'key' => 'field_5ae3c478a1fc1__trashed',
            'label' => 'Module Content',
            'name' => 'moduleContent',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'layouts' => array(
                '5ae767d50c901' => array(
                    'key' => '5ae767d50c901',
                    'name' => 'sectionTile',
                    'label' => 'Section Tile',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5ae805e60a8f7',
                            'label' => 'Main Tile',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => 'Select type of tile you want to be on the main view',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'placement' => 'left',
                            'endpoint' => 0
                        ),
                        array(
                            'key' => 'field_5ae80b4a70aa0',
                            'label' => 'Main Tile',
                            'name' => 'mainTile',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'collapsed' => 'field_5ae7a4312477f',
                            'min' => 1,
                            'max' => 1,
                            'layout' => 'block',
                            'button_label' => 'Add Tile',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5ae7a4312477f',
                                    'label' => 'Carousel Slider',
                                    'name' => 'carouselSlider',
                                    'type' => 'repeater',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'collapsed' => 'field_5ae7a43124780',
                                    'min' => 3,
                                    'max' => 0,
                                    'layout' => 'row',
                                    'button_label' => 'Add Slider',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'field_5ae9f7ca88ce7',
                                            'label' => 'Image & Text',
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
                                            'key' => 'field_5ae7a43124780',
                                            'label' => 'Image',
                                            'name' => 'image',
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
                                            'min_width' => 640,
                                            'min_height' => 310,
                                            'min_size' => '',
                                            'max_width' => '',
                                            'max_height' => '',
                                            'max_size' => '',
                                            'mime_types' => ''
                                        ),
                                        array(
                                            'key' => 'field_5af4cdaecfea2',
                                            'label' => 'Image Option',
                                            'name' => 'sliderImgOption',
                                            'type' => 'radio',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'choices' => array(
                                                'is-bg-contain' => 'Contain Image',
                                                'is-bg-cover' => 'Expand Image to Cover'
                                            ),
                                            'other_choice' => 0,
                                            'save_other_choice' => 0,
                                            'default_value' => 'is-bg-cover',
                                            'layout' => 'horizontal',
                                            'allow_null' => 0,
                                            'return_format' => 'value'
                                        ),
                                        array(
                                            'key' => 'field_5ae9f64088ce2',
                                            'label' => 'Title',
                                            'name' => 'title',
                                            'type' => 'textarea',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'default_value' => '<strong>BOLD WORDS GOES HERE</strong><br>            REGULAR WORDS GO HERE',
                                            'placeholder' => '',
                                            'maxlength' => '',
                                            'rows' => 2,
                                            'new_lines' => 'br',
                                            'readonly' => 0,
                                            'disabled' => 0
                                        ),
                                        array(
                                            'key' => 'field_5af5b7b9f9552',
                                            'label' => 'Font Color',
                                            'name' => 'fontColor',
                                            'type' => 'radio',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'choices' => array(
                                                'has-text-white' => 'White',
                                                'has-text-primary' => 'Dark'
                                            ),
                                            'other_choice' => 0,
                                            'save_other_choice' => 0,
                                            'default_value' => 'has-text-white',
                                            'layout' => 'vertical',
                                            'allow_null' => 0,
                                            'return_format' => 'value'
                                        ),
                                        array(
                                            'key' => 'field_5ae9f6c788ce3',
                                            'label' => 'Regular Copy',
                                            'name' => 'regularCopy',
                                            'type' => 'textarea',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'default_value' => 'Regular copy can go here with <strong>bold</strong> words here.',
                                            'placeholder' => '',
                                            'maxlength' => '',
                                            'rows' => 2,
                                            'new_lines' => 'br',
                                            'readonly' => 0,
                                            'disabled' => 0
                                        ),
                                        array(
                                            'key' => 'field_5ae9f7f488ce8',
                                            'label' => 'CTA',
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
                                            'key' => 'field_5ae9f73d88ce4',
                                            'label' => 'CTA Primary',
                                            'name' => 'ctaOne',
                                            'type' => 'text',
                                            'instructions' => 'Enter Call To Action',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'default_value' => 'Call To Action',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                            'readonly' => 0,
                                            'disabled' => 0
                                        ),
                                        array(
                                            'key' => 'field_5ae7a43124782',
                                            'label' => 'CTA Primary Link',
                                            'name' => 'ctaOneLink',
                                            'type' => 'text',
                                            'instructions' => 'Enter a URL to link to',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'default_value' => '//',
                                            'placeholder' => '',
                                            'prepend' => 'https:',
                                            'append' => '',
                                            'maxlength' => '',
                                            'readonly' => 0,
                                            'disabled' => 0
                                        ),
                                        array(
                                            'key' => 'field_5ae9f78488ce5',
                                            'label' => 'CTA Secondary',
                                            'name' => 'ctaTwo',
                                            'type' => 'text',
                                            'instructions' => 'Enter Call To Action',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'default_value' => 'Call To Action',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                            'readonly' => 0,
                                            'disabled' => 0
                                        ),
                                        array(
                                            'key' => 'field_5ae9f79488ce6',
                                            'label' => 'CTA Secondary Link',
                                            'name' => 'ctaTwoLink',
                                            'type' => 'text',
                                            'instructions' => 'Enter a URL to link to',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '//',
                                            'prepend' => 'https:',
                                            'append' => '',
                                            'maxlength' => '',
                                            'readonly' => 0,
                                            'disabled' => 0
                                        ),
                                        array(
                                            'key' => 'field_5af4bc1f5fdd1',
                                            'label' => 'Slide Background',
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
                                            'key' => 'field_5af4bc355fdd2',
                                            'label' => 'slideBgColor',
                                            'name' => 'slideBgColor',
                                            'type' => 'select',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'choices' => array(
                                                'has-background-white' => 'None',
                                                'has-background-hero-sloped' => 'Hero Sloped',
                                                'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                                'has-background-gray-sloped' => 'Gray Sloped',
                                                'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                                'has-background-teal-sloped' => 'Teal Sloped',
                                                'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                                'has-background-popin' => 'POPin Teal',
                                                'has-background-popin-blue' => 'POPin Dark Blue',
                                                'has-background-popin-purp' => 'POPin Purp'
                                            ),
                                            'default_value' => array(
                                                0
                                            ),
                                            'allow_null' => 0,
                                            'multiple' => 0,
                                            'ui' => 0,
                                            'ajax' => 0,
                                            'placeholder' => '',
                                            'disabled' => 0,
                                            'readonly' => 0,
                                            'return_format' => 'value'
                                        ),
                                        array(
                                            'key' => 'field_5af4bc405fdd3',
                                            'label' => 'slideBgOpacity',
                                            'name' => 'slideBgOpacity',
                                            'type' => 'radio',
                                            'instructions' => 'Range: 0.0 - 1',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => ''
                                            ),
                                            'choices' => array(
                                                '0.25' => '25%',
                                                '0.50' => '50%',
                                                '0.75' => '75%'
                                            ),
                                            'other_choice' => 1,
                                            'save_other_choice' => 0,
                                            'default_value' => '0.50',
                                            'layout' => 'horizontal',
                                            'allow_null' => 0,
                                            'return_format' => 'value'
                                        )
                                    )
                                )
                            )
                        ),
                        array(
                            'key' => 'field_5ae8064579ff3',
                            'label' => 'Stacked Tile',
                            'name' => '',
                            'type' => 'tab',
                            'instructions' => 'Select type of tile you want to be on the main view',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'placement' => 'left',
                            'endpoint' => 0
                        ),
                        array(
                            'key' => 'field_5ae7ac93c3115',
                            'label' => 'Stacked Tile',
                            'name' => 'stackedTile',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'collapsed' => 'field_5ae7ac93c3117',
                            'min' => 3,
                            'max' => 6,
                            'layout' => 'block',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5ae7ac93c3117',
                                    'label' => 'Figure',
                                    'name' => 'figure',
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
                                    'key' => 'field_5af1151243132',
                                    'label' => 'Figure Option',
                                    'name' => 'figureOption',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-bg-cover' => 'cover',
                                        'is-bg-contain' => 'contain'
                                    ),
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'is-bg-cover',
                                    'layout' => 'horizontal',
                                    'allow_null' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5af53469a900f',
                                    'label' => 'Figure Border',
                                    'name' => 'figureBorder',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'has-border-all' => 'Borders',
                                        'has-border-none' => 'No Borders'
                                    ),
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'has-border-all',
                                    'layout' => 'horizontal',
                                    'allow_null' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5af53698a9010',
                                    'label' => 'Figure Shape',
                                    'name' => 'figureShape',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'button is-rounded' => 'Round',
                                        'is-squared' => 'Square/Rectangle'
                                    ),
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'button is-rounded',
                                    'layout' => 'horizontal',
                                    'allow_null' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5ae7ac93c3116',
                                    'label' => 'Title',
                                    'name' => 'title',
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
                                    'placeholder' => 'Enter a Title',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_5ae7ac93c3118',
                                    'label' => 'Description',
                                    'name' => 'description',
                                    'type' => 'textarea',
                                    'instructions' => 'Enter copy here',
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
                                    'rows' => 2,
                                    'new_lines' => 'br',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_5aea1e694a254',
                                    'label' => 'URL',
                                    'name' => 'url',
                                    'type' => 'text',
                                    'instructions' => 'enter url for tile to link to',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => 'https://www.popinnow.com',
                                    'placeholder' => '',
                                    'prepend' => 'https://',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                )
                            )
                        ),
                        array(
                            'key' => 'field_5af10822521d3',
                            'label' => 'Section Options',
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
                            'key' => 'field_5af10785521d0',
                            'label' => 'Background Option',
                            'name' => 'bgOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'image' => 'Upload Image',
                                'color' => 'Select Colors'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'color',
                            'layout' => 'horizontal',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5af10789521d1',
                            'label' => 'Background Image',
                            'name' => 'bgImg',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af10785521d0',
                                        'operator' => '==',
                                        'value' => 'image'
                                    )
                                )
                            ),
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
                            'key' => 'field_5af5321400782',
                            'label' => 'Background Image Opacity',
                            'name' => 'bgImgOpacity',
                            'type' => 'radio',
                            'instructions' => 'Range: 0.0 - 1',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af10785521d0',
                                        'operator' => '==',
                                        'value' => 'image'
                                    )
                                )
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                '0.25' => '25%',
                                '0.50' => '50%',
                                '0.75' => '75%'
                            ),
                            'other_choice' => 1,
                            'save_other_choice' => 0,
                            'default_value' => '0.50',
                            'layout' => 'vertical',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5af1078d521d2',
                            'label' => 'Background Color',
                            'name' => 'bgColor',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af10785521d0',
                                        'operator' => '==',
                                        'value' => 'color'
                                    )
                                )
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-background-white' => 'None',
                                'has-background-hero-sloped' => 'Hero Sloped',
                                'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                'has-background-gray-sloped' => 'Gray Sloped',
                                'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                'has-background-teal-sloped' => 'Teal Sloped',
                                'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                'has-background-popin' => 'POPin Teal',
                                'has-background-popin-blue' => 'POPin Dark Blue',
                                'has-background-popin-purp' => 'POPin Purp'
                            ),
                            'default_value' => array(
                                0
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'disabled' => 0,
                            'readonly' => 0,
                            'return_format' => 'value'
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5ae3c486cd403' => array(
                    'key' => '5ae3c486cd403',
                    'name' => 'sectionFeature',
                    'label' => 'Section Feature',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5aea525f52005',
                            'label' => 'Section Heading',
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
                            'placement' => 'left',
                            'endpoint' => 0
                        ),
                        array(
                            'key' => 'field_5ae3c95da1fc2',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => 'Enter a title for this section.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => '',
                            'placeholder' => 'Section Feature Title',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => ''
                        ),
                        array(
                            'key' => 'field_5af1c59e55e47',
                            'label' => 'Font Color',
                            'name' => 'fontColor',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-text-white' => 'White',
                                'has-text-primary' => 'Dark'
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'has-text-primary',
                            'layout' => 'vertical',
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5af1c59655e46',
                            'label' => 'Font Family',
                            'name' => 'fontFamily',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'is-fontfamily-share' => 'Share',
                                'is-fontfamily-serif' => 'Open Sans'
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'is-fontfamily-share',
                            'layout' => 'vertical',
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5ae3c9ffa1fc3',
                            'label' => 'Sub Title',
                            'name' => 'subtitle',
                            'type' => 'textarea',
                            'instructions' => 'Enter a Sub Title for this section.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => '',
                            'placeholder' => 'Section Sub Title',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => ''
                        ),
                        array(
                            'key' => 'field_5af1c5c255e48',
                            'label' => 'Background Option',
                            'name' => 'bgOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'image' => 'Upload Image',
                                'color' => 'Select Colors'
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'color : Select Colors',
                            'layout' => 'horizontal',
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5af1c5c555e49',
                            'label' => 'Background Image',
                            'name' => 'bgImg',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af1c5c255e48',
                                        'operator' => '==',
                                        'value' => 'image'
                                    )
                                )
                            ),
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
                            'key' => 'field_5af1c5cb55e4a',
                            'label' => 'Background Color',
                            'name' => 'bgColor',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af1c5c255e48',
                                        'operator' => '==',
                                        'value' => 'color'
                                    )
                                )
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-background-white' => 'None',
                                'has-background-hero-sloped' => 'Hero Sloped',
                                'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                'has-background-gray-sloped' => 'Gray Sloped',
                                'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                'has-background-teal-sloped' => 'Teal Sloped',
                                'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                'has-background-popin' => 'POPin Teal',
                                'has-background-popin-blue' => 'POPin Dark Blue',
                                'has-background-popin-purp' => 'POPin Purp'
                            ),
                            'default_value' => array(
                                0
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => ''
                        ),
                        array(
                            'key' => 'field_5aea528552006',
                            'label' => 'Column Content',
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
                            'placement' => 'left',
                            'endpoint' => 0
                        ),
                        array(
                            'key' => 'field_5ae3ca5fa1fc4',
                            'label' => 'Columns',
                            'name' => 'columns',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'collapsed' => 'field_5ae3ca8ca1fc5',
                            'min' => 3,
                            'max' => 6,
                            'layout' => 'block',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5af4c13ecfe97',
                                    'label' => 'Image + Box Options',
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
                                    'key' => 'field_5ae3ca8ca1fc5',
                                    'label' => 'Image',
                                    'name' => 'image',
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
                                    'key' => 'field_5af4c183cfe99',
                                    'label' => 'Image Option',
                                    'name' => 'imageOption',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-bg-cover' => 'cover',
                                        'is-bg-contain' => 'contain'
                                    ),
                                    'allow_null' => 0,
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'is-bg-cover',
                                    'layout' => 'horizontal',
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5af53ddc22466',
                                    'label' => 'Image Border',
                                    'name' => 'imageBorder',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'has-border-all' => 'Borders',
                                        'has-border-none' => 'No Borders'
                                    ),
                                    'allow_null' => 0,
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'has-border-all',
                                    'layout' => 'vertical',
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5af53a7122463',
                                    'label' => 'Image Shape',
                                    'name' => 'imageShape',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'button is-rounded' => 'Round',
                                        'is-squared' => 'Square/Rectangle'
                                    ),
                                    'allow_null' => 0,
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'button is-rounded',
                                    'layout' => 'horizontal',
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5af53b9f22465',
                                    'label' => 'Image Ratio',
                                    'name' => 'imageRatio',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-1by1' => '1 x 1 (Square)',
                                        'is-5by4' => '5 x 4',
                                        'is-4by3' => '4 x 3',
                                        'is-3by2' => '3 x 2',
                                        'is-5by3' => '5 x 3'
                                    ),
                                    'default_value' => array(
                                        0
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'return_format' => 'value',
                                    'placeholder' => ''
                                ),
                                array(
                                    'key' => 'field_5af131a1cdb36',
                                    'label' => 'Animate Option',
                                    'name' => 'animateOption',
                                    'type' => 'radio',
                                    'instructions' => 'https://daneden.github.io/animate.css/',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'none' => 'none',
                                        'fadeInDown' => 'fadeInDown',
                                        'fadeInUp' => 'fadeInUp'
                                    ),
                                    'allow_null' => 0,
                                    'other_choice' => 1,
                                    'save_other_choice' => 0,
                                    'default_value' => 'none',
                                    'layout' => 'vertical',
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5af4c167cfe98',
                                    'label' => 'Text + Button Options',
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
                                    'key' => 'field_5ae3cae8a1fc6',
                                    'label' => 'Title',
                                    'name' => 'title',
                                    'type' => 'text',
                                    'instructions' => 'Enter a title for column/block',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'placeholder' => 'Column Title',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => ''
                                ),
                                array(
                                    'key' => 'field_5ae3cb17a1fc7',
                                    'label' => 'Description',
                                    'name' => 'description',
                                    'type' => 'textarea',
                                    'instructions' => 'Enter description text here (optional)',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_5af4c183cfe99',
                                                'operator' => '!=',
                                                'value' => 'is-bg-cover'
                                            )
                                        )
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'placeholder' => 'Column description',
                                    'maxlength' => '',
                                    'rows' => 3,
                                    'new_lines' => ''
                                ),
                                array(
                                    'key' => 'field_5aea52a652007',
                                    'label' => 'CTA',
                                    'name' => 'cta',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => 'Click Here',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => ''
                                ),
                                array(
                                    'key' => 'field_5aea52bd52008',
                                    'label' => 'CTA Link',
                                    'name' => 'ctaLink',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '//www.popinnow.com',
                                    'placeholder' => '',
                                    'prepend' => 'https:',
                                    'append' => '',
                                    'maxlength' => ''
                                )
                            )
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5aecc12d68e4f' => array(
                    'key' => '5aecc12d68e4f',
                    'name' => 'sectionUpdateFeed',
                    'label' => 'Section Update Feed',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5aed1b5f29b2a',
                            'label' => 'Header Option',
                            'name' => 'headerOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'main' => 'Header Main',
                                'sub' => 'Header Sub'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'main',
                            'layout' => 'horizontal',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5aecc12d68e50',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => 'Video Section Title',
                            'placeholder' => 'Video Section Title',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5aee5fbbce2c4',
                            'label' => 'Font Family',
                            'name' => 'fontFamily',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'is-fontfamily-share' => 'Share',
                                'is-fontfamily-serif' => 'Open Sans'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'is-fontfamily-share',
                            'layout' => 'vertical',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5aee856f424f1',
                            'label' => 'Font Color',
                            'name' => 'fontColor',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-text-white' => 'White',
                                'has-text-primary' => 'Dark'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'has-text-primary',
                            'layout' => 'vertical',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5aecc12d68e51',
                            'label' => 'Sub Title',
                            'name' => 'subtitle',
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
                            'key' => 'field_5afb51ae0f737',
                            'label' => 'Feed Optioins',
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
                            'key' => 'field_5afb51bc0f738',
                            'label' => 'Twitter count',
                            'name' => 'countTwitter',
                            'type' => 'number',
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
                            'min' => '',
                            'max' => '',
                            'step' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5afb51c90f739',
                            'label' => 'Blog Count',
                            'name' => 'countBlog',
                            'type' => 'number',
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
                            'min' => '',
                            'max' => '',
                            'step' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5afb51d60f73a',
                            'label' => 'Webinar Count',
                            'name' => 'countWebinar',
                            'type' => 'number',
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
                            'min' => '',
                            'max' => '',
                            'step' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5afb51930f736',
                            'label' => 'Section Options',
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
                            'key' => 'field_5aecc20468e56',
                            'label' => 'Background Option',
                            'name' => 'bgOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'image' => 'Upload Image',
                                'color' => 'Select Colors'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'color : Select Colors',
                            'layout' => 'horizontal',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5aecc2ce68e58',
                            'label' => 'Background Image',
                            'name' => 'bgImg',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5aecc20468e56',
                                        'operator' => '==',
                                        'value' => 'image'
                                    )
                                )
                            ),
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
                            'key' => 'field_5aecc2ed68e59',
                            'label' => 'Background Color',
                            'name' => 'bgColor',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5aecc20468e56',
                                        'operator' => '==',
                                        'value' => 'color'
                                    )
                                )
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-background-white' => 'None',
                                'has-background-hero-sloped' => 'Hero Sloped',
                                'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                'has-background-gray-sloped' => 'Gray Sloped',
                                'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                'has-background-teal-sloped' => 'Teal Sloped',
                                'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                'has-background-popin' => 'POPin Teal',
                                'has-background-popin-blue' => 'POPin Dark Blue',
                                'has-background-popin-purp' => 'POPin Purp'
                            ),
                            'default_value' => array(
                                0
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'disabled' => 0,
                            'readonly' => 0,
                            'return_format' => 'value'
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5afb51870f72a' => array(
                    'key' => '5afb51870f72a',
                    'name' => 'sectionHeader',
                    'label' => 'Section Header',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5afb51870f72b',
                            'label' => 'Header Option',
                            'name' => 'headerOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'main' => 'Header Main',
                                'sub' => 'Header Sub'
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'main',
                            'layout' => 'horizontal',
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5afb51870f72c',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => 'Video Section Title',
                            'placeholder' => 'Video Section Title',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => ''
                        ),
                        array(
                            'key' => 'field_5afb51870f72d',
                            'label' => 'Font Family',
                            'name' => 'fontFamily',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'is-fontfamily-share' => 'Share',
                                'is-fontfamily-serif' => 'Open Sans'
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'is-fontfamily-share',
                            'layout' => 'vertical',
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5afb51870f72e',
                            'label' => 'Font Color',
                            'name' => 'fontColor',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-text-white' => 'White',
                                'has-text-primary' => 'Dark'
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'has-text-primary',
                            'layout' => 'vertical',
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5afb51870f72f',
                            'label' => 'Sub Title',
                            'name' => 'subtitle',
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
                            'key' => 'field_5afb51870f730',
                            'label' => 'CTA Option',
                            'name' => 'ctaOption',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'message' => 'Show CTA Button?',
                            'default_value' => 1,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => ''
                        ),
                        array(
                            'key' => 'field_5afb51870f731',
                            'label' => 'CTA',
                            'name' => 'cta',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5afb51870f730',
                                        'operator' => '==',
                                        'value' => '1'
                                    )
                                )
                            ),
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
                            'key' => 'field_5afb51870f732',
                            'label' => 'CTA Link',
                            'name' => 'ctaLink',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5afb51870f730',
                                        'operator' => '==',
                                        'value' => '1'
                                    )
                                )
                            ),
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
                            'key' => 'field_5afb51870f733',
                            'label' => 'Background Option',
                            'name' => 'bgOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'image' => 'Upload Image',
                                'color' => 'Select Colors'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'color : Select Colors',
                            'layout' => 'horizontal',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5afb51870f734',
                            'label' => 'Background Image',
                            'name' => 'bgImg',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5afb51870f733',
                                        'operator' => '==',
                                        'value' => 'image'
                                    )
                                )
                            ),
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
                            'key' => 'field_5afb51870f735',
                            'label' => 'Background Color',
                            'name' => 'bgColor',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5afb51870f733',
                                        'operator' => '==',
                                        'value' => 'color'
                                    )
                                )
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-background-white' => 'None',
                                'has-background-hero-sloped' => 'Hero Sloped',
                                'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                'has-background-gray-sloped' => 'Gray Sloped',
                                'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                'has-background-teal-sloped' => 'Teal Sloped',
                                'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                'has-background-popin' => 'POPin Teal',
                                'has-background-popin-blue' => 'POPin Dark Blue',
                                'has-background-popin-purp' => 'POPin Purp'
                            ),
                            'default_value' => array(
                                0
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'disabled' => 0,
                            'readonly' => 0,
                            'return_format' => 'value'
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5ae6d35fce399' => array(
                    'key' => '5ae6d35fce399',
                    'name' => 'sectionVideo',
                    'label' => 'Section Video',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5af1de825c232',
                            'label' => 'Section Heading',
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
                            'key' => 'field_5ae6d367ce39a',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => 'Video Section Title',
                            'placeholder' => 'Video Section Title',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5af1defc5c236',
                            'label' => 'Font Family',
                            'name' => 'fontFamily',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'is-fontfamily-share' => 'Share',
                                'is-fontfamily-serif' => 'Open Sans'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'is-fontfamily-share : Share',
                            'layout' => 'vertical',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5af1deff5c237',
                            'label' => 'Font Color',
                            'name' => 'fontColor',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-text-white' => 'White',
                                'has-text-primary' => 'Dark'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'has-text-white : White',
                            'layout' => 'vertical',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5af1deac5c233',
                            'label' => 'Section Video',
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
                            'key' => 'field_5ae6d37ece39c',
                            'label' => 'Video',
                            'name' => 'video',
                            'type' => 'text',
                            'instructions' => 'If using vimeo, please provide url in this format:<br>            //player.vimeo.com/video/254057007',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => '//player.vimeo.com/video/254057007',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5af1dee55c234',
                            'label' => 'Background Option',
                            'name' => 'bgOption',
                            'type' => 'radio',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'image' => 'Upload Image',
                                'color' => 'Select Colors'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => 'color : Select Colors',
                            'layout' => 'horizontal',
                            'allow_null' => 0,
                            'return_format' => 'value'
                        ),
                        array(
                            'key' => 'field_5aead338b0080',
                            'label' => 'Background Image',
                            'name' => 'bgImg',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af1dee55c234',
                                        'operator' => '==',
                                        'value' => 'image'
                                    )
                                )
                            ),
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
                            'key' => 'field_5af1dee95c235',
                            'label' => 'Background Color',
                            'name' => 'bgColor',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5af1dee55c234',
                                        'operator' => '==',
                                        'value' => 'color'
                                    )
                                )
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'choices' => array(
                                'has-background-white' => 'None',
                                'has-background-hero-sloped' => 'Hero Sloped',
                                'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                'has-background-gray-sloped' => 'Gray Sloped',
                                'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                'has-background-teal-sloped' => 'Teal Sloped',
                                'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                'has-background-popin' => 'POPin Teal',
                                'has-background-popin-blue' => 'POPin Dark Blue',
                                'has-background-popin-purp' => 'POPin Purp'
                            ),
                            'default_value' => array(
                                0
                            ),
                            'allow_null' => 1,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'disabled' => 0,
                            'readonly' => 0,
                            'return_format' => 'value'
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5ae573c9b7106' => array(
                    'key' => '5ae573c9b7106',
                    'name' => 'sectionContentAnimated',
                    'label' => 'Section Content Animated',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5ae57531b7107',
                            'label' => 'Row',
                            'name' => 'row',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'collapsed' => 'field_5ae577801d7cf',
                            'min' => 1,
                            'max' => 0,
                            'layout' => 'block',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5b0495346b92f',
                                    'label' => 'Section Options',
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
                                    'key' => 'field_5b0495816b930',
                                    'label' => 'Section Option',
                                    'name' => 'sectionOption',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'halfscreen' => 'Half Screen Content',
                                        'widescreen' => 'Wide Screen Content'
                                    ),
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'halfscreen',
                                    'layout' => 'horizontal',
                                    'allow_null' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5ae5772c1d7ce',
                                    'label' => 'Content',
                                    'name' => 'content',
                                    'type' => 'wysiwyg',
                                    'instructions' => 'Format your content here',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0
                                ),
                                array(
                                    'key' => 'field_5aff3b164c96c',
                                    'label' => 'Video Still',
                                    'name' => 'videoStill',
                                    'type' => 'image',
                                    'instructions' => 'Upload a video still of your video',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_5b0495816b930',
                                                'operator' => '==',
                                                'value' => 'halfscreen'
                                            )
                                        )
                                    ),
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
                                    'key' => 'field_5ae577801d7cf',
                                    'label' => 'Video',
                                    'name' => 'video',
                                    'type' => 'file',
                                    'instructions' => 'Upload Video (MP4)',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_5b0495816b930',
                                                'operator' => '==',
                                                'value' => 'halfscreen'
                                            )
                                        )
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'url',
                                    'library' => 'all',
                                    'min_size' => '',
                                    'max_size' => '',
                                    'mime_types' => '.mp4'
                                ),
                                array(
                                    'key' => 'field_5aff3e1db57e7',
                                    'label' => 'VideoWebm',
                                    'name' => 'videoWebm',
                                    'type' => 'file',
                                    'instructions' => 'Upload Video',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_5b0495816b930',
                                                'operator' => '==',
                                                'value' => 'halfscreen'
                                            )
                                        )
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'url',
                                    'library' => 'all',
                                    'min_size' => '',
                                    'max_size' => '',
                                    'mime_types' => '.webm'
                                ),
                                array(
                                    'key' => 'field_5aeb8018e6047',
                                    'label' => 'Video Ratio',
                                    'name' => 'videoRatio',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_5b0495816b930',
                                                'operator' => '==',
                                                'value' => 'halfscreen'
                                            )
                                        )
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-3by2' => '3 x 2',
                                        'is-5by3' => '5 x 3',
                                        'is-16by9' => '16 x 9'
                                    ),
                                    'default_value' => array(
                                        'is-5by3'
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5ae575d1b7108',
                                    'label' => 'Option',
                                    'name' => 'option',
                                    'type' => 'select',
                                    'instructions' => 'Should an Image or the Content show up first?',
                                    'required' => 0,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_5b0495816b930',
                                                'operator' => '==',
                                                'value' => 'halfscreen'
                                            )
                                        )
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'video' => 'Video',
                                        'content' => 'Content'
                                    ),
                                    'default_value' => array(
                                        'video'
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5aeb7953e393f',
                                    'label' => 'Background',
                                    'name' => 'background',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'has-background-white' => 'None',
                                        'has-background-hero-sloped' => 'Hero Sloped',
                                        'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                        'has-background-gray-sloped' => 'Gray Sloped',
                                        'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                        'has-background-teal-sloped' => 'Teal Sloped',
                                        'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                        'has-background-popin' => 'POPin Teal',
                                        'has-background-popin-blue' => 'POPin Dark Blue',
                                        'has-background-popin-purp' => 'POPin Purp'
                                    ),
                                    'default_value' => array(
                                        'has-background-white'
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0,
                                    'return_format' => 'value'
                                )
                            )
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5aff38714c964' => array(
                    'key' => '5aff38714c964',
                    'name' => 'sectionContent',
                    'label' => 'Section Content',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5aff38714c965',
                            'label' => 'Row',
                            'name' => 'row',
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
                            'min' => 1,
                            'max' => 0,
                            'layout' => 'block',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5b3f91ddce12c',
                                    'label' => 'Full Width',
                                    'name' => 'fullwidth',
                                    'type' => 'true_false',
                                    'instructions' => 'full width -> true<br>default half-width -> false',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'message' => '',
                                    'default_value' => 0,
                                    'ui' => 0,
                                    'ui_on_text' => '',
                                    'ui_off_text' => ''
                                ),
                                array(
                                    'key' => 'field_5aff38714c966',
                                    'label' => 'Content',
                                    'name' => 'content',
                                    'type' => 'wysiwyg',
                                    'instructions' => 'Format your content here',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0
                                ),
                                array(
                                    'key' => 'field_5aff38714c967',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => 'Upload image to be used in the column/block',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'url',
                                    'preview_size' => 'thumbnail',
                                    'library' => 'uploadedTo',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                ),
                                array(
                                    'key' => 'field_5aff38714c968',
                                    'label' => 'Image Option',
                                    'name' => 'imageOption',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-bg-contain' => 'contain',
                                        'is-bg-cover' => 'cover'
                                    ),
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'is-bg-contain : contain',
                                    'layout' => 'vertical',
                                    'allow_null' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5aff38714c969',
                                    'label' => 'Image Ratio',
                                    'name' => 'imgRatio',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-1by1' => '1 x 1 (Square)',
                                        'is-5by4' => '5 x 4',
                                        'is-4by3' => '4 x 3',
                                        'is-3by2' => '3 x 2',
                                        'is-5by3' => '5 x 3'
                                    ),
                                    'default_value' => array(
                                        0
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5aff38714c96a',
                                    'label' => 'Option',
                                    'name' => 'option',
                                    'type' => 'select',
                                    'instructions' => 'Should an Image or the Content show up first?',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'image' => 'Image',
                                        'content' => 'Content'
                                    ),
                                    'default_value' => array(
                                        0
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5aff38714c96b',
                                    'label' => 'Background',
                                    'name' => 'background',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'has-background-white' => 'None',
                                        'has-background-hero-sloped' => 'Hero Sloped',
                                        'has-background-hero-sloped-reverse' => 'Hero Sloped Reverse',
                                        'has-background-gray-sloped' => 'Gray Sloped',
                                        'has-background-gray-sloped-reverse' => 'Gray Sloped Reverse',
                                        'has-background-teal-sloped' => 'Teal Sloped',
                                        'has-background-teal-sloped-reverse' => 'Teal Reverse',
                                        'has-background-popin' => 'POPin Teal',
                                        'has-background-popin-blue' => 'POPin Dark Blue',
                                        'has-background-popin-purp' => 'POPin Purp'
                                    ),
                                    'default_value' => array(
                                        0
                                    ),
                                    'allow_null' => 1,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0,
                                    'return_format' => 'value'
                                )
                            )
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5aee3fafae5aa' => array(
                    'key' => '5aee3fafae5aa',
                    'name' => 'sectionTeam',
                    'label' => 'Section Team',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5aee3fafae5ab',
                            'label' => 'Block',
                            'name' => 'block',
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
                            'min' => 3,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5aee3fafae5ad',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => 'Upload image to be used in the column/block',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'url',
                                    'preview_size' => 'thumbnail',
                                    'library' => 'uploadedTo',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                ),
                                array(
                                    'key' => 'field_5aee41e8ae5b1',
                                    'label' => 'Name',
                                    'name' => 'name',
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
                                    'key' => 'field_5aee41f0ae5b2',
                                    'label' => 'Designation',
                                    'name' => 'designation',
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
                                )
                            )
                        )
                    ),
                    'min' => '',
                    'max' => ''
                ),
                '5aeadd1338f38' => array(
                    'key' => '5aeadd1338f38',
                    'name' => 'sectionCarouselContent',
                    'label' => 'Section Carousel (Content)',
                    'display' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5aeadde238f3f',
                            'label' => 'Section Title',
                            'name' => 'sectionTitle',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => ''
                            ),
                            'default_value' => 'Quote Carousel Section',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0
                        ),
                        array(
                            'key' => 'field_5aeadd1338f3a',
                            'label' => 'Slider',
                            'name' => 'slider',
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
                            'min' => 3,
                            'max' => 10,
                            'layout' => 'block',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5aeadd1338f3b',
                                    'label' => 'Image',
                                    'name' => 'image',
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
                                    'library' => 'uploadedTo',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                ),
                                array(
                                    'key' => 'field_5af1e9cca4afb',
                                    'label' => 'Image Option',
                                    'name' => 'imageOption',
                                    'type' => 'radio',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'is-bg-contain' => 'contain',
                                        'is-bg-cover' => 'cover'
                                    ),
                                    'other_choice' => 0,
                                    'save_other_choice' => 0,
                                    'default_value' => 'is-bg-contain : contain',
                                    'layout' => 'horizontal',
                                    'allow_null' => 0,
                                    'return_format' => 'value'
                                ),
                                array(
                                    'key' => 'field_5aeadd1338f3c',
                                    'label' => 'Copy',
                                    'name' => 'copy',
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
                                    'rows' => 5,
                                    'new_lines' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_5aeaddac38f3e',
                                    'label' => 'CTA',
                                    'name' => 'cta',
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
                                    'key' => 'field_5aeadd1338f3d',
                                    'label' => 'CTA Link',
                                    'name' => 'ctaLink',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '//',
                                    'placeholder' => '',
                                    'prepend' => 'http:',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_5aeade0b38f40',
                                    'label' => 'Sub Text',
                                    'name' => 'subText',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => 'Customer Name',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                )
                            )
                        )
                    ),
                    'min' => '',
                    'max' => ''
                )
            ),
            'button_label' => 'Add Module',
            'min' => '',
            'max' => ''
        )
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/modules.php'
            )
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/hybrid-resources.php'
            )
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/hybrid-news.php'
            )
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/hybrid-blog-technology.php'
            )
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/hybrid-generic.php'
            )
        ),
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'pages/hybrid-blog.php'
            )
        ),
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
    'modified' => 1531935986
)
			
		);
endif; ?>