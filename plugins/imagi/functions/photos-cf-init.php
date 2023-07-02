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
?>

    <form action="">

        <label for="work_title">Work title:</label>
        <input type="text" name="work_title">

    </form>

<?php
}

/* function save_photo()
{
        $work_title = $_POST['work_title'];

        global $wpdb;

        $wpdb->$prefix.
}
 */