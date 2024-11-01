<?php get_header() ?>
<main class="main">
    <div class="main__wrapper">
        <?php get_header(); ?>
        <main class="main">
            <div class="main__wrapper">
                <?php
                // Start the loop to get the current post
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="acf-fields">
                            <p><strong>Name:</strong> <?php echo esc_html(get_field('name')); ?></p>
                            <p><strong>Gender:</strong> <?php echo esc_html(get_field('gender')); ?></p>
                            <p><strong>Neutered:</strong> <?php echo esc_html(get_field('neutered')); ?></p>
                            <p><strong>Age:</strong> <?php echo esc_html(get_field('age')); ?></p>
                            <p><strong>Breed:</strong> <?php echo esc_html(get_field('breed')); ?></p>
                            <p><strong>Vaccinated:</strong> <?php echo esc_html(get_field('vaccinated')); ?></p>
                            <p><strong>Size:</strong> <?php echo esc_html(get_field('size')); ?></p>
                            <p><strong>Brief
                                    Description:</strong> <?php echo esc_html(get_field('brief_description')); ?></p>
                            <p><strong>About:</strong> <?php echo esc_html(get_field('about')); ?></p>
                        </div>

                    <?php endwhile;
                else :
                    echo '<p>No content found</p>'; // Message if no post is found
                endif; ?>
            </div>
        </main>
        <?php get_footer(); ?>

    </div>
</main>
<?php get_footer() ?>
