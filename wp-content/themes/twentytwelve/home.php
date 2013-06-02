<?php
/**
 * The template for displaying the home page.
 *
 * CREATED BY MARTIN ON A train(
 *
 * AS HE TRIES TO UNDERSTAND 
 * http://codex.wordpress.org/images/1/18/Template_Hierarchy.png 
 * AND http://codex.wordpress.org/Template_Hierarchy
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

IS THIS USED AS THE HOMEPAGE OR NOT?
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'home' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>