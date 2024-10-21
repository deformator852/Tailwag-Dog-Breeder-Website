<?php
// Template Name:Home
include_once "components/red_button/red_button.php";
include_once "home/ready_to_adopt.php";
include_once "home/best_for_your_pet.php";
include_once "components/best_for_pet_card/best_for_pet_card.php";
?>
<?php get_header() ?>
<main class="main">
    <div class="main__wrapper">
        <?php render_to_adopt_block(); ?>
        <?php render_best_for_your_pet_block(); ?>
    </div>
</main>
<?php get_footer() ?>