<?php
function banner_loop() {

	echo '<div class="banner top-post-img">';
	while (have_rows('banner')): the_row();
		echo '<div class="banner-item">';
		// -----------------------------------------
		$size = 'full';
		$sub_billede = get_sub_field('billede');
		$sub_link = get_sub_field('link');
		$sub_title = get_sub_field('overskrift');
		$sub_txt = get_sub_field('tekst');
		// -----------------------------------------
		if ($sub_link) {
			echo '<a href="' . $sub_link['url'] . '" target="' . $sub_link['target'] . '" title="' . $sub_link['title'] . '">';
			echo '<img src="' . $sub_billede['url'] . '" alt="' . $sub_billede['alt'] . '" width="' . $sub_billede['width'] . '" height="' . $sub_billede['height'] . '">';
			if ($sub_title || $sub_txt) {
				echo '<div class="wrap-no-pad">';
				echo '<div class="top-caption">';
				if ($sub_title) {
					echo '<div class="banner-title">' . $sub_title . '</div>';
				}
				if ($sub_txt) {
					echo '<div class="banner-sub">' . $sub_txt . '</div>';
				}
				echo '</div>';
				echo '</div>';
			}

			echo '</a>';
		} else {
			echo '<img src="' . $sub_billede['url'] . '" alt="' . $sub_billede['alt'] . '" width="' . $sub_billede['width'] . '" height="' . $sub_billede['height'] . '">';
			if ($sub_title || $sub_txt) {
				echo '<div class="wrap-no-pad">';
				echo '<div class="top-caption">';
				if ($sub_title) {
					echo '<div class="banner-title">' . $sub_title . '</div>';
				}
				if ($sub_txt) {
					echo '<div class="banner-sub">' . $sub_txt . '</div>';
				}
				echo '</div>';
				echo '</div>';
			}
		}
		echo '</div>';
	endwhile;
	echo '</div>';

}