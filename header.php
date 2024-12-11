<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <?php wp_head(); ?>

</head>

<body 

<?php

wp_nav_menu(
    array(
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class' => 'nav',
        'menu_class' => 'nav'
    )
);

?>

