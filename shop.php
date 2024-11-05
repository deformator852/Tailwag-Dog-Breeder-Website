<?php
//Template Name:Shop
include_once "components/about_block/about_block.php";
include_once "shop/products.php";
include_once "components/product_card/product_card.php";
?>
<?php
get_header();
?>
<main class="main">
    <div class="main__wrapper">
      <?php render_about_block("Shop", "Products to Take Care of Your Pets"); ?>
      <?php render_products(); ?>
    </div>
</main>
<?php get_footer() ?>
