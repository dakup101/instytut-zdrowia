<?php
$args = array(
    'post_type' => 'offers',//it is a Page right?
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'orderby' => 'rand',
    // 'meta_query' => array(
    //     array(
    //         'key' => '_wp_page_template',
    //         'value' => 'page-templates/page-single-offer.php', // template name as stored in the dB
    //     )
    // )
);
$query = new WP_Query($args)
?>

<section class="mb-5">
    <div class="iz-container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-6">
                <?php
                // TITLE ARGS
                $args = array(
                    'title' => "W trosce<br>o Ciebie i Twoich<br>bliskich",
                    'wrapper_title' => 'h2',
                    'font_weight_title' => 'normal',
                );
                // GET TITLE
                get_template_part('template-parts/components/component-title-subtitle', null, $args);
                ?>
            </div>
        </div>
        <div class="offer-slider overflow-hidden mt-5">
            <div class="swiper-wrapper">
                <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) : $query->the_post() ?>
                <?php
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $post_excerpt = get_field('excerpt', $post_id);
                        $post_thumb = get_field('main_img', $post_id);
                        $post_link = get_the_permalink();
                        ?>
                <div class="swiper-slide">
                    <div class="row d-flex position-relative offer-slider__slide">
                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                            <a href="<?php echo $post_link ?>"
                                class="offer-slider__item d-flex flex-column align-items-center justify-content-center">
                                <div class="offer-slider__item--title">
                                    <?php echo $post_title ?>
                                </div>
                                <div class="offer-slider__item--excerpt">
                                    <?php echo $post_excerpt ?>
                                </div>
                                <div class="offer-slider__item--link">
                                    Przeczytaj więcej
                                </div>
                            </a>
                        </div>
                        <div class="col-10 col-md-8 offer-slider__bg">
                            <img src="<?php echo $post_thumb ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php endwhile;
                }
                ?>
            </div>
        </div>
    </div>

</section>