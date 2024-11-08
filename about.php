<?php
// Template Name: About
include_once "components/red_button/red_button.php";
include_once "components/pet_card/pet_card.php";
include_once "components/about_block/about_block.php";

class RenderAboutPage
{
  public function __construct()
  {
    get_header();
    ?>
    <main class="main">
      <div class="main__wrapper">
        <?php
        render_about_block("About", sub_title: "Dog Training & Breeding Professionals");
        $this->render_meet_our_pets_block();
        $this->render_want_pet_block();
        ?>
      </div>
    </main>
    <?php
    get_footer();
  }

  public function render_meet_our_pets_block(): void
  {
    ?>
    <div class="puppies-for-adoption">
      <div class="puppies-for-adoption__content">
        <div class="puppies-for-adoption__title">
          <div class="puppies-for-adoption-line"></div>
          Meet Our Pets
        </div>
        <h2 class="puppies-for-adoption__sub-title">Puppies For Adoption</h2>
      </div>
      <div class="puppies-for-adoption__slider">
        <?php
        $args = [
          'category_name' => 'animal',
          'posts_per_page' => -1
        ];
        $posts = get_posts($args);
        if ($posts) {
          foreach ($posts as $post) {
            setup_postdata($post);
            $content = get_the_content();
            $content_array = explode("age-", $content);
            $name = get_the_title($post->ID);
            $thumbnail = get_the_post_thumbnail_url($post->ID);
            $description = $content_array[0];
            $age = $content_array[1];
            $permalink = get_the_permalink();
            pet_card($thumbnail, $name, $description, $age, $permalink);
          }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
    <?php
  }

  public function render_want_pet_block(): void
  {
    ?>
    <div class="want-pet"
         style="background-image:url('https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_833aaa3b-b42a-4059-962a-87bfe32744aa.jpg');background-size:cover; background-position:center center;">
      <div class="want-pet__content">
        <h2>Want a pet for your loved ones?</h2>
        <p>Elit sanctus mea no. Ne duo vocent vocibus consetetur. Singulis etam pericula an vis, pri graeco
          partiendo te, alii admodum copiosae id sea. Per no malis liber fierent.</p>
        <?php render_red_button("Apply Today", "contact"); ?>
      </div>
    </div>
    <?php
  }
}

new RenderAboutPage();
?>
