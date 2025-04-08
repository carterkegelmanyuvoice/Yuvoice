<?php
/**
 * Plugin Name: regions Taxonomy
 * Plugin URI:  https://example.com/
 * Description: Registers a custom taxonomy named "regions" for WordPress posts.
 * Version:     1.0
 * Author:      Your Name
 * Author URI:  https://example.com/
 * Text Domain: regions-taxonomy
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registers the "regions" taxonomy.
 */
function register_regions_taxonomy() {
    $labels = array(
        'name'              => _x( 'regions', 'taxonomy general name', 'regions-taxonomy' ),
        'singular_name'     => _x( 'regions', 'taxonomy singular name', 'regions-taxonomy' ),
        'search_items'      => __( 'Search regionss', 'regions-taxonomy' ),
        'all_items'         => __( 'All regionss', 'regions-taxonomy' ),
        'parent_item'       => __( 'Parent regions', 'regions-taxonomy' ),
        'parent_item_colon' => __( 'Parent regions:', 'regions-taxonomy' ),
        'edit_item'         => __( 'Edit regions', 'regions-taxonomy' ),
        'update_item'       => __( 'Update regions', 'regions-taxonomy' ),
        'add_new_item'      => __( 'Add New regions', 'regions-taxonomy' ),
        'new_item_name'     => __( 'New regions Name', 'regions-taxonomy' ),
        'menu_name'         => __( 'regions', 'regions-taxonomy' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,   // Important for block editor
        'rest_base'         => 'regions', // REST API base
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'show_in_quick_edit' => true,
        'meta_box_cb'       => 'post_categories_meta_box', // Use the default meta box
        'capabilities'      => array(
            'manage_terms' => 'manage_categories',
            'edit_terms'   => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts',
        ),
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'regions' ),
        'show_admin_column' => true,
        'query_var'         => true);
    
    register_taxonomy( 'regions', array( 'post' ), $args );
}
add_action( 'init', 'register_regions_taxonomy' );
