<?php
if (isset($_POST['add-to-cart'])) {
  $product_id = intval(sanitize_text_field($_POST['product-id']));
  $product_count = intval(sanitize_text_field($_POST['product-count']));
  $added = WC()->cart->add_to_cart($product_id, $product_count);
  if ($added) {
    wp_redirect(wc_get_cart_url());
    exit;
  }
}

include_once "components/red_button/red_button.php";
include_once "components/about_block/about_block.php";

class RenderSinglePage
{
  public function __construct()
  {
    get_header();
    if (!is_singular("product")) {
      $this->render_pet_single();
    } else {
      $this->render_product_single();
    }
    get_footer();
  }

  public function render_product_single()
  {
    $product = wc_get_product(get_the_ID());
?>
    <main class="main">
      <div class="main__wrapper">
        <div class="single-product">
          <?php render_about_block($product->get_name()); ?>
          <div class="single-product__information">
            <div class="single-product__information-container">
              <div class="single-product__img">
                <img src="<?= wp_get_attachment_url($product->get_image_id()); ?>" alt="">
              </div>
              <div class="single-product__detail">
                <p class="single-product__price">
                  $<?= esc_html($product->get_price()); ?>
                </p>
                <div class="divider"></div>
                <p class="single-product__brief-description">
                  <?= esc_html($product->get_short_description()); ?>
                </p>
                <div class="single-product__add-to-cart">
                  <form method="POST" action="">
                    <input type="number" name="product-count" value="1">
                    <input type="hidden" name="product-id" value="<?= esc_attr($product->get_id()); ?>" />
                    <button type="submit" name="add-to-cart">Add to cart</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="single-product__description">
              <div class="single-product__description-container">
                <h2>Description</h2>
                <p><?= nl2br(esc_html($product->get_description())); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  <?php
  }

  public function render_pet_single()
  {
  ?>
    <main class="main">
      <div class="main__wrapper">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="single-pet">
              <div class="single-pet__information">
                <?php the_post_thumbnail('single-size', ['id' => 'single-pet__information-image']); ?>
                <div class="single-pet__description">
                  <h2 class="single-pet__description-title">
                    Meet <?= esc_html(get_field('name')); ?>
                  </h2>
                  <div class="single-pet__description-detail">
                    <span><strong>Gender:</strong> <?= esc_html(get_field('gender')); ?></span>
                    <span><strong>Neutered:</strong> <?= esc_html(get_field('neutered')); ?></span>
                    <span><strong>Age:</strong> <?= esc_html(get_field('age')); ?></span>
                    <span><strong>Breed:</strong> <?= esc_html(get_field('breed')); ?></span>
                    <span><strong>Vaccinated:</strong> <?= esc_html(get_field('vaccinated')); ?></span>
                    <span><strong>Size:</strong> <?= esc_html(get_field('size')); ?></span>
                  </div>
                  <div class="single-pet__description-brief-description">
                    <p><?= esc_html(get_field('brief_description')); ?></p>
                  </div>
                  <?php render_red_button("Apply Today", "link"); ?>
                </div>
              </div>
              <div class="about">
                <div class="about__container">
                  <h2>About <?= esc_html(get_field('name')); ?></h2>
                  <p class="about__text">
                    <?= nl2br(esc_html(get_field('about'))); ?>
                  </p>
                </div>
              </div>
              <div class="adoption-rules">
                <div class="adoption-rules__container">
                  <h2 class="adoption-rules__title">
                    <i class="fas fa-paperclip"></i>Adoption Rules
                  </h2>
                  <p class="adoption-rules__text"><?= esc_html(get_field('adoption_rules')); ?></p>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </main>
<?php
  }
}

new RenderSinglePage();
?>