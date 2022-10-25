<?php get_header(); ?>
<?php get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID)); ?>
<div class="container-fluid">
    <div class="iz-container">
        <?php
        get_template_part('template-parts/single-offer/single-offer-section-1');
        get_template_part('template-parts/single-offer/single-offer-section-2');
        get_template_part('template-parts/single-offer/single-offer-additional');
        get_template_part('template-parts/components/component-offer-slider');
        ?>
    </div>
</div>
<?php get_footer(); ?>