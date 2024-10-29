<?php
function service_card($title, $text, $img, $link)
{
    ?>
    <a class="service-card" href="<?= $link ?>">
        <div class="service-card__container">
            <div class="service-image">
                <img src="<?= $img ?>" alt="">
            </div>
            <h2><?= $title ?></h2>
            <p><?= $text ?></p>
            <div class="plus-button">
                <i class="fas fa-plus"></i>
            </div>
        </div>
    </a>
    <?php
}
