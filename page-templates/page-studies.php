<?php
global $post;
//Template Name: Badanie Kliniczne
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
get_template_part('template-parts/studies/studies-section-1');
get_template_part('template-parts/studies/studies-section-2');
get_template_part('template-parts/icons-row');
get_template_part('template-parts/studies/studies-section-3');
get_footer();



