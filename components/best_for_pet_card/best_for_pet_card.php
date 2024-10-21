<?php
function best_for_pet_card($img_url,$title,$text){
    ?>
    <div class="best-for-your-pet__card">
        <div class="best-for-your-pet__card-image"><img src="<?= $img_url ?> " alt="img"/></div>
        <div class="best-for-your-pert__card-description">
            <p class="best-for-your-pet__card-title"><?= $title ?></p>
            <p class="best-for-your-pet__card-text"><?= $text ?></p>
        </div>
    </div>
<?php
}