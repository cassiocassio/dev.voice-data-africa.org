<?php get_header(); ?>

<div id="primary" class="site-content">
		<div id="content" role="main">

<h1>array of args passed to get_bookmarks(), then for each ($bookmarks)</h1>


<?php



$args = array(
    'orderby'          => 'link_id',
    'order'            => 'ASC',
    'limit'            => 12,
    'category'         => '',
    'exclude_category' => 'true',
    'category_name'    => 'Elsewhere ',
    'hide_invisible'   => 1,
    'show_updated'     => 1,
    'show_description' => 1,
    'echo'             => 1,
    'categorize'       => 0,
    'title_li'         => __('Elsewhere:'),
    'title_before'     => '<h2>',
    'title_after'      => '</h2>',
    'category_orderby' => 'name',
    'category_order'   => 'ASC',
    'class'            => 'elsewhere-link',
    'category_before'  => '<li id=%id class=%class>',
    'category_after'   => '</li>' );
  

wp_list_bookmarks( $args );

?>

after list bookmarks
    
<?php 

// The Query

$args = array(
	'post_type' => 'posts',
	'posts_per_page' => '9'
	
);


$query = new WP_Query( $args );

echo ( $query );


	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			echo ('in the loop');
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