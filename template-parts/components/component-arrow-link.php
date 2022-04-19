<?php
$args = wp_parse_args($args, array(
	'text' => null,
	'link' => '#',
	'font_weight' => 'bold',
	'underline' => false
));

$text = $args['text'];
$link = $args['link'];
$font_weight = $args['font_weight'];
$underline = $args['underline'];
?>

<?php if (!empty($text)) : ?>
	<a href="<?php echo $link?>" class="arrow-link fw-<?php echo $font_weight; ?> <?php echo $underline ? 'underline' : ''?>">
		<span class="arrow-link__text"><?php echo $text ?></span>
		<svg class="arrow-link__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.27 109.43"><polygon points="186.22 109.43 254.27 54.72 186.22 0 186.22 30.81 0 30.81 0 78.62 186.22 78.62 186.22 109.43"/></svg>
	</a>
<?php endif; ?>