<?php
function render_best_for_your_pet_block()
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
