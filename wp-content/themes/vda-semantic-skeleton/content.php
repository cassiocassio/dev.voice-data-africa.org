<?php
/**
* The default template for displaying content. Used for both single and index/archive/search.
*
* Adapted by chopping down Twenty Twelve 1.0 by Martin Storey
*/
?>

<!-- CALLED BY SINGLE.PHP TO DISPLAY THE CONTENT OF A SINGLE ARTICLE -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		
<!-- SINGLE POST -->
IS SINGLE[IN CONTENT.PHP]
		<h2 class="flyhead"><?php the_subtitle() ?></h2>  
		<h1 class="entry-title-"><?php the_title() ?></h1>
	</header>
	<!-- ### so now the body -->
		<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
		<!-- author stuff would be here, but only me -->
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<!-- COMMENTS WOULD BE HERE -->

		<?php else : ?>
		
<!-- IS NOT SINGLE - SO MUST BE INDEX, ARCHIVE OR SEARCH -->
IS NOT SINGLE [IN CONTENT.PHP]

<!-- PHOTOSTORY PROMO -->
		<h2><?php the_subtitle(); ?> </h2>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	
	<?php the_post_thumbnail('matoke-homepage-thumb', array('class' => 'THUMBNAILCLASS-WAS-ALIGNLEFT',st
			'alt'	=> trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ))
			)); ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	
</article><!-- #post -->

		<?php endif; // is_single() ?>
</header>


	<footer class="entry-meta">
		<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->

</article><!-- #post -->
