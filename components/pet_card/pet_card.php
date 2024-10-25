<?php
function pet_card($img, $name, $description, $age)
{
    ?>
    <div class="pet-card">
        <a class="pet-card__image" href="#"><img src="<?= $img ?>" alt=""></a>
        <div class="pet-card__age"><?= $age ?></div>
        <div class="pet-card__description">
            <a href="#" class="pet-card__name"><p><?= $name ?></p></a>
            <p class="pet-card__text"><?= $description ?></p>
            <?php render_red_button("Learn more", "#", width: "180px"); ?>
        </div>
    </div>
    <?php
}
