<?php get_header(); ?>
<div class="iz-container offer-loop">
    <?php
$s=get_search_query();
$args = array(
    's' =>$s
 );

$the_query = new WP_Query( $args );
if ($the_query->have_posts()):
?>
    <div class="title-subtitle mb-5">
        <h1 class="title-subtitle__title fw-light">
            Szukasz: <?php echo get_query_var('s') ?>
        </h1>
    </div>
    <div class="row">
        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="col-md-3">
            <a href="<?php echo get_the_permalink(); ?>" class="single-offer">
                <div class="single-offer__bg">
                    <?php echo get_the_post_thumbnail()?>
                </div>
                <div class=" single-offer__title">
                    <?php echo get_the_title() ?>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
    <?php else: ?>
    <div class="title-subtitle mb-5">
        <h1 class="title-subtitle__title fw-light" style="text-align: center">
            Nic nie znaleziono dla: <?php echo get_query_var('s') ?>
        </h1>
    </div>
    <?php endif;?>
</div>

<?php get_footer(); ?>