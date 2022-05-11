<?php
/* Template Name: Kontakt */
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>
<h1 class="title-subtitle__title fw-normal text-center mb-5">Skontaktuj się z nami</h1>
<?php
get_template_part('template-parts/contact/contact-people');
get_template_part('template-parts/contact/contact-map-section');
get_template_part('template-parts/contact/contact-form');
get_footer();

