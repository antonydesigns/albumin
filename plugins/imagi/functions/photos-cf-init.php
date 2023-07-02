<?php

function photos_cf_init()
{

    add_meta_box(
        'photos_cf',
        'Gallery Content',  // Custom field title      
        'gallery_content',  // callback name
        'photos',           // custom post type name
        'normal',
        'low'
    );
}


function gallery_content()
{

    // pre-populate fields with data if exists

    /* global $wpdb; */
    /* $table = $wpdb->prefix . "imagi_gallery"; */
    /* $work_title = $wpdb->get_var("SELECT `title` FROM $table"); */

?>

    <form method="post">
        <label for="work_title">Work title:</label>
        <input type="text" name="work_title">
    </form>

<?php
}

function photos_save_post($post_id)
{

    $work_title = $_POST['work_title'];
    $id = get_the_id();

    global $wpdb;
    $wpdb->insert(
        $wpdb->prefix . "imagi_gallery",
        [
            'photo_ID' => $id,
            'title' => $work_title
        ]
    );
}

add_action('save_post', 'photos_save_post');


// include('photos-save-post.php');


    /* $photo_ID = get_the_id();
    $photo_title = get_the_title();
    $work_title = $_POST['work_title'];

    global $wpdb;
    $wpdb->update(
        $wpdb->prefix . "imagi_gallery",
        [
            'title' => $work_title
        ],
        [
            'photo_ID' => $post_id;
        ]
    ); */
