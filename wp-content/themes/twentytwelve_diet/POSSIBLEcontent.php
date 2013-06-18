<?php
/**
 * The template used for displaying homepages experts content in content-home.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<!-- PHOTOSTORY content-post called by line 25 of index.php via get_template_part( 'content', get_post_format() ); -->
BEGINING CONTENT-POST
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2><?php the_subtitle(); ?> </h2>
		<h1 class="entry-title">IS CONTENT-STANDARD BEING INVOKED?<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	
	<?php the_post_thumbnail(homepage-thumb); ?>
	
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
EXITING CONTENT POST

