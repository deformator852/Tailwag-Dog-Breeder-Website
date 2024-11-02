<?php include_once "components/red_button/red_button.php" ?>
<?php get_header() ?>
<main class="main">
    <div class="main__wrapper">
      <?php get_header(); ?>
        <main class="main">
            <div class="main__wrapper">
              <?php
              if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="single-pet">
                        <div class="single-pet__information">
                          <?= the_post_thumbnail($size = 'single-size', ['id' => 'single-pet__information-image']); ?>
                            <div class="single-pet__description">
                                <h2 class="single-pet__description-title">
                                    Meet <?= esc_html(get_field('name')); ?>
                                </h2>
                                <div class="single-pet__description-detail">
                                    <span><strong>Gender:</strong> <?= esc_html(get_field('gender')); ?></span>
                                    <span><strong>Neutered:</strong> <?= esc_html(get_field('neutered')); ?></span>
                                    <span><strong>Age:</strong> <?= esc_html(get_field('age')); ?></span>
                                    <span><strong>Breed:</strong> <?= esc_html(get_field('breed')); ?></span>
                                    <span><strong>Vaccinated:</strong> <?= esc_html(get_field('vaccinated')); ?></span>
                                    <span><strong>Size:</strong> <?= esc_html(get_field('size')); ?><span/>
                                </div>
                                <div class="single-pet__description-brief-description">
                                    <p><?= esc_html(get_field('brief_description')); ?></p>
                                </div>
                              <?php render_red_button("Apply Today", "link"); ?>
                            </div>
                        </div>
                        <div class="about">
                            <div class="about__container">
                                <h2>About <?= esc_html(get_field('name')); ?></h2>
                                <p class="about__text">
                                  <?= nl2br(esc_html(get_field('about'))); ?>
                                </p>
                            </div>
                        </div>
                        <div class="adoption-rules">
                            <div class="adoption-rules__container">
                                <h2 class="adoption-rules__title">
                                    <i class="fas fa-paperclip"></i>Adoption Rules
                                </h2>
                                <p class="adoption-rules__text"><?= esc_html(get_field('adoption_rules')) ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
              endif; ?>
            </div>
        </main>
      <?php get_footer(); ?>

    </div>
</main>
<?php get_footer() ?>
