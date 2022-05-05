<?php 
global $post;
//Template Name: Specjaliści 


get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>

<section class="specialists">

</section>

<?php get_footer(); ?>


