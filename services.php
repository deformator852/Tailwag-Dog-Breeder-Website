<?php
//Template Name: Services
include_once "components/red_button/red_button.php";
include_once "components/service_card/service_card.php";
include_once "services/services_list.php";
include_once "services/adopt_puppy.php";
include_once "components/about_block/about_block.php";


class RenderServicesPage
{
  public function __construct()
  {
    get_header();
    ?>
      <main class="main">
          <div class="main__wrapper">
            <?php render_about_block("Services", "Dog Training & Breeding Professionals"); ?>
            <?php
            $this->render_services_list_block();
            $this->render_adopt_puppy_block();
            ?>
          </div>
      </main>
    <?php
    get_footer();
  }

  public function render_services_list_block()
  {
    ?>
      <div class="services-list">
        <?php service_card("Pet training", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis, pulvinar dapibus leo.", "https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon-1-1.png", "#"); ?>
        <?php service_card("Pet training", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis, pulvinar dapibus leo.", "https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon-2-1.png", "#"); ?>
        <?php service_card("Pet training", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis, pulvinar dapibus leo.", "https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon-3-1.png", "#"); ?>
        <?php service_card("Pet training", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis, pulvinar dapibus leo.", "https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon-4-1-1.png", "#"); ?>
        <?php service_card("Pet training", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis, pulvinar dapibus leo.", "https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon-5.png", "#"); ?>
        <?php service_card("Pet training", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis, pulvinar dapibus leo.", "https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon-6.png", "#"); ?>
      </div>
    <?php
  }

  public function render_adopt_puppy_block()
  {
    ?>
      <div class="adopt-puppy">
          <div class="adopt-puppy__content">
              <h2>Adopt a Puppy Today</h2>
              <div class="adopt-puppy__view">
                  <img src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/beagle-sitting-and-panting-isolated-on-white-URVM7PC.jpg"
                       alt="">
                <?php render_red_button("View puppies", "#") ?>
              </div>
          </div>
      </div>
    <?php
  }
}

new RenderServicesPage();
?>