<?php

/**
 * Plugin Name: Imagi Masonry Gallery
 * Description: Adds a mosaic / masonry gallery template anywhere on your site.
 */


// Security

if (!defined('ABSPATH')) {
    die("Resource not accessible by direct URL");
}

include('functions/photos-cpt-init.php');

add_action('init', 'photos_cpt_init');
