<?php
/**
 * The template used for displaying photostory post promos on the homepage  snippet-post.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<!-- PHOTOSTORY PROMO -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2><?php the_subtitle(); ?> </h2>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	
	<?php the_post_thumbnail(homepage-thumb); ?>
	
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
		<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

