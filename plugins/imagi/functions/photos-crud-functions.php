<?php

function photos_save_post()
{
    if (!isset($_POST['work_title'])) return;
    $work_title = $_POST['work_title'];
    $id = get_the_id();

    global $wpdb;
    $wpdb->insert(                          // ADD OR INSERT NEW DATA
        $wpdb->prefix . "imagi_gallery",
        [
            'photo_ID' => $id,
            'title' => $work_title
        ]
    );
}

function photos_update_post()
{
    if (!isset($_POST['work_title'])) return;
    $work_title = $_POST['work_title'];
    $id = get_the_id();

    global $wpdb;
    $wpdb->update(                          // UPDATE EXISTING DATA
        $wpdb->prefix . "imagi_gallery",
        [
            'title' => $work_title
        ],
        [
            'photo_ID' => $id
        ]
    );
}

function photos_delete_post()
{
    $id = get_the_id();
    global $wpdb;
    $wpdb->delete(                          // DELETE EXISTING DATA
        $wpdb->prefix . "imagi_gallery",
        [
            'photo_ID' => $id
        ]
    );
}

add_action('save_post', 'photos_save_post');
add_action('save_post', 'photos_update_post');
add_action('delete_post', 'photos_delete_post');
