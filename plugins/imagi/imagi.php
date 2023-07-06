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

include('functions/photos-cpt-init.php');
add_action('init', 'photos_cpt_init');

// Create Custom Fields

include('functions/photos-cf-init.php');
add_action('admin_init', 'photos_cf_init');

// Create Database and Activate Plugin

include('functions/photos-create-database.php');
register_activation_hook(__FILE__, 'photos_create_database');

// CRUD functions
include('functions/photos-crud-functions.php');
