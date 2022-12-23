<?php get_header(); ?>
<?php get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID)); ?>
<div class="container-fluid">
    <div class="iz-container">
        <?php
        get_template_part('template-parts/single-offer/single-offer-section-1');
        get_template_part('template-parts/single-offer/single-offer-section-2');
        get_template_part('template-parts/single-offer/single-offer-additional');
        ?>
        <section class="container-fluid mb-5">
            <div class="iz-container offer">
                <?php
                $args = array(
                    'title'=> get_field("offer_end_title", "options"),
                    'wrapper_title' => 'h2',
                    'font_weight_title' => 'normal',
                );
                get_template_part('template-parts/components/component-title-subtitle', null, $args);
                ?>
                <div class="text">
                    <?php echo get_field("offer_end_content", "options") ?>
                </div>
                <a href="<?php echo get_field("offer_end_link") ?>" class="footer__contact-btn mt-5" data-contact-modal>
                    <span class="footer__contact-btn--text">
                        <?php echo get_field("offer_end_btn", "options") ?>
                    </span>
                </a>
            </div>
        </section>
        <?php
        get_template_part('template-parts/components/component-offer-slider');
        ?>
    </div>
</div>
<?php get_footer(); ?>