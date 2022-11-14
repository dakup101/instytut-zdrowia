<?php
/* Template Name: Zarezerwuj Termin */
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>
<div class="iz-container">
    <?php
get_template_part('template-parts/contact/contact-form'); ?>
</div>
<?php
get_footer();