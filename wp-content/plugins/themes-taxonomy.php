<?php
/**
 * Plugin Name: Themes Taxonomy
 * Plugin URI:  https://example.com/
 * Description: Registers a custom taxonomy named "themes" for WordPress posts.
 * Version:     1.0
 * Author:      Your Name
 * Author URI:  https://example.com/
 * Text Domain: themes-taxonomy
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registers the "themes" taxonomy.
 */
function register_themes_taxonomy() {
    $labels = array(
        'name'              => _x( 'themes', 'taxonomy general name', 'themes-taxonomy' ),
        'singular_name'     => _x( 'themes', 'taxonomy singular name', 'themes-taxonomy' ),
        'search_items'      => __( 'Search themess', 'themes-taxonomy' ),
        'all_items'         => __( 'All themess', 'themes-taxonomy' ),
        'parent_item'       => __( 'Parent themes', 'themes-taxonomy' ),
        'parent_item_colon' => __( 'Parent themes:', 'themes-taxonomy' ),
        'edit_item'         => __( 'Edit themes', 'themes-taxonomy' ),
        'update_item'       => __( 'Update themes', 'themes-taxonomy' ),
        'add_new_item'      => __( 'Add New themes', 'themes-taxonomy' ),
        'new_item_name'     => __( 'New themes Name', 'themes-taxonomy' ),
        'menu_name'         => __( 'themes', 'themes-taxonomy' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,   // Important for block editor
        'rest_base'         => 'themes', // REST API base
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
        'rewrite'           => array( 'slug' => 'themes' ),
        'show_admin_column' => true,
        'query_var'         => true);
    
    register_taxonomy( 'themes', array( 'post' ), $args );
}
add_action( 'init', 'register_themes_taxonomy' );
