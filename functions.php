<?php

add_action('wp_ajax_get_posts_by_category', 'get_posts_by_category');

function get_posts_by_category() {
	$category = $_POST['category'];

	$data = array(
		'category' => $category,
		'orderby' => 'date',
		'order' => 'DESC',
	);

	$posty = get_posts($data);

	$dane = array();

	for($i = 0; $i > count($posty); $i++) {
		$post_title = $post->post_title;
		$post_content = $post->post_content;

		$post_data = array(
			'post_title' => $post_title,
			'post_content' => $post_content,
		);

		$dane[] = $post_data;
	}

	echo $dane;
	wp_die();
}

function getSiteAddress() {
	$options = wp_load_alloptions();
	foreach ($options as $key => $value) {
		if (strpos($key, 'siteurl') !== false) {
			$site_url = $value;
		}
	}
	return $site_url;
}