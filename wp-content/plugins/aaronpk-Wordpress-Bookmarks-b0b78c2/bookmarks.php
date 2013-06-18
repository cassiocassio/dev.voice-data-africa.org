<?php 
/*
 Plugin Name: Bookmarks
 Plugin URI: http://aaronparecki.com/Wordpress
 Description: 
 Version: 0.1
 Author: Aaron Parecki
 Author URI: http://aaronparecki.com
 */

// important that this plugin is in standard install directory, i.e. wp-content/plugins/pluginname
require (dirname(__FILE__).'/../../../wp-config.php');
// add the admin options page stuff
// require_once ('pm_admin_menu.php');

add_action('init', 'pk_create_bookmark_post_type');
add_action('save_post', 'pk_save_bookmark');

function pk_create_bookmark_post_type() {
    register_post_type('bookmark', array(
		'label'=>'Bookmark', 
		'labels'=>array(
			'name'=>_x('Bookmarks', 'post type general name'), 
			'singular_name'=>_x('Bookmark', 'post type singular name'), 
			'add_new'=>_x('Add New', 'pk_bookmark'), 
			'add_new_item'=>__('Add New Bookmark'),
			'edit_item'=>__('Edit Bookmark'), 
			'new_item'=>__('New Bookmark'), 
			'view_item'=>__('View Bookmark'), 
			'search_items'=>__('Search Bookmarks'), 
			'not_found'=>__('No bookmarks found'), 
			'not_found_in_trash'=>__('No bookmarks found in Trash'), 
			'parent_item_colon'=>''), 
		'public'=>true, 
		'publicly_queryable'=>true, 
		'show_ui'=>true, 
		'query_var'=>true, 
		'rewrite'=>false, 
		'capability_type'=>'post',
    	'supports'=>array('title','thumbnail'),
    	'taxonomies'=>array('category', 'post_tag'),
		'slug'=>'bookmark',
		'hierarchical'=>false, 
		'menu_position'=>4
	));
}

function pk_save_bookmark() {
    global $post;
    if ($_POST['pk_bookmark_link_url'])
        update_post_meta($post->ID, 'link_url', $_POST['pk_bookmark_link_url'], false);
    if ($_POST['pk_bookmark_link_desc'])
        update_post_meta($post->ID, 'link_desc', $_POST['pk_bookmark_link_desc'], false);
}

function pk_bookmark_add_meta_boxes() {
    add_meta_box('pk_bookmark_headers', 'Bookmark', 'pk_bookmark_metabox', 'bookmark', 'normal', 'high');
}

function pk_bookmark_metabox($post) {
    $custom = get_post_custom($post->ID);
    
    echo '<table width="100%">';
	    echo '<tr><td width="110"><b>URL:</b></td><td><input type="text" name="pk_bookmark_link_url" value="'.($custom && $custom['link_url'] ? htmlspecialchars(array_pop($custom['link_url'])) : '').'" style="width: 100%"/></td></tr>';
	    echo '<tr><td><b>Description:</b></td><td><input type="text" name="pk_bookmark_link_desc" value="'.($custom && $custom['link_desc'] ? htmlspecialchars(array_pop($custom['link_desc'])) : '').'" style="width: 100%"/></td></tr>';
	echo '</table>';
    
?>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#titlediv").after(jQuery("#pk_bookmark_headers").parent().detach());
    });
</script>
<?php 
wp_reset_query();
}


if (is_admin()) {
    add_action('admin_menu', 'pk_bookmark_add_meta_boxes');
}


?>
