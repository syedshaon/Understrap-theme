<?php

function custom_post_types()
{
        register_post_type('portfolio', array(
        'capability_type' => 'post',
        'taxonomies' => array('topics', 'category'),
        'map_meta_cap' => true,
        'show_in_menu' => true,
        'public' => true,
        'rewrite' => array('slug' => 'portfolios'),
        'hierarchical' => true,
        'has_archive' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'labels' => array(
            'name' => 'Portfolio Items',
            'add_new_item' => "Add New entry",
            'edit_item' => "Edit entry",
            "all_items" => "All entries",
            "singular_name" => "portfolio",
        ),
        'menu_icon' => 'dashicons-image-filter',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'),
    ));

}

add_action("init", "custom_post_types");

// Shows 100 products in archive pages other than blog page

	function wpsites_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 100 );
    }
}
add_action( 'pre_get_posts', 'wpsites_query' );