<?php
$data = get_field('sekcja_1');
$title = $data['title'];
$text = $data['text'];
$img = $data['img'];
$btn_txt = $data['btn_text'];
$btn_link = $data['btn_link'];
$btn_global = get_field('offer_btn_1', 'options');
$btn_link_global = get_field('offer_link_1', 'options');
?>
<?php if ($title) : ?>
<section class="container-fluid mb-5">
    <div class="iz-container offer">
        <div class="row">
            <div class="col-12 col-md-5 gx-md-3">
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
                <a href="<?php echo !empty($btn_txt) ? $btn_link : $btn_link_global ?>" class="footer__contact-btn mt-5"
                    data-contact-modal>
                    <span
                        class="footer__contact-btn--text"><?php echo !empty($btn_txt) ? $btn_txt : $btn_global ?></span>
                </a>
            </div>
            <div class="col-12 offset-md-1 col-md-6">
                <?php if ($img): ?>
                <figure class="offer-figure h-100">
                    <img src="<?php echo $img ?>" alt="<?php echo get_the_title() ?>">
                </figure>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>