<?php

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-formats', array( 'photostory', 'elsewhere' ) );

register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );


add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_theme_support' ) ) {
	set_post_thumbnail_size( 174, 174 ); // default Post Thumbnail dimensions match with width of the elsewhere columns for when we decide we needed images in this post   
	
	add_image_size( 'homepage-thumb', 230, 9999 ); // 230 x 154 used on the homepage photostories grid
	add_image_size( 'homepage-lead-story', 1408, 9999 ); // as speced in the maxwidth css on the lead story
}

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}


