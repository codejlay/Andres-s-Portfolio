<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function ap_create_project() {

	$labels = array(
		'name'                => 'Projects',
		'singular_name'       => 'project',
		'menu_name'           => 'Project',
		'name_admin_bar'      => 'Project',
		'parent_item_colon'   => '',
		'all_items'           => 'All Projects',
		'add_new_item'        => 'Add New Project',
		'add_new'             => 'Add New Project',
		'new_item'            => 'New Project',
		'edit_item'           => 'Edit Project',
		'update_item'         => 'Update Project',
		'view_item'           => 'View Project',
		'search_items'        => 'Search Project',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'description'         => 'Projects of Andres Navas',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'projects',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'ap_create_project', 0 );
