<footer class="footer">
    <div class="footer__logo">
        <img src="<?= get_template_directory_uri() . "/assets" . "/img" . "/footer-logo.png" ?>">
    </div>
    <div class="footer__contacts">
        <div class="footer__contact">
            <img class="footer__contact-img"
                 src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/footer-icon-1.png">
            <div class="footer__contact-text">
                <p>516 Columbia Blvd</p>
                <p>Sonoma, CA 21202</p>
            </div>
        </div>
        <div class="footer__contact">
            <img class="footer__contact-img"
                 src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/footer-icon-2.png">
            <div class="footer__contact-text">
                <p>Office: 772-619-6309</p>
                <p> Inquiries: 772-619-6432</p>
            </div>
        </div>
        <div class="footer__contact">
            <img class="footer__contact-img"
                 src="https://tailwag.progressionstudios.com/wp-content/uploads/2022/04/footer-icon-3.png">
            <div class="footer__contact-text">
                <p>Mon - Fri: 9am - 8pm</p>
                <p> Sat - Sun: Closed</p>
            </div>
        </div>
    </div>
    <div class="footer__menu">
        <?php wp_nav_menu(["theme location" => "footer-menu", "container" => "menu", "menu_class" => "footer__menu"]); ?>

    </div>
    <div class="footer__socials">
        <div class="footer__socials-wrapper">
            <p class="footer__copyright"> © Copyrights are Reserved by <a href="#">YourCompany.com</a></p>
            <ul>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fas fa-envelope"></i></li>
                <li><i class="fab fa-instagram"></i></li>
            </ul>
        </div>
    </div>
    <?php wp_footer() ?>
</footer>
</div>
</body>

</html>