<?php
//Template Name: FAQs
include_once "faqs/faqs.php";
?>

<?php get_header() ?>
<main class="main">
    <main class="main__wrapper">
        <?php render_faqs_block(); ?>
    </main>
</main>
<?php get_footer() ?>
