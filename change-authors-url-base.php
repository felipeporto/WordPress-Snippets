<?php 

function app_author_base() {
	global $wp_rewrite;
	$wp_rewrite->author_base = 'autor'; // change slug name
}
add_action('init', 'app_author_base');
