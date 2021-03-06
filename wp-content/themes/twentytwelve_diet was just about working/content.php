<?php
/**
* The default template for displaying content. Used for both single and index/archive/search.
*
* Adapted by chopping down Twenty Twelve 1.0 by Martin Storey
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
BEGIN CONTENT PHP
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		IS SINGLE IS TRUE
		
		<!-- *** added flyhead via The Subtitle plugin from http://www.to-wonder.com/the-subtitle/ -->
		<h2 class="flyhead"><?php the_subtitle() ?></h2>  
		<h1 class="entry-title-"><?php the_title() ?></h1>
		
		
		<?php else : ?>
		
		IS NOT SINGLE - SO MUST BE INDEX, ARCHIVE OR SEARCH
		<h2 class="flyhead">flyhead: <?php the_subtitle() ?></h2>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?> rel="bookmark">
				<?php the_title(); ?>
					
				<!-- thumbnail is in list of results and is clickable -->
				<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft',
			'alt'	=> trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ))
			)); ?>
			
			</a>
		</h1>
		<?php endif; // is_single() ?>
		
COMMENTS WOULD BE HERE
		
	</header>

	<!-- ### so now the body -->
 
	<!-- dont need dont want in single posts but will need in search results <div class="entry-summary"><?php the_excerpt(); ?></div><!-- .entry-summary --> 
	<div class="entry-content">
	
	<!-- ### PROBABLY NEED TO CHANGE THIS -->
	BEGIN THE CONTENT
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
	END THE CONTENT
	
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
</div><!-- .entry-content -->


	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>		
<!-- 		 all the author stuff was here, but only me -->
	
	</footer>

</article><!-- #post -->
END CONTENT PHP
