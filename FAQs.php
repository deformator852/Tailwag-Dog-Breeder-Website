<?php
//Template Name: FAQs
include_once "faqs/questions.php";
include_once "faqs/more_questions.php";
include_once "components/about_block/about_block.php";
?>

<?php get_header() ?>
<main class="main">
    <div class="main__wrapper">
      <?php render_about_block("FAQs", "Dog Training & Breeding Professionals"); ?>
      <?php render_questions_block(); ?>
      <?php render_more_questions_block(); ?>
    </div>
</main>
<?php get_footer() ?>
