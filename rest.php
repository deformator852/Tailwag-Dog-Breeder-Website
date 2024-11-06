<?php

class RestAPI
{
  public function __construct()
  {
    add_action('rest_api_init', function () {
      register_rest_route('tailwag/v1', '/delete-product/(?P<product_id>\d+)', array(
        'methods' => 'GET',
        'callback' => [$this, 'delete_product'],
        'permission_callback' => '__return_true'
      ));
    });
  }

  public function delete_product($data)
  {
    $product_id = (int)$data['product_id'];
    return new WP_REST_Response(['message' => 'Product deleted successfully'], 200);
  }
}

