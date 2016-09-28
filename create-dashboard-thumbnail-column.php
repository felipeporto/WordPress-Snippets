<?php

/**
 * Create a thumbnail column in WP admin dashboard
 */

function posts_columns($defaults){
	$defaults['ifc_post_thumbs'] = __('Thumbs');
	return $defaults;
}

function posts_custom_columns($column_name, $id){
	if($column_name === 'ifc_post_thumbs'){
		echo the_post_thumbnail( 'post-thumbnail' );
	}
}
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
