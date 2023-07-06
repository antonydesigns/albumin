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

// Create Custom Fields
include('functions/photos-cf-init.php');

// Create Database and Activate Plugin
include('functions/photos-create-database.php');

// CRUD functions
include('functions/photos-crud-functions.php');

// Create Pages on Activation
include('functions/photos-create-page.php');
