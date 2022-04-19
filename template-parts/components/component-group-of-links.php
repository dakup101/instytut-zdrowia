<?php
// FOR $args PASS ARRAY DIRECTLY FROM ACF
$args = wp_parse_args($args, null);
$links = $args;
if (!empty($links)) : ?>

<div class="group-of-links">
	<?php foreach ($links as $link) : ?>
	<a href="<?php echo $link['link']; ?>" class="group-of-links__item">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.27 109.43"><polygon points="186.22 109.43 254.27 54.72 186.22 0 186.22 30.81 0 30.81 0 78.62 186.22 78.62 186.22 109.43"/></svg>
		<span><?php echo $link['text']; ?></span>
	</a>
	<?php endforeach;?>
</div>

<?php endif; ?>