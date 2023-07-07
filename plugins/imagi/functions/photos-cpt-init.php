<?php

function photos_cpt_init()
{
    $labels = array(
        'name'                  => _x('Photos', 'Post type general name', 'photos'),
        'singular_name'         => _x('Photo', 'Post type singular name', 'photos'),
        'featured_image' => __('Featured Image', 'textdomain'),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'photos'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true
    );

    register_post_type('photos', $args);
}

add_action('init', 'photos_cpt_init', 0);


// Register Custom Post Type Photo
/* function create_photo_cpt()
{

    $labels = array(
        'name' => _x('Photos', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Photo', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => _x('Photos', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Photo', 'Add New on Toolbar', 'textdomain'),
        'archives' => __('Photo Archives', 'textdomain'),
        'attributes' => __('Photo Attributes', 'textdomain'),
        'parent_item_colon' => __('Parent Photo:', 'textdomain'),
        'all_items' => __('All Photos', 'textdomain'),
        'add_new_item' => __('Add New Photo', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'new_item' => __('New Photo', 'textdomain'),
        'edit_item' => __('Edit Photo', 'textdomain'),
        'update_item' => __('Update Photo', 'textdomain'),
        'view_item' => __('View Photo', 'textdomain'),
        'view_items' => __('View Photos', 'textdomain'),
        'search_items' => __('Search Photo', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
        'featured_image' => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image' => __('Use as featured image', 'textdomain'),
        'insert_into_item' => __('Insert into Photo', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this Photo', 'textdomain'),
        'items_list' => __('Photos list', 'textdomain'),
        'items_list_navigation' => __('Photos list navigation', 'textdomain'),
        'filter_items_list' => __('Filter Photos list', 'textdomain'),
    );
    $args = array(
        'label' => __('Photo', 'textdomain'),
        'description' => __('', 'textdomain'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'page-attributes', 'post-formats'),
        'taxonomies' => array('film', 'film_type', 'subject'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'photos'),
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('photos', $args);
}
add_action('init', 'create_photo_cpt', 0); */
