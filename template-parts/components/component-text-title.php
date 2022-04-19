<?php
$args = wp_parse_args($args, array(
	'title' => null,
	'font_weight' => 'normal',
	'underline' => false
));
$title = $args['title'];
$font_weight = $args['font_weight'];
$underline = $args['underline'];
?>

<?php if (!empty($title)) : ?>
<div class="text__title">
	<span
		class="text__title-title <?php echo $underline ? 'underline' : ''; ?> fw-<?php echo $font_weight; ?>"
	>
	<?php echo $title?></span>
</div>
<?php endif;?>
