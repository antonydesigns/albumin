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

add_action('admin_init', 'photos_cf_init');
