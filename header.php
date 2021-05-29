<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="Software development portfolio of Blaine Lafreniere">
        <meta name="author" content="Blaine Lafreniere">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">


        <?php wp_head() ?>
    </head>

    <body <?php body_class() ?>>
        <div class="container d-flex flex-row justify-content-between" id="theme-header">
            <div>
                <a href="<?php bloginfo("url") ?>">
                    <?php bloginfo("name"); ?>
                </a>
            </div>
            <?php
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container_class' => '',
                    'container_id' => 'main-menu-container'
                ]);
            ?>
        </div>