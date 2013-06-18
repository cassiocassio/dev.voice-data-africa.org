<?php get_header(); ?>

<div id="primary" class="site-content">
		<div id="content" role="main">


<?php

// The Query

$args = array(
	'post_type' => 'post',
	'posts_per_page' => '9',
	'category_name' => 'Kenya'
	
);

$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'content', 'home' );
		}
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>