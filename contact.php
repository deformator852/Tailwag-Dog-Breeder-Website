<?php
//Template Name: Contact
?>

<?php get_header(); ?>
<main class="main">
    <main class="main__wrapper">
        <div class="contact">
            <div class="contact__info">
                <h2 class="contact__title">Send us a Message</h2>
                <div class="contact__info-underline"></div>
                <p class="contact__description">There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered
                    alteration in some form, by injected humour, or randomised words which don’t look even slightly
                    believable.</p>
                <div class="contact__socials">
                    <div class="contact__social">
                        <div class="contact__social-image">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="contact__social-text">
                            <p> Call Anytime </p>
                            <p> (800) 123-45789</p>
                        </div>
                    </div>
                    <div class="contact__social">
                        <div class="contact__social-image">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="contact__social-text">
                            <p> Write Email </p>
                            <p> help@yourcompany.com</p>
                        </div>
                    </div>
                    <div class="contact__social">
                        <div class="contact__social-image">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact__social-text">
                            <p> Visit Office </p>
                            <p> 214 Golden Street Round Road New York, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact__form"
                 style="background-image:url('https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/bone-bg.png')">
                <form>
                    <input class="contact__form-name" type="text" name="name" placeholder="Your Name">
                    <input class="contact__form-email" type="email" name="email" placeholder="Your Email">
                    <input class="contact__form-subject" type="text" name="subject" placeholder="Your Subject">
                    <input class="contact__form-phone" type="text" name="phone-number"
                           placeholder="Your Phone Number">
                    <textarea class="contact__form-message" type="text" placeholder="Your Message"></textarea>
                    <button type="submit">Send a message</button>
                </form>
            </div>
        </div>
        <div class="map">
            <?= do_shortcode('[wpgmza id="1"]') ?>
        </div>
    </main>
</main>
<?php get_footer() ?>
