<?php
function render_available_pets()
{
    ?>
    <div class="available-pets"
         style="background-image:url('https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/bone-bg.png'); background-size:cover; background-position:center center">
        <div class="available-pets__content">
            <div class="available-pets__title">
                <div class="available-pets-line"></div>
                Available Pets
            </div>
            <h2 class="available-pets__sub-title">Featured Pets</h2>
        </div>
        <div class="featured-pets">
            <?php
            $args = [
                'category_name' => 'animal',
                'posts_per_page' => -1
            ];
            $posts = get_posts($args);
            if ($posts) {
                foreach ($posts as $post) {
                    setup_postdata($post);
                    $content = get_the_content();
                    $content_array = explode("age-", $content);
                    $name = get_the_title($post->ID);
                    $thumbnail = get_the_post_thumbnail_url($post->ID);
                    $description = $content_array[0];
                    $age = $content_array[1];
                    $post_link = get_the_permalink($post->ID);
                    pet_card($thumbnail, $name, $description, $age, $post_link);
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
    <?php
}
