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
