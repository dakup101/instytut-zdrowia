<?php
global $post;
//Template Name: Program Lojalnościowy
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
get_template_part('template-parts/prices/price-table-loyal');
get_template_part('template-parts/icons-row');
// get_template_part('template-parts/homepage/homepage-section-3');
// get_template_part('template-parts/homepage/homepage-section-4');
// get_template_part('template-parts/homepage/homepage-section-5');
get_footer();