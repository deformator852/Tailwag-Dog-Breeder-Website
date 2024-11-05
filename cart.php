<?php
//Template Name: Cart
include_once "components/about_block/about_block.php";
?>
<?php get_header(); ?>
<main class="main">
    <div class="main__wrapper">
        <div class="cart">
          <?php render_about_block("Cart"); ?>
            <div class="cart__wrapper">
                <table class="cart__table" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="product-remove"></th>
                        <th class="product-thumbnail"></th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $cart = WC()->cart->get_cart();

                    foreach ($cart as $cart_item) {
                      $product = $cart_item['data'];
                      $product_name = $product->get_name();
                      $product_quantity = $cart_item['quantity'];
                      $product_price = $product->get_price();
                      $thumbnail_id = get_post_thumbnail_id($product->get_id());
                      $permalink = $product->get_permalink();
                      $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'woocommerce_thumbnail');
                      ?>
                        <tr>
                            <td class="product-remove"><a href="removeitem">x</a></td>
                            <td class="product-thumbnail"><img src="<?= $thumbnail_url ?>"/></td>
                            <td class="product-name">
                                <a href="<?= $permalink ?>">
                                  <?= $product_name ?>
                                </a>
                            </td>
                            <td class="product-price">$<?= $product_price ?></td>
                            <td class="product-quantity">
                                <input type="number" value="<?= $product_quantity ?>"/>
                            </td>
                            <td class="product-subtotal">$<?= $product_quantity * $product_price ?></td>
                        </tr>
                      <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
