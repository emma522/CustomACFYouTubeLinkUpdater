add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_60ed328d2dc76',
	'title' => 'Home Page - 2023',
	'fields' => array(
		array(
			'key' => 'field_646f7ba69ec97',
			'label' => 'Youtube Shorts',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'relevanssi_exclude' => 0,
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_646f7bf69ec99',
			'label' => 'Youtube Shorts Playlist',
			'name' => 'youtube_shorts_playlist',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'relevanssi_exclude' => 0,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_646f7bf69ec9a',
					'label' => 'Youtube short headline',
					'name' => 'youtube_short_headline',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_646f7bf69ec99',
				),
				array(
					'key' => 'field_646f7bf69ec9b',
					'label' => 'Youtube short ID',
					'name' => 'youtube_short_id',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_646f7bf69ec99',
				),
				array(
					'key' => 'field_647044ffaddff',
					'label' => 'Youtube short thumbnail',
					'name' => 'youtube_short_thumbnail',
					'aria-label' => '',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'default_value' => '',
					'placeholder' => '',
					'parent_repeater' => 'field_646f7bf69ec99',
				),
			),
		),
		array(
			'key' => 'field_60ed36276fe0f',
			'label' => 'Video Section',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_647e2278f7574',
			'label' => 'Default Video',
			'name' => 'default_video',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'relevanssi_exclude' => 0,
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_646f7ed646ece',
			'label' => 'Youtube Channel',
			'name' => 'youtube_channel',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'relevanssi_exclude' => 0,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6477e9fddff13',
					'label' => 'Channel Name',
					'name' => 'channel_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_646f7ed646ece',
				),
				array(
					'key' => 'field_647e25d4a0ff0',
					'label' => 'Logo',
					'name' => 'logo',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'return_format' => 'url',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'parent_repeater' => 'field_646f7ed646ece',
				),
				array(
					'key' => 'field_646f7eeb46ecf',
					'label' => 'Channel ID',
					'name' => 'channel_id',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_646f7ed646ece',
				),
				array(
					'key' => 'field_647e1f5929ece',
					'label' => 'Default Video',
					'name' => 'default_video',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_646f7ed646ece',
				),
				array(
					'key' => 'field_646f7f4446ed1',
					'label' => 'Playlist',
					'name' => 'yt-video-playlist',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'relevanssi_exclude' => 0,
					'layout' => 'table',
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Add Row',
					'rows_per_page' => 20,
					'parent_repeater' => 'field_646f7ed646ece',
					'sub_fields' => array(
						array(
							'key' => 'field_64781870854e3',
							'label' => 'Headline',
							'name' => 'headline',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'relevanssi_exclude' => 0,
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_646f7f4446ed1',
						),
						array(
							'key' => 'field_647e18118ab83',
							'label' => 'Video ID',
							'name' => 'video_id',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'relevanssi_exclude' => 0,
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_646f7f4446ed1',
						),
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '209086',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

