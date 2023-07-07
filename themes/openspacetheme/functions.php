<?php

/**
 * Functions
 * @package OpenSpaceTheme
 */

// CSS

function register_styles()
{
    wp_register_style('tailwind', get_template_directory_uri() . '/tailwind-output.css');
    wp_enqueue_style('tailwind');
}

add_action('wp_enqueue_scripts', 'register_styles');

// THEME SUPPORT

function theme_supports()
{
    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('custom-background', [
        'default-color' => '#CBCBCB',
    ]);

    add_theme_support('post-thumbnails', array('post', 'page', 'photos'));

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('automatic-feed-links');

    add_theme_support(
        'html5',
        ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']
    );

    add_editor_style();

    add_theme_support('align-wide');
}

add_action('after_setup_theme', 'theme_supports');

// flush_rewrite_rules();
