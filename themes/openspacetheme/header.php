<?php

/**
 * Header
 * @package OpenSpaceTheme
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albumin</title>
    <?php wp_head(); ?>
</head>

<body class="bg-slate-300">
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    };
    ?>
    <header class="">
        <nav>
            <a href="http://localhost/albumin" class="hover:underline">Home</a>
            <a href="http://localhost/albumin/blog" class="hover:underline">Blog</a>
        </nav>
    </header>