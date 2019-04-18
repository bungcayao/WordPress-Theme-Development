<?php
 /**
	* Filter the except length to 20 words.
	*
	* @param int $length Excerpt length.
	* @return int (Maybe) modified excerpt length.
	*/
 function wpdocs_custom_excerpt_length($length) {
	return 15;
 }
 add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
 
 /**
	* Simple function that changes the output of the “[…]” text:
	*/
 function wpdocs_excerpt_more($more)
 {
	return '&hellip;';
 }
 add_filter('excerpt_more', 'wpdocs_excerpt_more');
 
 function _custom_posts_register()
 {

	/**
	 * Post Type -> Technology
	 */
	register_post_type('technology-blog',
	 array(
		'labels' => array(
		 "name" => __('Technology', 'popin'),
		 "singular_name" => __('Technology', 'popin'),
		 "menu_name" => __('Technology', 'popin'),
		 "all_items" => __('All Technology', 'popin'),
		 "add_new" => __('Add New', 'popin'),
		 "add_new_item" => __('Add New Item', 'popin'),
		 "edit_item" => __('Edit Item', 'popin'),
		 "new_item" => __('New Item', 'popin'),
		 "view_item" => __('View Item', 'popin'),
		 "search_items" => __('Search Item', 'popin'),
		 "not_found" => __('Not Found', 'popin'),
		 "not_found_in_trash" => __('Not Found in Trash', 'popin'),
		 "featured_image" => __('Featured Image', 'popin'),
		 "set_featured_image" => __('Set Featured Image', 'popin'),
		 "remove_featured_image" => __('Remove Featured Image', 'popin'),
		 "use_featured_image" => __('Use Featured Image', 'popin'),
		 "archives" => __('Archives', 'popin'),
		 "insert_into_item" => __('Insert into Item', 'popin'),
		 "uploaded_to_this_item" => __('Uploaded to this item', 'popin'),
		 "filter_items_list" => __('Filter Technology', 'popin'),
		 "items_list_navigation" => __('Technology List Nav', 'popin'),
		 "items_list" => __('Technology List', 'popin'),
		
		),
		'description' => __('This post type will be for Technology specific entries, such as Release Notes, App Development, Product Engineering, What\'s New, and general updates to the product.', 'popin'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 20,
		'hierarchical' => false,
		'rewrite' => true,
		'query_var' => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
	 )
	);
	/**
	 * Taxonomy -> Technology
	 */
	register_taxonomy('technology-blog-taxonomy',
	 array('technology-blog'),
	 array(
		'hierarchical' => true,
		'labels' => array(
		 'name' => __('Technology Category', 'popin'),
		 'singular_name' => __('Technology Category', 'popin'),
		 'search_items' => __('Search Technology Categories', 'popin'),
		 'all_items' => __('All Technology Categories', 'popin'),
		 'parent_item' => __('Parent Technology Categories', 'popin'),
		 'parent_item_colon' => __('Parent Technology Category:', 'popin'),
		 'edit_item' => __('Edit Technology Category', 'popin'),
		 'update_item' => __('Update Technology Category', 'popin'),
		 'add_new_item' => __('Add New Technology Category', 'popin'),
		 'new_item_name' => __('New Technology Category Name', 'popin')
		),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_admin_column' => true,
	 )
	);
	/**
	 * Post Type -> News & Press
	 */
	register_post_type('news',
	 array(
		'labels' => array(
		 'name' => __('News & Press', 'popin'),
		 'all_items' => __('All News & Press', 'popin'),
		 'singular_name' => __('News & Press', 'popin'),
		 'add_new' => __('Add New', 'popin'),
		 'add_new_item' => __('Add New News & Press', 'popin'),
		 'edit' => __('Edit', 'popin'),
		 'edit_item' => __('Edit News & Press', 'popin'),
		 'new_item' => __('New News & Press', 'popin'),
		 'view' => __('View News & Press', 'popin'),
		 'view_item' => __('View News & Press', 'popin'),
		 'search_items' => __('Search News & Press', 'popin'),
		 'not_found' => __('No News & Press found', 'popin'),
		 'not_found_in_trash' => __('No News & Press found in trash', 'popin'),
		 'parent' => __('Parent News & Press', 'popin'),
		),
		'description' => __('This is where you can create new News & Press for your site.', 'popin'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 20,
		'hierarchical' => false,
		'rewrite' => true,
		'query_var' => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
	 )
	);
	/**
	 * Taxonomy -> News & Press
	 */
	register_taxonomy('news-taxonomy',
	 array('news'),
	 array(
		'hierarchical' => true,
		'labels' => array(
		 'name' => __('News Categories', 'popin'),
		 'singular_name' => __('News Category', 'popin'),
		 'search_items' => __('Search News Categories', 'popin'),
		 'all_items' => __('All News Categories', 'popin'),
		 'parent_item' => __('Parent News Category', 'popin'),
		 'parent_item_colon' => __('Parent News Category:', 'popin'),
		 'edit_item' => __('Edit News Category', 'popin'),
		 'update_item' => __('Update News Category', 'popin'),
		 'add_new_item' => __('Add New News Category', 'popin'),
		 'new_item_name' => __('New News Category Name', 'popin')
		),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_admin_column' => true,
	 )
	);
	/**
	 * Post Type -> Resources
	 */
	register_post_type('resources',
	 array(
		'labels' => array(
		 'name' => __('Resources', 'popin'),
		 'all_items' => __('All Resources', 'popin'),
		 'singular_name' => __('Resource', 'popin'),
		 'add_new' => __('Add New', 'popin'),
		 'add_new_item' => __('Add New Resource', 'popin'),
		 'edit' => __('Edit', 'popin'),
		 'edit_item' => __('Edit Resource', 'popin'),
		 'new_item' => __('New Resource', 'popin'),
		 'view' => __('View Resources', 'popin'),
		 'view_item' => __('View Resource', 'popin'),
		 'search_items' => __('Search Resources', 'popin'),
		 'not_found' => __('No Resources found', 'popin'),
		 'not_found_in_trash' => __('No Resources found in trash', 'popin'),
		 'parent' => __('Parent Resource', 'popin'),
		),
		'description' => __('This is where you can create new Resources for your site.', 'popin'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 20,
		'hierarchical' => false,
		'rewrite' => true,
		'query_var' => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
	 )
	);
	/**
	 * Taxonomy -> Resources
	 */
	register_taxonomy('resources-taxonomy',
	 array('resources'),
	 array(
		'hierarchical' => true,
		'labels' => array(
		 'name' => __('Resource Categories', 'popin'),
		 'singular_name' => __('Resource Category', 'popin'),
		 'search_items' => __('Search Resource Categories', 'popin'),
		 'all_items' => __('All Resource Categories', 'popin'),
		 'parent_item' => __('Parent Resource Category', 'popin'),
		 'parent_item_colon' => __('Parent Resource Category:', 'popin'),
		 'edit_item' => __('Edit Resource Category', 'popin'),
		 'update_item' => __('Update Resource Category', 'popin'),
		 'add_new_item' => __('Add New Resource Category', 'popin'),
		 'new_item_name' => __('New Resource Category Name', 'popin')
		),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_admin_column' => true,
	 )
	);
 }
 
 add_action('init', '_custom_posts_register', 0);