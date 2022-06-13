<?php
$s2 = get_field('sekcja_o_nas_2');
$img_1 = $s2['img_1'];
$img_2 = $s2['img_2'];
$img_3 = $s2['img_3'];
$img_4 = $s2['img_4'];
$img_5 = $s2['img_5'];

$title = $s2['title'];
$title_2 = $s2['title_2'];
$title_3 = $s2['title_3'];
$text = $s2['text'];
$text_2 = $s2['text_2'];
$text_3 = $s2['text_3'];
$text_4 = $s2['text_4'];
?>
<section class="container-fluid mb-5 mt-5" id="oNas">
    <div class="iz-container">
        <div class="row gx-5 align-items-end">
            <div class="col-12 col-md-8">

                <?php
                $args = array(
                    'title'=>$title,
                    'wrapper_title' => 'h2',
                    'font_weight_title' => 'normal',
                );
                // GET TITLE
                get_template_part('template-parts/components/component-title-subtitle', null, $args);
                ?>
                <div class="row mx-0 gx-5">
                    <div class="col-12 col-md-6 ps-md-0">
                        <div class="text">
                            <?php echo $text ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pe-md-0">
                        <div class="text">
                            <?php echo $text_2 ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="<?php echo $img_1 ?>" alt="">
            </div>
        </div>
        <div class="row align-items-start gx-md-5 mt-5">
            <div class="col-12 col-md-4 text-center">
                <div class="img-with-logo">
                    <img src="<?php echo $img_2; ?>" alt="">
                    <img class="img-with-logo__down not-absolute" src="<?php echo get_template_directory_uri().'/assets/images/svg/half-horizontal.svg'; ?>" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <img class="w-100 mb-5" src="<?php echo $img_3 ?>" alt="">
                <?php
                $args = array(
                    'title'=>$title_2,
                    'wrapper_title' => 'h2',
                    'font_weight_title' => 'normal',
                );
                // GET TITLE
                get_template_part('template-parts/components/component-title-subtitle', null, $args);
                ?>
                <div class="text">
                    <?php echo $text_3 ?>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5 gx-5">
            <div class="col-12 col-md-6 ps-md-5 col-lg-6">
                <div class="section-2-content">
                    <div class="wrapper ps-md-5 ps-xxl-0">
                        <?php
                        // TITLE ARGS
                        $args = array(
                            'title'=>$title_3,
                            'wrapper_title' => 'h1',
                            'font_weight_title' => 'normal',
                        );
                        // GET TITLE
                        get_template_part('template-parts/components/component-title-subtitle', null, $args);
                        ?>

                        <?php
                        ?>
                        <div class="text">
                            <?php echo $text_4?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 section-2-imgs">
                <div class="col-img-wrapper mt-5">
                    <img src="<?php echo $img_4; ?>" alt="" class="col-img-wrapper__item">
                </div>
            </div>
            <div class="col-3 pe-md-0 section-2-imgs">
                <div class="col-img-wrapper mb-5">
                    <img src="<?php echo $img_5; ?>" alt="" class="col-img-wrapper__item">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
