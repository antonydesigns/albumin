<?php

function photos_cf_init()
{

    add_meta_box(
        'photos_cf',
        'Gallery Content',  // Custom field title      
        'custom_field_content',  // callback name
        'photos',           // custom post type name
        'normal',
        'low'
    );
}


function custom_field_content()
{

    // pre-populate fields with data if exists

    global $wpdb;
    $table = $wpdb->prefix . "imagi_gallery";
    $id = get_the_id();
    $work = $wpdb->get_var("SELECT `title` FROM $table WHERE `photo_id` = $id");
    echo $work;
    echo "<br/>";

?>

    <form method="post">
        <label for="work_title">Work title:</label>
        <input type="text" name="work_title" value="<?php echo $work ?>">
    </form>

<?php
}

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

add_action('save_post', 'photos_save_post');
add_action('save_post', 'photos_update_post');
