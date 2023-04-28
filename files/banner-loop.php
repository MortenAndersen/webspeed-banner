<?php
function banner_loop() {

	echo '<div class="banner">';
	while (have_rows('banner')): the_row();
		echo '<div class="banner-item">';
		// -----------------------------------------
		$sub_billede = get_sub_field('billede');
		$sub_link = get_sub_field('link');
		// -----------------------------------------
		if ($sub_link) {
			echo '<a href="' . $sub_link['url'] . '" target="' . $sub_link['target'] . '" title="' . $sub_link['title'] . '">';
			echo '<img src="' . $sub_billede . '" />';
			echo '</a>';
		} else {
			echo '<img src="' . $sub_billede . '" />';
		}
		echo '</div>';
	endwhile;
	echo '</div>';

}