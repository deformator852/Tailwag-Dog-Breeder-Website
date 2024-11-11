<?php

//Template Name: Checkout

include_once "components/about_block/about_block.php";

class RenderCheckOutPage
{
  public function __construct()
  {
    get_header();
    ?>
      <main class="main">
          <div class="main__wrapper">
            <?php
            render_about_block("Checkout");
            $this->customer_details();
            $this->your_order();
            $this->place_order();
            ?>
          </div>
      </main>
    <?php
    get_footer();
  }

  public function customer_details()
  {
    ?>
      <div class="customer-details">
          <div class="customer-details__wrapper">
              <form class="customer-details__form">
                  <div class="customer-details__billing-details">
                      <h3>Billing details</h3>
                      <div class="customer-details__billing-details-name">
                          <div class="field">
                              <label for="first-name">First Name</label>
                              <input id="first-name" name="first-name" type="text" required/>
                          </div>
                          <div class="field">
                              <label for="second-name">Second Name</label>
                              <input id="second-name" name="second-name" type="text" required/>
                          </div>
                      </div>
                      <div class="customer-details__company-name">
                          <label for="company-name">Company name (optional)</label>
                          <input id="company-name" name="company-name" type="text"/>
                      </div>
                      <div class="customer-details__country">
                        <?php $this->countries_select(); ?>
                      </div>
                      <div class="customer-details__street-address">
                          <label for="house-number">Street address</label>
                          <input id="house-number" name="house-number" type="text"
                                 placeholder="House number and street name"
                                 required/>
                          <input id="apartment" type="text" placeholder="Apartment, suite, unit, etc.(optional)"/>
                      </div>
                      <div class="customer-details__town">
                          <label for="town">Town / City / State</label>
                          <input id="town" name="town" type="text" required/>
                      </div>
                      <div class="customer-details__postcode">
                          <label for="postcode">Postcode / ZIP</label>
                          <input id="postcode" name="postcode" type="text" required/>
                      </div>
                      <div class="customer-details__phone">
                          <label for="phone">Phone</label>
                          <input id="phone" name="phone" type="text" required/>
                      </div>
                      <div class="customer-details__email">
                          <label for="email">Email address</label>
                          <input id="email" name="email" type="email" required/>
                      </div>
                  </div>
                  <div class="customer-details__additional-information">
                      <h3>Additional information</h3>
                      <label for="additional-information">Order notes (optional)</label>
                      <textarea id="additional-information" name="additional-information"
                                placeholder="Notes about your order" rows="5"></textarea>
                  </div>
              </form>
          </div>
      </div>
    <?php
  }

  public function countries_select()
  {
    $countries = WC()->countries->get_countries();
    echo '<label for="country-name">Country / Region</label>';
    echo '<select id="country-name" name="country-name" required>';
    foreach ($countries as $country_code => $country_name) {
      echo '<option value="' . esc_attr($country_code) . '">' . esc_html($country_name) . '</option>';
    }
    echo '</select>';
  }

  public function your_order()
  {
    ?>
      <div class="your-order">
          <div class="your-order__wrapper">
              <h2>Your order</h2>
              <table class="your-order__table">
                  <thead>
                  <tr>
                      <th class="product-name">Product</th>
                      <th class="product-total">Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $cart = WC()->cart->get_cart();
                  $products_total = 0;
                  foreach ($cart as $cart_item) {
                    $product = $cart_item['data'];
                    $product_name = $product->get_name();
                    $product_quantity = $cart_item['quantity'];
                    $product_total = $cart_item['line_total'];
                    $products_total += $product_total;
                    ?>
                      <tr>
                          <td class="product-name"><?= "$product_name" ?>
                              <span>× <?= $product_quantity ?></span>
                          </td>
                          <td class="product-total"><?= "$" . $product_total ?></td>
                      </tr>
                  <?php }
                  ?>
                  <tr class="order-total">
                      <td class="total">Total</td>
                      <td class="total-result">$<?= $products_total ?></td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
    <?php
  }

  public function place_order()
  {
    ?>
      <div class="place-order">
          <div class="place-order__wrapper">
              <p>Your personal data will be used to process your order, support your experience throughout this website,
                  and for other purposes described in our privacy policy.</p>
              <div class="place-order__button">
                  <a href="#">Place order</a>
              </div>
          </div>
      </div>
    <?php
  }
}

new RenderCheckOutPage();

?>