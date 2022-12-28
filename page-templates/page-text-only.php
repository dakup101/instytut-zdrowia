<?php
/* Template Name: Sam Tekst */
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>
<div class="iz-container">
    <?php echo get_field("content"); ?>
</div>
<style>
h1,
h2,
h3,
h4,
h5 {
    font-family: "Manrope", sans-serif;
    font-weight: 300;
    margin-bottom: 35px;
}
</style>
<?php
get_footer();