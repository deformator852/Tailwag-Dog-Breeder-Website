<?php

function render_puppies_list()
{
    ?>
    <div class="puppies-list-block">
        <div class="puppies-list-block__filter">
            <ul>
                <li class="pro-checked" data-filter="*">
                    <div class="puppies-list-block__filter-element">All</div>
                </li>
                <li data-filter=".cats">
                    <div class="puppies-list-block__filter-element">Cats</div>
                </li>
                <li data-filter=".dogs">
                    <div class="puppies-list-block__filter-element">Dogs</div>
                </li>
                <li data-filter=".other">
                    <div class="puppies-list-block__filter-element">Other</div>
                </li>
            </ul>
        </div>
        <div class="puppies-list-block__elements">
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>
            <?php pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/twenty20_11401931-f092-4214-861c-c8ea63b45e67-800x600.jpg", "Charlie1", "Charlie is good on the lead and loves to go out for walks. He needs a leader who teaches him the basic rules.", "3mo"); ?>

        </div>
    </div>
    <?php
}
