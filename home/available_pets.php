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
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie2", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie3", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie4", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie5", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
        </div>
    </div>
    <?php
}
