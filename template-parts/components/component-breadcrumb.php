<?php
$args = wp_parse_args($args, array(
	'post_id' => null,
));
$post_id = $args['post_id'];
$post = get_post($post_id);
$post_parrents = array_reverse(post_parents($post));

$offer_archive_id = 835;

function post_parents($post): array {
    $current_post = $post;
	$parents_array = array();
    while ($current_post->post_parent !==0){
	    $parent = get_post($current_post->post_parent);
	    $current_post = $parent;
	    array_push($parents_array, $parent->ID);
    }
    return $parents_array;
}
?>

<section class="container-fluid iz-breadcrumb">
    <div class="iz-container">
        <div class="iz-breadcrumb__wrapper">
            <a href="<?php echo get_home_url(); ?>" class="iz-breadcrumb__item">Strona Główna</a>
            <?php if ($post->post_type == "offers"):?>
            <a href="<?php echo get_permalink( get_post($offer_archive_id)) ?>"
                class="iz-breadcrumb__item"><?php echo get_the_title(get_post($offer_archive_id))?></a>
            <?php endif;?>
            <?php if (!empty($post_parrents)) : ?>
            <?php foreach ($post_parrents as $item) : ?>
            <?php
		            $item_post = get_post($item);
		            $name = $item_post->post_title;
		            $link = get_permalink($item_post);
		            ?>
            <a href="<?php echo $link; ?>" class="iz-breadcrumb__item"><?php echo $name; ?></a>
            <?php endforeach;?>
            <?php endif; ?>
            <a href="<?php echo get_permalink($post); ?>"
                class="iz-breadcrumb__item current"><?php echo $post->post_title; ?></a>
        </div>
    </div>
</section>