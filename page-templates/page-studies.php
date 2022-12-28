<?php
global $post;
//Template Name: Badanie Kliniczne
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
get_template_part('template-parts/studies/studies-section-1');
get_template_part('template-parts/studies/studies-section-2');
get_template_part('template-parts/icons-row');
get_template_part('template-parts/studies/studies-section-3');

$people_field = get_field('people', $post->ID);
$people = $people_field['person'];
if (!empty($people)): 
?>
<h2 class="title-subtitle__title fw-normal text-center mb-5 pb-5">Skontaktuj się z nami</h2>
<?php 
get_template_part('template-parts/contact/contact-people'); 
endif; 
?>
get_footer();