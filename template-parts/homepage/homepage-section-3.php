<?php
$content = get_field('sekcja_oferta');
$title_subtitle = $content['title_subtitle'];
$text = $content['text'];
$button = $content['button'];
$img_1 = $content['img_1'];
$img_2 = $content['img_2'];
?>
<section class="container-fluid mb-5" id="oNas">
	<div class="iz-container">
        <div class="row">
            <div class="col-4">
                <div class="section-3-content h-100 d-flex flex-column justify-content-center">
	                <?php get_template_part('template-parts/components/component-title-subtitle', null, $title_subtitle); ?>
                    <div class="text">
                        <?php echo $text; ?>
                    </div>
	                <?php get_template_part('template-parts/components/component-button', null, $button); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="col-img-wrapper mt-5">
                    <img src="<?php echo $img_1; ?>" alt="Instytut Zdrowia - Oferta">
                </div>
            </div>
            <div class="col-4">
                <div class="col-img-wrapper mb-5">
                    <img src="<?php echo $img_2; ?>" alt="Instytut Zdrowia - Oferta 2">
                </div>
            </div>
        </div>

	</div>
</section>
