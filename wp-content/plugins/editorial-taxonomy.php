<?php
/**
 * Plugin Name: Editorial Taxonomy
 * Plugin URI:  https://example.com/
 * Description: Registers a custom taxonomy named "Editorial" for WordPress posts.
 * Version:     1.0
 * Author:      Your Name
 * Author URI:  https://example.com/
 * Text Domain: editorial-taxonomy
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registers the "Editorial" taxonomy.
 */
function register_editorial_taxonomy() {
    $labels = array(
        'name'              => _x( 'Editorials', 'taxonomy general name', 'editorial-taxonomy' ),
        'singular_name'     => _x( 'Editorial', 'taxonomy singular name', 'editorial-taxonomy' ),
        'search_items'      => __( 'Search Editorials', 'editorial-taxonomy' ),
        'all_items'         => __( 'All Editorials', 'editorial-taxonomy' ),
        'parent_item'       => __( 'Parent Editorial', 'editorial-taxonomy' ),
        'parent_item_colon' => __( 'Parent Editorial:', 'editorial-taxonomy' ),
        'edit_item'         => __( 'Edit Editorial', 'editorial-taxonomy' ),
        'update_item'       => __( 'Update Editorial', 'editorial-taxonomy' ),
        'add_new_item'      => __( 'Add New Editorial', 'editorial-taxonomy' ),
        'new_item_name'     => __( 'New Editorial Name', 'editorial-taxonomy' ),
        'menu_name'         => __( 'Editorials', 'editorial-taxonomy' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,   // Important for block editor
        'rest_base'         => 'editorial', // REST API base
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
        'rewrite'           => array( 'slug' => 'editorial' ),
        'show_admin_column' => true,
        'query_var'         => true);
    
    register_taxonomy( 'editorial', array( 'post' ), $args );
}
add_action( 'init', 'register_editorial_taxonomy' );
