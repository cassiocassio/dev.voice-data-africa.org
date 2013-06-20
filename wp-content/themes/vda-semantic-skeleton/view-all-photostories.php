// Semantic only

// code to return all posts ever, with sticky posts just included in normal order
// creates content for 'view all photostories' archive page

<?php // Thex Query

$args = array(
	'posts_per_page' => '-1',  // get 
	'post__in'  => $sticky,
	'category_name' => '',
	'ignore_sticky_posts' => 1
);

$query = new WP_Query( $args);

	// The Loop for photostories that are sticky. Only sticky posts are featured on the homepage.
	
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$post_type=get_post_type($post);
			if  ($post_type == 'post') { get_template_part( 'snippet', $post_type ); 
			}
		}
	} else {
	// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
?>