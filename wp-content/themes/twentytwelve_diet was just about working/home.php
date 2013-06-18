<?php get_header(); ?>

<div id="primary" class="site-content">
		<div id="content" role="main">


<?php

// The Query

$args = array(
	'posts_per_page' => '9',
	'category_name' => 'Kenya'
	
);


$query = new WP_Query( $args);

	// The Loop for photostories
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$post_type=get_post_type($post);
			echo ( '<em>' . $post_type . '</em>' ); 
			if  ($post_type == 'post') { get_template_part( 'snippet', $post_type ); 
			}
		}
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	
	
	echo ( '<hr>' );

	
// Custom bookmark post


// The Query

$args = array(
	'posts_per_page' => '16',
	'category_name' => ''
);


$query = new WP_Query( $args);

	// The Loop for photostories	
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$post_type=get_post_type($post);
			echo ( $post_type ); 
			if  ($post_type == 'bookmark') { get_template_part( 'snippet', $post_type ); 
			}
		}
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	
	



echo ( 'done listing bookmarks' );


?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>