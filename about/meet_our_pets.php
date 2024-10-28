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
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie2", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie3", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie4", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie5", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
        </div>
    </div>
    <?php
}