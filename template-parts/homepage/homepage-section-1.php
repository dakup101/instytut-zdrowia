<?php
$s1 = get_field('homepage_hero');
$s1_img = $s1['img'];
$s1_title_subtitle = $s1['title_subtitle'];
$s1_text_big = $s1['text_big'];
$s1_text = $s1['text'];
$s1_btn_text = $s1['tekst_przycisku'];
$s1_btn_link = $s1['link'];
$s1_btn_settings = $s1['btn_settings'];
$s1_btn_iconed = $s1_btn_settings['icon'];
$s1_btn_alt = $s1_btn_settings['alt'];
$s1_btn_arrow = $s1_btn_settings['arrow'];
if ($s1_btn_iconed) $s1_btn_icon = $s1['ikonka_przycisku'];
?>

<section class="container-fluid mb-5" id="hero">
    <div class="iz-container">
        <div class="row">
            <div class="col col-12 col-md-7 pe-md-0" >
                <div class="image-wrapper column-image h-100" style="background-image: url('<?php echo $s1_img; ?>')">
                    <img src="<?php echo $s1_img; ?>" alt="">
                </div>
            </div>
            <div class="col col-12 col-md-5 half-column" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/svg/half.svg'?>')">
                <div class="wrapper ps-md-5 h-100 d-flex flex-column justify-content-center">
                    <?php
                    // TITLE ARGS
                    $args = array(
                        'title'=>$s1_title_subtitle['title'],
                        'subtitle'=>$s1_title_subtitle['subtitle'],
                        'wrapper_title' => 'h1',
                        'wrapper_subtitle' => 'h3',
                        'font_weight_title' => 'normal',
                        'font_weight_subtitle' => 'normal'
                    );
                    // GET TITLE
                    get_template_part('template-parts/components/component-title-subtitle', null, $args);
                    ?>
                    <div class="text text__bigger">
                        <p><?php echo $s1_text_big; ?></p>
                    </div>
                    <div class="text">
                        <?php echo $s1_text; ?>
                    </div>
                    <div class="mt-5">
                        <?php
                        // BUTTON ARGS
                        $args = array(
                            'text' => $s1_btn_text,
                            'link' => $s1_btn_link,
                            'alt' => $s1_btn_alt,
                            'arrow' => $s1_btn_arrow,
                            'is_icon' => $s1_btn_iconed
                        );
                        if ($s1_btn_iconed) $args['icon'] = $s1_btn_icon;
                        // GET BUTTON
                        get_template_part('template-parts/components/component-button', null, $args);
                        ?>
                    </div>
                    <a href="#oNas" class="link-to-right">
                        <span class="link-to-right__text">
                            <span class="number">01</span>
                            Instytut Zdrowia
                        </span>
                        <svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.27 109.43"><defs><style>.b{fill:currentColor;}</style></defs><polygon class="b" points="186.22 109.43 254.27 54.72 186.22 0 186.22 30.81 0 30.81 0 78.62 186.22 78.62 186.22 109.43"/></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
