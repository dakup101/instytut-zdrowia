</main>
<footer>
    <div class="footer py-5">
        <div class="iz-container">
            <div class="footer__info-logo">
                <img src="<?php echo get_template_directory_uri().'/assets/images/logo_not_cropped.png'; ?>"
                    alt="Instytut Zdrowia">
            </div>
            <div class="row">
                <div class="col-12 col-xl-4">
                    <?php
	                $footer_info = get_field('footer_info', 'options');
	                ?>
                    <div class="footer__info">
                        <?php echo $footer_info['info']; ?>
                    </div>
                </div>
                <div class="col-6 col-xl-2">
                    <strong class="mb-4 d-block">Menu</strong>
                    <div class="d-flex flex-column">
                        <?php
                    $menu = wp_get_menu_array('footer_menu_1')['menus'];
                    foreach ($menu as $el) :
                    ?>
                        <a style="text-decoration: none; color: #c4a57a;" class="mb-2"
                            href="<?php echo $el['url'] ?>"><?php echo $el['title'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-6 col-xl-2">
                    <strong class="mb-4 d-block">Ważne linki</strong>
                    <div class="d-flex flex-column">
                        <?php
                    $menu = wp_get_menu_array('footer_menu_2')['menus'];
                    foreach ($menu as $el) :
                    ?>
                        <a style="text-decoration: none; color: #c4a57a;" class="mb-2"
                            href="<?php echo $el['url'] ?>"><?php echo $el['title'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <?php
	                $footer_contact = get_field('footer__contact', 'options');
	                ?>
                    <div class="footer__contact">
                        <div class="text">
                            <?php echo $footer_contact['text']; ?>
                            <div class="footer__contact-links">
                                <?php foreach ($footer_contact['icon_link'] as $link) : ?>
                                <a href="<?php echo $link['link']; ?>" class="footer__contact-link">
                                    <img src="<?php echo $link['Icon']; ?>" alt="" class="footer__contact-link--icon">
                                    <span class="footer__contact-link--text"><?php echo $link['text']; ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <a href="<?php echo $footer_contact['btn_link']; ?>" class="footer__contact-btn">
                            <img src="<?php echo $footer_contact['btn_icon'];?>" alt=""
                                class="footer__contact-btn--img">
                            <span class="footer__contact-btn--text"><?php echo $footer_contact['btn_text']; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright pb-3" style="color: #8b8b8b; font-size: 13px;">
        <div class="iz-container">
            <div class="row">
                <div class="col-12 col-md-4 d-flex align-items-end">
                    WSZELKIE PRAWA ZASTRZEŻONE 2022 Instytut Zdrowia dr. Boczarska - Jedynak
                </div>
                <div class="col-12 col-md-2 d-flex align-items-end">

                </div>
                <div class="col-12 col-md-2 d-flex align-items-end">
                    Polityka Prywatności
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/evrwhr.svg' ?>" alt=""
                        style="width: 65px">
                </div>
            </div>
        </div>
    </div>
    <a class="contact-fixed" href="tel:+48794070701">
        <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
            <path
                d="M8.26 1.289l-1.564.772c-5.793 3.02 2.798 20.944 9.31 20.944.46 0 .904-.094 1.317-.284l1.542-.755-2.898-5.594-1.54.754c-.181.087-.384.134-.597.134-2.561 0-6.841-8.204-4.241-9.596l1.546-.763-2.875-5.612zm7.746 22.711c-5.68 0-12.221-11.114-12.221-17.832 0-2.419.833-4.146 2.457-4.992l2.382-1.176 3.857 7.347-2.437 1.201c-1.439.772 2.409 8.424 3.956 7.68l2.399-1.179 3.816 7.36s-2.36 1.162-2.476 1.215c-.547.251-1.129.376-1.733.376" />
        </svg>
    </a>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/cookies/divante.cookies.min.js">
</script>
<script>
window.jQuery.cookie || document.write(
    '<script src="<?php echo get_template_directory_uri(); ?>/assets/cookies/jquery.cookie.min.js"><\/script>')
</script>
<script>
jQuery(function($) {
    console.log($)
    $.divanteCookies.render({
        privacyPolicy: true,
    });
});
</script>
<?php wp_footer() ?>
</body>

</html>