<?php get_header(); ?>

<div id="primary" class="site-content">
		<div id="content" role="main">

<?php // The Query

$sticky = get_option( 'sticky_posts' );
$args = array(
	'posts_per_page' => '9',
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
	
	echo ( '<hr>' );

 $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 8,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( 'Countries' ),
	'show_option_none'   => __('No countries'),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
);

wp_list_categories( $args);



 $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 12,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( 'Topics' ),
	'show_option_none'   => __('No topics'),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
);

wp_list_categories( $args);

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
			if  ($post_type == 'bookmark') { get_template_part( 'snippet', $post_type ); 
			}
		}
	} else {
// no posts found
	};

// Restore original Post Data
//	wp_reset_postdata();
	
?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
