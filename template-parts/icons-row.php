<?php
$content = get_field('icons_row');
$title_subtitle = $content['title_subtitle'];
$icons = $content['icons'];
?>

<section class="container-fluid icons-row pt-5">
	<div class="iz-container">
		<div class="text-center">
			<?php get_template_part('template-parts/components/component-title-subtitle', null, $title_subtitle); ?>
        </div>
        <div class="row mt-5 mb-3">
            <div class="col-10 offset-1">
                <div class="row gx-5">
		            <?php foreach ($icons as $icon) : ?>
                        <div class="col-12 col-md">
                            <div class="icons-row__column px-3">
                                <div class="icons-row__icon">
                                    <img src="<?php echo $icon['icon'] ?>" alt="Instytut Zdrowia">
                                </div>
                                <div class="icons-row__text text text-center">
						            <?php echo $icon['text']; ?>
                                </div>
                            </div>
                        </div>
		            <?php endforeach; ?>
                </div>
            </div>
        </div>
	</div>
    <div class="icons-row__lower-img">
        <img src="<?php echo get_template_directory_uri().'/assets/images/svg/half-horizontal.svg'?>" alt="Instytut Zdrowia - Logo-połówka">
    </div>
</section>
