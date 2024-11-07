<?php
//Template Name:Shop
include_once "components/about_block/about_block.php";
include_once "components/product_card/product_card.php";

class RenderShopPage
{
  public function __construct()
  {
    get_header();
?>
    <main class="main">
      <div class="main__wrapper">
        <?php
        render_about_block("Shop", "Products to Take Care of Your Pets");
        $this->render_products_block();
        ?>
      </div>
    </main>
  <?php
    get_footer();
  }
  public function render_products_block()
  {
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
}
new RenderShopPage();
?>