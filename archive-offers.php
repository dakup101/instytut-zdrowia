<?php get_header() ?>
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