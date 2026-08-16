<?php
/**
 * Plugin Name: Finer Things Headless
 * Description: Structured ACF fields and integration foundations for the Finer Things headless WordPress CMS.
 * Version: 0.1.0
 * Author: Finer Things
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Text Domain: finer-things-headless
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Show a clear dependency notice instead of failing when ACF is unavailable.
 */
function finer_things_headless_acf_notice() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	echo '<div class="notice notice-error"><p><strong>Finer Things Headless:</strong> Advanced Custom Fields must be installed and activated.</p></div>';
}
add_action( 'admin_notices', 'finer_things_headless_acf_notice' );

/**
 * Build a fixed, ACF Free-compatible chapter field set.
 *
 * @param int $number Chapter number.
 * @return array<int, array<string, mixed>>
 */
function finer_things_headless_chapter_fields( $number ) {
	$prefix = 'project_chapter_' . $number;
	$label  = 'Chapter ' . $number;

	return array(
		array(
			'key'   => 'field_ft_' . $prefix . '_tab',
			'label' => $label,
			'name'  => '',
			'type'  => 'tab',
		),
		array(
			'key'   => 'field_ft_' . $prefix . '_title',
			'label' => $label . ' Title',
			'name'  => $prefix . '_title',
			'type'  => 'text',
		),
		array(
			'key'          => 'field_ft_' . $prefix . '_description',
			'label'        => $label . ' Description',
			'name'         => $prefix . '_description',
			'type'         => 'textarea',
			'new_lines'    => '',
		),
		array(
			'key'   => 'field_ft_' . $prefix . '_label',
			'label' => $label . ' Editorial Label',
			'name'  => $prefix . '_label',
			'type'  => 'text',
			'instructions' => 'Example: Arrival · Public space',
		),
		array(
			'key'           => 'field_ft_' . $prefix . '_image',
			'label'         => $label . ' Image',
			'name'          => $prefix . '_image',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'medium',
			'library'       => 'all',
		),
	);
}

/**
 * Build a fixed, ACF Free-compatible gallery field set.
 *
 * @param int $number Image number.
 * @return array<int, array<string, mixed>>
 */
function finer_things_headless_gallery_fields( $number ) {
	$prefix = 'project_gallery_' . $number;
	$label  = 'Gallery Image ' . $number;

	return array(
		array(
			'key'           => 'field_ft_' . $prefix . '_image',
			'label'         => $label,
			'name'          => $prefix . '_image',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'medium',
			'library'       => 'all',
		),
		array(
			'key'   => 'field_ft_' . $prefix . '_caption',
			'label' => $label . ' Caption',
			'name'  => $prefix . '_caption',
			'type'  => 'text',
		),
	);
}

/**
 * Register project story fields without duplicating the manually created
 * Location, Introduction, and Hero Image fields.
 */
function finer_things_headless_register_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$fields = array(
		array(
			'key'   => 'field_ft_project_story_intro_tab',
			'label' => 'Project Presentation',
			'name'  => '',
			'type'  => 'tab',
		),
		array(
			'key'           => 'field_ft_project_card_image',
			'label'         => 'Project Listing Image',
			'name'          => 'project_card_image',
			'type'          => 'image',
			'instructions'  => 'Optional. If empty, the featured image will be used.',
			'return_format' => 'array',
			'preview_size'  => 'medium',
			'library'       => 'all',
		),
		array(
			'key'           => 'field_ft_project_order',
			'label'         => 'Project Order',
			'name'          => 'project_order',
			'type'          => 'number',
			'instructions'  => 'Lower numbers appear first.',
			'default_value' => 10,
			'min'           => 0,
			'step'          => 1,
		),
	);

	for ( $chapter = 1; $chapter <= 4; $chapter++ ) {
		$fields = array_merge( $fields, finer_things_headless_chapter_fields( $chapter ) );
	}

	$fields[] = array(
		'key'   => 'field_ft_project_gallery_tab',
		'label' => 'Gallery',
		'name'  => '',
		'type'  => 'tab',
	);

	$fields[] = array(
		'key'          => 'field_ft_project_gallery_heading',
		'label'        => 'Gallery Heading',
		'name'         => 'project_gallery_heading',
		'type'         => 'text',
		'instructions' => 'Optional editorial heading shown above the gallery.',
	);

	for ( $image = 1; $image <= 4; $image++ ) {
		$fields = array_merge( $fields, finer_things_headless_gallery_fields( $image ) );
	}

	acf_add_local_field_group(
		array(
			'key'          => 'group_finer_things_project_story',
			'title'        => 'Project Story',
			'fields'       => $fields,
			'location'     => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'project',
					),
				),
			),
			'position'     => 'normal',
			'style'        => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'active'       => true,
			'show_in_rest' => 1,
		)
	);
}
add_action( 'acf/include_fields', 'finer_things_headless_register_fields' );
