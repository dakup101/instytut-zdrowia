<?php
// Catch variable from get_template_part();
$args = wp_parse_args($args, array(
        'title' => null,
        'subtitle' => null,
        'wrapper_title' => null,
        'wrapper_subtitle' => null,
        'font_weight_title' => null,
        'font_weight_subtitle' => null,
        'underline' => false,
        'class' => null
    )
);
// Parsed values
// -- Title / Tag
$title = $args['title'];
$wrapper_title = $args['wrapper_title'];
// -- Subtitle / Tag
$subtitle = $args['subtitle'];
$wrapper_subtitle = $args['wrapper_subtitle'];
// -- Cosmetics
$font_weight_title = $args['font_weight_title'];
$font_weight_subtitle = $args['font_weight_subtitle'];
$underline = $args['underline'];
// -- Additional Classes
$class = $args['class'];
?>

<?php if (!empty($title) || !empty($subtitle)) : ?>
<div class="title-subtitle <?php if (!empty($class)) echo $class ?> <?php echo $underline ? 'title-subtitle__underline' : '' ?>">
    <?php if (!empty($subtitle)) : ?>
        <<?php echo $wrapper_subtitle; ?> class="title-subtitle__sub <?php echo 'fw-'.$font_weight_subtitle?>"><?php echo $subtitle; ?></<?php echo $wrapper_subtitle; ?>>
    <?php endif; ?>
	<?php if (!empty($title)) : ?>
        <<?php echo $wrapper_title; ?> class="title-subtitle__title <?php echo 'fw-'.$font_weight_title?>"><?php echo $title; ?></<?php echo $wrapper_title; ?>>
	<?php endif; ?>
</div>
<?php endif;?>

