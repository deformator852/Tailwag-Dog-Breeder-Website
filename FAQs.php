<?php
//Template Name: FAQs
include_once "faqs/faqs.php";
include_once "faqs/questions.php";
include_once "faqs/more_questions.php";
?>

<?php get_header() ?>
<main class="main">
    <div class="main__wrapper">
        <?php render_faqs_block(); ?>
        <?php render_questions_block(); ?>
        <?php render_more_questions_block(); ?>
    </div>
</main>
<?php get_footer() ?>
