<?php
//Template Name: Services
include_once "components/red_button/red_button.php";
include_once "components/service_card/service_card.php";
include_once "services/services_list.php";
include_once "services/adopt_puppy.php";
include_once "components/about_block/about_block.php";

?>

<?php get_header(); ?>
    <main class="main">
        <main class="main__wrapper">
          <?php render_about_block("Services", "Dog Training & Breeding Professionals"); ?>
          <?php render_services_list_block(); ?>
          <?php render_adopt_puppy_block(); ?>
        </main>
    </main>
<?php get_footer(); ?>