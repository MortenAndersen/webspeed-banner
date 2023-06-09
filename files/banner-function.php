<?php
add_action('webspeed_after_header', 'webspeed_banner');

function webspeed_banner() {

	$loop = new WP_Query(array(

		'post_type' => 'wsbanner',
		'meta_query' => array(
			array(
				'key' => 'vis_pa', // name of custom field
				'value' => '"' . get_queried_object_id() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
				'compare' => 'LIKE',
			),
		),
	));

	if ($loop->have_posts()) {
		while ($loop->have_posts()): $loop->the_post();

			banner_loop();

		endwhile;
		wp_reset_query();
	}

}
