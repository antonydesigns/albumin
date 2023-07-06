<?php

function photos_create_page()
{
    $page_title = 'Products';

    if (post_exists($page_title, '', '', 'page',) != 0) return;

    $products = [
        'post_title'    => $page_title,
        'post_content'  => 'hello world',
        'post_status'   => 'publish',
        'post_type'     => 'page'
    ];

    wp_insert_post($products);
}

register_activation_hook(__FILE__, 'photos_create_page');
