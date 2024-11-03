<?php
function render_products()
{
  ?>
  <?php
  $products = wc_get_products(['limit' => -1, 'status' => 'publish']);
  $count_of_products = count($products);
  ?>
    <p class="count-products">Showing <?= $count_of_products ?> results</p>
    <div class="products-cards">
      <?php
      foreach ($products as $product) {
        $image = wp_get_attachment_url($product->get_image_id());
        $price = $product->get_price();
        $name = $product->get_name();
        $permalink = $product->get_permalink();
        product_card($image, $price, $name, $permalink);
      }
      ?>
    </div>
  <?php
}
