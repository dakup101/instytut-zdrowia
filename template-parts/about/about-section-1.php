<?php
$s2 = get_field('sekcja_o_nas');
$img_1 = $s2['img_1'];
$img_2 = $s2['img_2'];
$title = $s2['title'];
$text = $s2['text'];
?>
<section class="container-fluid mb-5" id="oNas">
    <div class="iz-container">
        <div class="row align-items-center">
            <div class="col-4 section-2-imgs">
                <div class="col-img-wrapper mt-5">
                    <img src="<?php echo $img_1; ?>" alt="" class="col-img-wrapper__item">
                </div>
            </div>
            <div class="col-3 pe-md-0 section-2-imgs">
                <div class="col-img-wrapper mb-5">
                    <img src="<?php echo $img_2; ?>" alt="" class="col-img-wrapper__item">
                </div>
            </div>
            <div class="col-12 col-md-6 ps-md-5 col-lg-5">
                <div class="section-2-content">
                    <div class="wrapper ps-md-5 ps-xxl-0">
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

                        <?php
                        ?>
                        <div class="text">
                            <?php echo $text?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
