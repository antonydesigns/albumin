<?php

function photos_create_database()
{
    global $wpdb;

    $table_name = $wpdb->prefix . "imagi_gallery";

    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE" . $table_name . "(photo_ID int NOT NULL, title tinytext, PRIMARY KEY (photo_ID)) $charset;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
