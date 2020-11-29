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


/* Disable single and archive pages for custom posts */
add_action( 'template_redirect', 'clito_redirect_post' );

function clito_redirect_post() {
  if ( is_singular( 'creator' ) ) {
    $link = \App\Tools::poly_get_page_link(4);
    $id = urlencode(get_the_title());
    $search_param = "_sf_s=$id";
    $url = "$link?$search_param";
    wp_redirect( $url, 301 );
    exit;
  }
}
