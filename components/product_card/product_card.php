<?php
function product_card($image_url, $price, $name, $permalink)
{
  ?>
    <div class="product-card">
        <a href="<?= $permalink ?>">
            <img src="<?= $image_url ?>" alt="">
        </a>
        <div class="product-card__information">
            <div class="product-card__information-container">
                <h2><?= $name ?></h2>
                <p>$<?= $price ?></p>
                <a href="<?= $permalink ?>" class="product-card__add-to-card-button">
                    <div>Add to cart</div>
                </a>
            </div>
        </div>
    </div>
  <?php
}
