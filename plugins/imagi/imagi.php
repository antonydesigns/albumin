<?php

/**
 * Plugin Name: Imagi Masonry Gallery
 * Description: Adds a mosaic / masonry gallery template anywhere on your site.
 */


// Security
if (!defined('ABSPATH')) {
    die("Resource not accessible by direct URL");
}

// Create Custom Post Type called Photos
add_action('init', 'photos_cpt_init');
include('functions/photos-cpt-init.php');

// Create Custom Fields
include('functions/photos-cf-init.php');

// Create Database and Activate Plugin
include('functions/photos-create-database.php');

// CRUD functions
include('functions/photos-crud-functions.php');

// Create Pages on Activation
$page_title = 'Products';
include('functions/photos-create-page.php');

// Assign pages to custom template

function product_template($template)
{
    if (is_page("Products")) {
        return plugin_dir_path(__FILE__) . 'templates/products.php';
    }
    return $template;
}

add_filter('template_include', 'product_template');

// Add stylesheet

function add_style()
{
    $path = plugin_dir_url(__FILE__) . 'style/style.css';
    wp_register_style('style', $path);
    wp_enqueue_style('style', $path);
}

add_action('wp_enqueue_scripts', 'add_style');

// Assign Custom Post Type to Custom Template

function gallery($template)
{
    global $post;

    if ($post->post_type === 'photos') {
        return plugin_dir_path(__FILE__) . 'templates/gallery.php';
    }
}

add_filter('single_template', 'gallery');
