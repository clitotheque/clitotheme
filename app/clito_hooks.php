<?php

/**
 * Index should show latest resources
 *
 * @param WP_Query $query data
 *
 */

function index_query( $query ) {

	if( $query->is_main_query() && $query->is_home() ) {
		$query->set( 'post_type', 'res' );
	}
}
add_action( 'pre_get_posts', 'index_query' );
