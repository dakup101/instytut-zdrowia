<?php
$args = wp_parse_args($args, array(
    'text' => '',
    'link' => '',
    'alt' => false,
    'brown' => false,
    'arrow' => false,
    'is_icon' => false,
    'icon' => ''
));
$text = $args['text'];
$link = $args['link'];
$alt = $args['alt'];
$brown = $args['brown'];
$arrow = $args['arrow'];
$is_icon = $args['is_icon'];
if ($is_icon) $icon = $args['icon'];
?>

<a href="<?php echo $link; ?>" class="iz-btn <?php echo $alt ? 'iz-btn__alt' : 'iz-btn__main' ?> <?php echo $brown ? 'iz-btn__brown' : '' ?>">
    <?php if ($is_icon) : ?>
        <img class="iz-btn__icon" src="<?php echo $icon?>" alt="Ikonka">
    <?php endif; ?>
    <span class="iz-btn__text"><?php echo $text; ?></span>
    <?php if ($arrow) : ?>
        <svg class="iz-btn__arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254.27 109.43"><defs><style>.b{fill:currentColor;}</style></defs><polygon class="b" points="186.22 109.43 254.27 54.72 186.22 0 186.22 30.81 0 30.81 0 78.62 186.22 78.62 186.22 109.43"/></svg>
    <?php endif; ?>
</a>
