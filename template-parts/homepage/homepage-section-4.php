<?php
$content = get_field('sekcja_oferta_2');
$title_subtitle = $content['title_subtitle'];
$text = $content['text'];
$button = $content['button'];
$img_1 = $content['img_1'];
$img_2 = $content['img_2'];
?>
<section class="container-fluid mb-5" id="oNas">
    <div class="iz-container">
        <div class="row">
            <div class="col-6 col-xl-4 order-2 order-xl-1">
                <div class="col-img-wrapper mb-5 ">
                    <img src="<?php echo $img_1; ?>" alt="Instytut Zdrowia - Oferta" class="w-100 w-lg-auto">
                </div>
            </div>
            <div class="col-6 col-xl-4 order-3 order-xl-2">
                <div class="col-img-wrapper mt-5 ">
                    <img src="<?php echo $img_2; ?>" alt="Instytut Zdrowia - Oferta 2" class="w-100 w-lg-auto">
                </div>
            </div>
            <div class="col-12 col-xl-4 order-1 order-xl-3 mb-5 mb-xl-0">
                <div class="section-3-content h-100 d-flex flex-column justify-content-start mt-5">
                    <?php get_template_part('template-parts/components/component-title-subtitle', null, $title_subtitle); ?>
                    <div class="text">
                        <?php echo $text; ?>
                    </div>
                    <?php get_template_part('template-parts/components/component-button', null, $button); ?>
                </div>
            </div>
        </div>
    </div>
</section>