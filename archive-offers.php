<?php get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID)); ?>
<div class="container-fluid">
    <div class="iz-container offer-loop">
        <?php get_template_part('template-parts/components/component-title-subtitle', null, array(
            'title'=>get_the_title($post),
            'wrapper_title' => 'h1',
            'font_weight_title' => 'bold',
        ));?>

        <?php  $categories = get_terms( array(
            'taxonomy' => 'offer_category',
            'orderby' => 'term_order',
            'hide_empty' => true,
        ));?>
        <?php foreach ($categories as $category) : ?>
        <h2 class="offer-loop__title"><?php echo $category->name; ?></h2>
        <?php $offers = get_posts(array(
                    'post_type' => 'offers',
                    'numberposts' => -1,
                    'tax_query' => array(
                    array(
                        'taxonomy' => 'offer_category',
                        'field' => 'term_id', 
                        'terms' => $category->term_id,
                        'include_children' => false
                    ))
                ));?>
        <div class="row">
            <?php foreach ($offers as $offer) :  ?>
            <div class="col-md-3">
                <a href="<?php echo get_permalink($offer); ?>" class="single-offer">
                    <div class="single-offer__bg">
                        <?php echo get_the_post_thumbnail( $offer, 'medium') ?>
                    </div>
                    <div class=" single-offer__title">
                        <?php echo get_the_title($offer) ?>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>