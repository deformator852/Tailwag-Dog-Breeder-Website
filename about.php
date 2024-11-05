<?php
// Template Name: About
include_once "about/meet_our_pets.php";
include_once "about/want_pet.php";
include_once "components/red_button/red_button.php";
include_once "components/pet_card/pet_card.php";
include_once "components/about_block/about_block.php";
?>

<?php get_header() ?>
<main class="main">
    <main class="main__wrapper">
      <?php render_about_block("About", "Dog Training & Breeding Professionals"); ?>
      <?php render_meet_our_pets_block(); ?>
      <?php render_want_pet_block(); ?>
    </main>
</main>
<?php get_footer() ?>
