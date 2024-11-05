<?php
//Template Name:Puppies
include_once "components/pet_card/pet_card.php";
include_once "components/red_button/red_button.php";
include_once "puppies/puppies_list.php";
include_once "components/about_block/about_block.php";
?>

<?php
get_header();
?>
<main class="main">
    <div class="main__wrapper">
      <?php render_about_block("Puppies", "Dog Training & Breeding Professionals"); ?>
      <?php render_puppies_list(); ?>
    </div>
</main>

<?php
get_footer();
?>
