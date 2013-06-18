<?php
/**
 * The template used for displaying bookmark snippet on homepage snippet-bookmark.php
 *
 */
?>

<!-- BOOKMARK SNIPPET  AS SHOWN ON HOMEPAGE -->
<section id="bookmark-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="bookmark-header">
		<?php $the_link_url=get_post_meta(get_the_ID(), 'link_url', true) ?>
		<h1 class="bookmark-title"><a href="<?php echo $the_link_url ?>" class="title"><?php the_title(); ?></a></h1>
		<h2><a href="<?php echo $the_link_url ?>" target="_blank" class="bookmark-link-as-shown"><?php the_subtitle(); ?></a></h2>
	</header>
	<?php if($desc=get_post_meta(get_the_ID(), 'link_desc', true)) { echo '<div class="description">' . $desc . '</div>'; } ?>
</section><!-- #bookmark -->
