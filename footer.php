</main>
<footer>
    <div class="footer py-5">
        <div class="iz-container">
            <div class="footer__info-logo">
                <img src="<?php echo get_template_directory_uri().'/assets/images/logo_not_cropped.png'; ?>" alt="Instytut Zdrowia">
            </div>
            <div class="row">
                <div class="col-4">
	                <?php
	                $footer_info = get_field('footer_info', 'options');
	                ?>
                    <div class="footer__info">
                        <?php echo $footer_info['info']; ?>
                    </div>
                </div>
                <div class="col-2">

                </div>
                <div class="col-2">

                </div>
                <div class="col-4">
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
                            <img src="<?php echo $footer_contact['btn_icon'];?>" alt="" class="footer__contact-btn--img">
                            <span class="footer__contact-btn--text"><?php echo $footer_contact['btn_text']; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-2">

            </div>
            <div class="col-2">

            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
    <div class="site-overlay">
        <div id="overlayInfo" class="site-overlay__info">       
            <div class="site-overlay__info--text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="site-overlay__info--icon" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                </svg>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
</footer>
</body>
</html>