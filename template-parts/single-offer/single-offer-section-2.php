<?php
$data = get_field('sekcja_2');
$title = $data['title'];
$text = $data['text'];
$img = $data['img'];
?>
<section class="container-fluid mb-5">
    <div class="iz-container">
        <div class="row align-items-center gx-md-5">
            <div class="col-12 col-md-7">
                <?php
                // TITLE ARGS
                $args = array(
                    'title'=>$title,
                    'wrapper_title' => 'h1',
                    'font_weight_title' => 'normal',
                );
                // GET TITLE
                get_template_part('template-parts/components/component-title-subtitle', null, $args);
                ?>
                <div class="text">
                    <?php echo $text ?>
                </div>
                <a href="#" class="footer__contact-btn mt-5" data-contact-modal>
                    <img src="<?php echo get_home_url().'/wp-content/uploads/2022/04/calendar.svg'?>" alt="" class="footer__contact-btn--img">
                    <span class="footer__contact-btn--text">Zarezerwuj termin</span>
                </a>
            </div>
            <div class="col-12 offset-md-1 col-md-4 ">
                <img src="<?php echo $img ?>" alt="">
            </div>
        </div>
    </div>
</section>
