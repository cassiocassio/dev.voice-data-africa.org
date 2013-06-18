<?php

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-formats', array( 'photostory', 'elsewhere' ) );

register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );


add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_theme_support' ) ) {
	set_post_thumbnail_size( 174, 174 ); // default Post Thumbnail dimensions match with width of the elsewhere columns for when we decide we needed images in this post   
	
	add_image_size( 'homepage-thumb', 230, 9999 ); // 230 x 154 used on the homepage photostories grid
	add_image_size( 'homepage-lead-story', 1408, 9999 ); // as speced in the maxwidth css on the lead story
}

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}




/**
 * Now the code for the Bookmark Custom Post Type
 */
 
 
 
 
 

add_action('widgets_init', 'tag_list_widget_setup');
add_filter('pre_get_posts', 'my_get_posts');

// local tag list

function tag_list_widget_setup() {
	register_widget('Tag_List_Widget');
}

function my_get_posts( $query ) 
{
	if ( (is_home() || is_search() || is_tag() || is_category()) && false == $query->query_vars['suppress_filters'] )
		$query->set( 'post_type', array( 'post', 'bookmark' ) );

	return $query;
}

class Tag_List_Widget extends WP_Widget {

	function Tag_List_Widget() {
			$widget_ops = array( 'description' => __('Lists all tags') );
			$control_ops = array( 'width' => 400, 'height' => 200 );
			$this->WP_Widget( 'tag_list', __('Tag List'), $widget_ops, $control_ops );
		}

	function widget($args, $instance) {
			extract( $args );
			echo $before_widget; 
			
			$title = apply_filters('widget_title', empty( $instance['title'] ) ? __( 'Top Tags' ) : $instance['title']);
			echo $before_title . $title . $after_title;
			?>
		    <ul id="tag-list-widget">
			<?php
			$tags = get_terms('post_tag', array(
				'fields' => 'all', 
			    'orderby' => 'count',
				'order' => 'DESC',
				'number' => $instance['num']  ));
			foreach ($tags as $tag) {
				echo '<li><a href="/tag/'.$tag->slug.'">'.$tag->name.'<span class="count">'.$tag->count.'</span></a></li>';
			}
			
			?>
		    </ul>
		   <?php
			echo $after_widget;
	}
	
	function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['num'] = (int)$new_instance['num'];
			return $instance;
	}

	function form( $instance ) {
			//Defaults
				$instance = wp_parse_args( (array) $instance, array( 
						'title' => 'Top Tags',
						'num' => 45,
							));	
	?>  
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" /></p>
        
        <p><label for="<?php echo $this->get_field_id('num'); ?>"><?php _e('Number of links to show:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('num'); ?>" name="<?php echo $this->get_field_name('num'); ?>" type="text" value="<?php echo $instance['num']; ?>" /></p>
		<?php
	}
}







