<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
<div id="wrapper">
    <header class="header">
        <div class="header__wrapper">
            <img class="header__logo"
                 src="<?php echo get_template_directory_uri() . "/assets" . "/img" . "/logo.png" ?>" alt="">
            <?php wp_nav_menu(["menu" => "Header menu", "container" => "menu", "menu_class" => "header__menu"]); ?>
            <div class="header__contact">
                <img src="<?php get_template_directory_uri() . "/assets" . "/img" . "/logo.png" ?>" alt="">
                <div>
                    <h3>123-456-7890</h3>
                    <p>Call us today</p>
                </div>
            </div>
        </div>
    </header>
    <button id="scroll-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
