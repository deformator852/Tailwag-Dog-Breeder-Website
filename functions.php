<?php

class ThemeAssets
{
    public function enqueue_assets()
    {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
            wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
            if (is_front_page()) {
                wp_enqueue_style("home_css", get_template_directory_uri() . '/assets/css/pages/home.css');
            }
            // if (is_single()) {
            //     wp_enqueue_style("single", get_template_directory_uri() . '/assets/css/pages/single.css');
            // }

            if (is_page_template("about.php")) {
                wp_enqueue_style('about_page', get_template_directory_uri() . '/assets/css/pages/about.css');
            }
            if (is_page_template("puppies.php")) {
                wp_enqueue_style("puppies_page", get_template_directory_uri() . '/assets/css/pages/puppies.css');
            }
            if (is_page_template("services.php")) {
                wp_enqueue_style("services_page", get_template_directory_uri() . '/assets/css/pages/services.css');
            }
            if (is_page_template("contact.php")) {
                wp_enqueue_style("contact_page", get_template_directory_uri() . '/assets/css/pages/contact.css');
            }
            wp_enqueue_script("custom-jquery", get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
            wp_enqueue_script("mainjs", get_template_directory_uri() . '/assets/js/main.js', array("custom-jquery"));
            wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('custom-jquery'));

        });
    }

    public function add_theme_supports()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }

    public function register_menus()
    {
        add_action("after_setup_theme", function () {
            register_nav_menus([
                "header-menu" => "Header menu",
                "footer-menu" => "Footer menu"
            ]);
        });
    }
}

$theme_assets = new ThemeAssets();
$theme_assets->enqueue_assets();
$theme_assets->add_theme_supports();
$theme_assets->register_menus();
