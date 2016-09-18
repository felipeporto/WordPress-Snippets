function redirect_subcategory( $wp_query ) {
	if ( $wp_query->is_category() && $wp_query->is_main_query() ) {
		
		$cat = $wp_query->get_queried_object();

		if( $cat->category_parent !== 0 ) {
			wp_safe_redirect( get_category_link( $cat->category_parent ) );
			exit;
		}
	}
}
add_action( 'pre_get_posts', 'redirect_subcategory' );
