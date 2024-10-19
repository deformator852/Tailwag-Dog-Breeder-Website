<?php
function render_red_button($text, $link, $width = "200px", $height = "48.5px")
{
?>
    <button class='red-button' style="width:<?= $width ?>; height:<?= $height ?>">
        <a href='<?= $link ?>'>
            <?= $text ?>
        </a>
        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
    </button>
<?php
}
