<?php
function render_meet_our_pets_block()
{
    ?>
    <div class="puppies-for-adoption">
        <div class="puppies-for-adoption__content">
            <div class="puppies-for-adoption__title">
                <div class="puppies-for-adoption-line"></div>
                Meet Our Pets
            </div>
            <h2 class="puppies-for-adoption__sub-title">Puppies For Adoption</h2>
        </div>
        <div class="puppies-for-adoption__slider">
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
                    pet_card($thumbnail, $name, $description, $age);
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
    <?php
}