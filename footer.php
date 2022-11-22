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
    
    <?php wp_footer() ?>
</footer>
</body>

</html>