<?php
$data = get_field('part_3');
$title = $data['title_subtitle'];
$text = $data['text'];
$text_upper = $data['text_upper'];
$img = $data['img'];
$img2 = $data['img2']
?>
<section class="container-fluid mb-5 mt-5">
    <div class="iz-container">
        <div class="row align-items-center gx-md-5">
            <div class="col-12 col-md-4 text-center">
                <div class="img-with-logo">
                    <img src="<?php echo $img; ?>" alt="">
                    <img class="img-with-logo__down not-absolute" src="<?php echo get_template_directory_uri().'/assets/images/svg/half-horizontal.svg'; ?>" alt="">
                </div>
                <div class="text">
                    <?php $footer_contact = get_field('footer__contact', 'options'); ?>
                    <p>W przypadku pytań pozostajemy<br>do Państwa dyspozycji.</p>
                    <b><u>Pn-Pt 08:00-16:00</u></b>
                    <div class="footer__contact-links mt-3 text-center align-items-center justify-content-center">
                        <?php foreach ($footer_contact['icon_link'] as $link) : ?>
                            <a href="<?php echo $link['link']; ?>" class="footer__contact-link">
                                <img src="<?php echo $link['Icon']; ?>" alt="" class="footer__contact-link--icon">
                                <span class="footer__contact-link--text"><?php echo $link['text']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="#" class="footer__contact-btn mt-3" data-contact-modal>
                    <img src="<?php echo get_home_url().'/wp-content/uploads/2022/04/calendar.svg'?>" alt="" class="footer__contact-btn--img">
                    <span class="footer__contact-btn--text">Zarezerwuj termin</span>
                </a>
            </div>
            <div class="col-12 col-md-8">
                <div class="row mx-0 mb-5">
                    <div class="col-12 col-md-6 ms-md-0">
                        <img src="<?php echo $img2; ?>" alt="">
                    </div>
                    <div class="col-12 col-md-6 me-md-0 d-flex align-items-center">
                        <div class="text">
                            <?php echo $text_upper ?>
                        </div>
                    </div>
                </div>
                <?php get_template_part('template-parts/components/component-title-subtitle', null, $title); ?>
                <div class="text">
                    <?php echo $text; ?>
                </div>
            </div>
        </div>
    </div>
</section>
