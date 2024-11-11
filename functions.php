<?php

class ThemeAssets
{
  public function enqueue_assets(): void
  {
    add_action('wp_enqueue_scripts', function () {
      wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
      wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
      wp_enqueue_style("poppins", "https://fonts.googleapis.com");

      if (is_front_page()) {
        wp_enqueue_style("home_css", get_template_directory_uri() . '/assets/css/pages/home.css');
      } else if (is_single()) {
        wp_enqueue_style("single", get_template_directory_uri() . '/assets/css/pages/single.css');
      } else if (is_page_template("about.php")) {
        wp_enqueue_style('about_page', get_template_directory_uri() . '/assets/css/pages/about.css');
      } else if (is_page_template("puppies.php")) {
        wp_enqueue_style("puppies_page", get_template_directory_uri() . '/assets/css/pages/puppies.css');
      } else if (is_page_template("services.php")) {
        wp_enqueue_style("services_page", get_template_directory_uri() . '/assets/css/pages/services.css');
      } else if (is_page_template("contact.php")) {
        wp_enqueue_style("contact_page", get_template_directory_uri() . '/assets/css/pages/contact.css');
      } elseif (is_page_template("FAQs.php")) {
        wp_enqueue_style("faqs_page", get_template_directory_uri() . '/assets/css/pages/faqs.css');
      } else if (is_page_template("shop.php")) {
        wp_enqueue_style("shop_page", get_template_directory_uri() . '/assets/css/pages/shop.css');
      } else if (is_page_template("cart.php")) {
        wp_enqueue_style("cart_page", get_template_directory_uri() . '/assets/css/pages/cart.css');
      } else if (is_page_template("checkout.php")) {
        wp_enqueue_style("checkout_page", get_template_directory_uri() . '/assets/css/pages/checkout.css');
      }
      wp_enqueue_script("custom-jquery", get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
      wp_enqueue_script("mainjs", get_template_directory_uri() . '/assets/js/main.js', array("custom-jquery"));
      wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('custom-jquery'));
    });
  }

  public function add_theme_supports(): void
  {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
  }

  public function register_menus(): void
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

function handle_update_cart()
{
  if (isset($_POST['products'])) {
    $products = $_POST['products'];
    $cart = WC()->cart;
    foreach ($products as $product) {
      $product_id = $product['product_id'];
      $new_quantity = $product['product_quantity'];

      foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        if ($cart_item['product_id'] == $product_id) {
          $cart->set_quantity($cart_item_key, $new_quantity, true);
        }
      }
    }

    wp_send_json_success(['message' => "Cart updated successfully."]);
  } else {
    wp_send_json_error(['message' => "No products data found."]);
  }

  die;
}

add_action('wp_ajax_nopriv_update_form_action', "handle_update_cart");
add_action('wp_ajax_update_form_action', "handle_update_cart");
