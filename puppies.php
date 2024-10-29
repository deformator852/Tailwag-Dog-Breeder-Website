<?php
//Template Name:Puppies
include_once "components/pet_card/pet_card.php";
include_once "components/red_button/red_button.php";
include_once "puppies/puppies.php";
include_once "puppies/puppies_list.php";
?>

<?php
get_header();
?>
<main class="main">
    <div class="main__wrapper">
        <?php render_puppies_block(); ?>
        <?php render_puppies_list(); ?>
    </div>
</main>

<?php
get_footer();
?>
