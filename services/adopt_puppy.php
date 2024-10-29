<?php
function render_adopt_puppy_block()
{
    ?>
    <div class="adopt-puppy">
        <div class="adopt-puppy__content">
            <h2>Adopt a Puppy Today</h2>
            <div class="adopt-puppy__view">
                <img src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/beagle-sitting-and-panting-isolated-on-white-URVM7PC.jpg"
                     alt="">
                <?php render_red_button("View puppies", "#") ?>
            </div>
        </div>
    </div>
    <?php
}