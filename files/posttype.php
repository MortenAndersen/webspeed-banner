<?php

// Personer

add_action('init', 'webspeed_banner_create_posttype_banner');

function webspeed_banner_create_posttype_banner() {
	register_post_type(
		'wsbanner',
		array(
			'labels' => array(
				'name' => __('Banner', 'websepeed-personer-domain'),
				'singular_name' => __('Banner', 'websepeed-personer-domain'),
			),
			'public' => true,
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => false,
			'publicly_queryable' => false,
			'query_var' => false,
			'exclude_from_search' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array(
				'title',
			),
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'person',
			),
		)
	);

}

function webspeed_banner_posttype_function() {
	webspeed_banner_create_posttype_banner();
}

register_activation_hook(__FILE__, 'webspeed_banner_posttype_function');