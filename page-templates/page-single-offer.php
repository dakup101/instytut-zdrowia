<?php
global $post;
//Template Name: Pojedyncza oferta
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
get_template_part('template-parts/single-offer/single-offer-section-1');
get_template_part('template-parts/single-offer/single-offer-section-2');
get_template_part('template-parts/components/component-offer-slider');
get_footer();



