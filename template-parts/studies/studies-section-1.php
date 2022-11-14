<?php
$data = get_field('part_1');
$title = $data['title_subtitle'];
$text = $data['text'];
$img = $data['img'];
?>
<section class="container-fluid mb-5">
    <div class="iz-container">
        <div class="row align-items-center gx-md-5">
            <div class="col-12 col-md-5 mb-5 mb-md-0">
                <?php get_template_part('template-parts/components/component-title-subtitle', null, $title); ?>
                <div class="text">
                    <?php echo $text; ?>
                </div>
                <a href="/zarezerwuj-termin" class="footer__contact-btn mt-5" data-contact-modal>
                    <img src="<?php echo get_home_url().'/wp-content/uploads/2022/04/calendar.svg'?>" alt=""
                        class="footer__contact-btn--img">
                    <span class="footer__contact-btn--text">Zarezerwuj termin</span>
                </a>
            </div>
            <div class="col-12 col-md-7">
                <img src="<?php echo $img; ?>" alt="" class="w-100 w-lg-auto">
            </div>
        </div>
    </div>
</section>