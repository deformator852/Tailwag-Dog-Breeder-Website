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
                <img class="header__logo" src="<?php echo get_template_directory_uri() . "/assets" . "/img" . "/logo.png"  ?>" alt="">
                <?php wp_nav_menu(["theme location" => "header-menu", "container" => "menu", "menu_class" => "header__menu"]); ?>
                <div class="header__contact">
                    <!-- // todo that I can give elements in menu in Pages icons -->
                    <img src="<?php get_template_directory_uri() . "/assets" . "/img" . "/logo.png" ?>" alt="">
                    <div>
                        <h3>123-456-7890</h3>
                        <p>Call us today</p>
                    </div>
                </div>
            </div>
        </header>