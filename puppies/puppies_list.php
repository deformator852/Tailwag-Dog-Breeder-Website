<?php

function render_puppies_list()
{
    ?>
    <div class="puppies-list-block">
        <div class="puppies-list-block__filter">
            <ul>
                <li class="pro-checked" data-filter="all">
                    <div class="puppies-list-block__filter-element">All</div>
                </li>
                <li data-filter="cat">
                    <div class="puppies-list-block__filter-element">Cats</div>
                </li>
                <li data-filter="dog">
                    <div class="puppies-list-block__filter-element">Dogs</div>
                </li>
                <li data-filter="others">
                    <div class="puppies-list-block__filter-element">Other</div>
                </li>
            </ul>
        </div>
        <div class="puppies-list-block__elements">
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
                    $categories = get_the_category($post->ID);
                    $category_names = [];
                    $post_link = get_the_permalink($post->ID);
                    foreach ($categories as $category) {
                        $category_names[] = $category->name;
                    }
                    pet_card($thumbnail, $name, $description, $age, $post_link, $class = $category_names[1]);
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
    <?php
}
