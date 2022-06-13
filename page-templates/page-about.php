<?php
global $post;
//Template Name: O nas
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
get_template_part('template-parts/about/about-section-1');
get_template_part('template-parts/about/about-section-2');
get_footer();



