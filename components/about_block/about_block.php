<?php
function render_about_block($title, $sub_title = "")
{
  ?>
    <div class="about"
         style="background-image:url('https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/portrait-of-woman-with-dog-welsh-corgi-pembroke-in-FGH6B9Y-1.jpg');background-size:cover; background-position:center center;">
        <div class="about__content">
            <h1><?= $title ?></h1>
            <p><?= $sub_title ?></p>
        </div>
    </div>
  <?php
}