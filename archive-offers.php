<?php get_header() ?>
<?php get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID)); ?>
<h1>CHUJ</h1>
<?php 
if ( have_posts() ) : 
while ( have_posts() ) : the_post(); 
?>

<?php the_title(); ?>

<?php   
endwhile; 
endif; 
?>

<?php get_footer() ?>