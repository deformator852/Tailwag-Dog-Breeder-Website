<?php
function render_best_for_your_pet_block () {
    ?>
    <div class="best-for-your-pet">
        <div class="best-for-your-pet__cards">
            <?php best_for_pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon1.png","Grooming Services","Lorem ipsum dolor sit amet, consectetur adipiscing elit."); ?>
            <?php best_for_pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon2.png","Veterinary 24/7","Lorem ipsum dolor sit amet, consectetur adipiscing elit."); ?>
            <?php best_for_pet_card("https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/icon3.png","Fun Activities","Lorem ipsum dolor sit amet, consectetur adipiscing elit."); ?>
        </div>
    </div>
<?php
}