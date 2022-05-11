<?php
$content = get_field('map_section');
$text = $content['text'];
$button = $content['button'];
$map = $content['map'];
$img_2 = $content['img_2'];
?>
<section class="container-fluid contact-map pt-5 mt-5 mb-5" id="mapSection">
	<div class="iz-container">
        <div class="row">
            <div class="col-4">
                <div class="section-3-content h-100 d-flex flex-column justify-content-center">
                    <div class="text mb-4">
                        <?php echo $text; ?>
                    </div>
	                <?php get_template_part('template-parts/components/component-button', null, $button); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="contact-map__map pt-5">
                    <?php echo $map; ?>
                </div>
            </div>
            <div class="col-4">
                <div class="col-img-wrapper overflow-visible mb-5 img-with-logo">
                    <img src="<?php echo $img_2; ?>" alt="Instytut Zdrowia - Oferta 2">
                    <img class="img-with-logo__down" src="<?php echo get_template_directory_uri().'/assets/images/svg/half-horizontal.svg'; ?>" alt="">
                </div>
            </div>
        </div>

	</div>
</section>
