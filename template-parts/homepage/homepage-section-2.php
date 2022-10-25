<?php
$s2 = get_field('sekcja_o_nas');
$img_1 = $s2['img_1'];
$img_2 = $s2['img_2'];
$title = $s2['title'];
$text = $s2['text'];
$deeds_title = $s2['deeds_title'];
$deeds = $s2['deeds'];
$link = $s2['link']['link'];
$link_text = $s2['link']['text'];
?>
<section class="container-fluid mb-5" id="oNas">
    <div class="iz-container">
        <div class="row align-items-center">
            <div class="col-7 col-xl-4 section-2-imgs order-2 order-lg-1">
                <div class="col-img-wrapper mt-5">
                    <img src="<?php echo $img_1; ?>" alt="" class="col-img-wrapper__item">
                </div>
            </div>
            <div class="col-5 col-xl-3 pe-md-0 section-2-imgs order-3 order-lg-2">
                <div class="col-img-wrapper mb-5">
                    <img src="<?php echo $img_2; ?>" alt="" class="col-img-wrapper__item">
                </div>
            </div>
            <div class="col-12 col-xl-4 offset-0 offset-xl-1 mb-5 mb-lg-0 order-1 order-lg-3">
                <div class="section-2-content">
                    <div class="wrapper ps-0 ps-xl-5 ps-xxl-0">
                        <?php
                        // TITLE ARGS
                        $args = array(
                            'title'=>$title,
                            'wrapper_title' => 'h2',
                            'font_weight_title' => 'normal',
                        );
                        // GET TITLE
                        get_template_part('template-parts/components/component-title-subtitle', null, $args);
                        ?>

                        <?php
                        ?>
                        <div class="text">
                            <?php echo $text?>
                            <?php
                            // TEXT TITLE ARGS
                            $args = array(
                                'title' => $deeds_title,
                                'font_weight' => 'bold',
                                'underline' => true
                            );
                            // GET TEXT TITLE
                            get_template_part('template-parts/components/component-text-title', null, $args);
                            // GET GROUP OF LINKS
                            get_template_part('template-parts/components/component-group-of-links', null, $deeds);
                            // ARROW LINK ARGS
                            $args = array(
                                'text' => $link_text,
                                'link' => $link,
                                'font_weight' => 'bold',
                                'underline' => true
                            );
                            // GET ARROW LINKG
                            get_template_part('template-parts/components/component-arrow-link', null, $args);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>