<?php
function pet_card($img, $name, $description, $age, $pet_link, $class = "")
{
    ?>
    <div class="pet-card <?= $class ?>">
        <a class="pet-card__image" href="<?= $pet_link ?>"><img src="<?= $img ?>" alt=""></a>
        <div class="pet-card__age"><?= $age ?></div>
        <div class="pet-card__description">
            <a href="<?= $pet_link ?>" class="pet-card__name"><p><?= $name ?></p></a>
            <p class="pet-card__text"><?= $description ?></p>
            <?php render_red_button("Learn more", $pet_link, width: "180px"); ?>
        </div>
    </div>
    <?php
}
