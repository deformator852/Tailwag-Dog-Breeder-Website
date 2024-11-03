<?php
//Template Name:Shop
include_once "shop/shop.php";
include_once "shop/products.php";
include_once "components/product_card/product_card.php";
?>
<?php
get_header();
?>
<main class="main">
    <div class="main__wrapper">
      <?php render_shop(); ?>
      <?php render_products(); ?>
    </div>
</main>
<?php get_footer() ?>
