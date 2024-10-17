<?php
class ThemeAssets
{
    public function enqueue_assets()
    {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
            wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
            if (is_front_page()) {
                wp_enqueue_script("custom-jquery", src: get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
                wp_enqueue_style("home_css", get_template_directory_uri() . '/assets/css/pages/home.css');
            }
            // if (is_single()) {
            //     wp_enqueue_style("single", get_template_directory_uri() . '/assets/css/pages/single.css');
            // }
            wp_enqueue_script("custom-jquery", src: get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
            wp_enqueue_script("mainjs", src: get_template_directory_uri() . '/assets/js/main.js');
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
        register_nav_menus([
            "header-menu" => "Header menu"
        ]);
    }
}

$theme_assets = new ThemeAssets();
$theme_assets->enqueue_assets();
$theme_assets->add_theme_supports();
$theme_assets->register_menus();
