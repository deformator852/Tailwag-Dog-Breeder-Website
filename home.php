<?php
// Template Name:Home
include_once "components/red_button/red_button.php";
include_once "components/best_for_pet_card/best_for_pet_card.php";
include_once "components/pet_card/pet_card.php";
// include_once "home/ready_to_adopt.php";
// include_once "home/best_for_your_pet.php";
// include_once "home/want_pet.php";
// include_once "home/take_care_pets.php";
include_once "home/available_pets.php";

class RenderHomePage
{
    public function __construct()
    {
        get_header();
?>
        <main class="main">
            <div class="main__wrapper">
                <?php
                $this->render_to_adopt_block();
                $this->render_best_for_your_pet_block();
                $this->render_want_pet_block();
                $this->render_take_care_pets_block();
                $this->render_available_pets_block();
                ?>
            </div>
        </main>
    <?php
        get_footer();
    }

    public function render_available_pets_block()
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
    public function render_take_care_pets_block()
    {
    ?>
        <div class="take-care-pets">
            <div class="take-care-pets__title">
                <div class="take-care-line"></div>
                Our Services
            </div>
            <h2 class="take-care-pets__sub-title">Taking Care of Pets</h2>
            <img src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/diagram.png" alt="" width="800" height="432">
        </div>
    <?php
    }
    public function render_to_adopt_block()
    {
    ?>
        <div class="ready-to-adopt" style="background-image:url(<?= get_template_directory_uri() . "/assets" . "/img" . "/ready-to-adopt.jpg" ?>); background-size:cover; background-position:center center">
            <div class="ready-to-adopt__wrapper">
                <div class="ready-to-adopt__content">
                    <div class="ready-to-adopt__content-wrapper" style="display:none;">
                        <h2>Ready to Adopt!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,<br> luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <?php render_red_button("View Puppies", "#") ?>
                    </div>
                </div>
            </div>
            <div class="ready-to-adopt__bottom-wave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
                    <path class="shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path>
                    <path class="shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z"></path>
                    <path class="shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z"></path>
                    <path class="shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z"></path>
                    <path class="shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z"></path>
                    <path class="shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z"></path>
                    <path class="shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path>
                    <path class="shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z"></path>
                    <path class="shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z"></path>
                </svg>
            </div>
        </div>
    <?php
    }

    public function render_best_for_your_pet_block()
    {
    ?>
        <div class="best-for-your-pet">
            <div class="best-for-your-pet__cards">
                <?php best_for_pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon1.png", "Grooming Services", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."); ?>
                <?php best_for_pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon2.png", "Veterinary 24/7", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."); ?>
                <?php best_for_pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon3.png", "Fun Activities", "Lorem ipsum dolor sit amet, consectetur adipiscing elit."); ?>
            </div>
            <div class="best-for-your-pet__about">
                <div class="best-for-your-pet__about-image"><img src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/dog-P228UWM.jpg" alt=""></div>
                <div style="padding:20px 10px 10px 45px;">
                    <div class="best-for-your-pet__about-title">
                        <div class="about-us-line"></div>
                        About us
                    </div>
                    <h2 class="best-for-your-pet__about-sub-title">The Best for Your Pet!</h2>
                    <p class="best-for-your-pet__about-description-first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <p class="best-for-your-pet__about-description-second">Eam ad sale persius, id vis iudicabit cor rumpit. Usu ad modo illum assum.</p>
                    <ul>
                        <li><i class="fas fa-bone"></i>Lorem ipsum dolor sit amet, consectetur</li>
                        <li><i class="fas fa-bone"></i>No delenit detracto eum, vix ne integre taci</li>
                        <li><i class="fas fa-bone"></i>An pro facete dicuntei ut epicuri</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    <?php
    }

    public function render_want_pet_block()
    {
    ?>
        <div class="want-pet" style="background-image:url('https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/guy-holding-smiling-puppy_t20_JaNme9.jpg'); background-size:cover; background-position:center center">
            <div class="want-pet__content">
                <h2 class="want-pet__content-title">Want a pet for your loved ones?</h2>
                <p class="want-pet__content-text">Elit sanctus mea no. Ne duo vocent vocibus consetetur. Singulis etam pericula an vis, pri graeco partiendo te, alii admodum copiosae id sea. Per no malis liber fierent.</p>
                <?php render_red_button("Apply Today", "#", "181px", "44.5px"); ?>
            </div>
        </div>
<?php
    }
}
new RenderHomePage();
?>