<?php get_header(); ?>
<div class="container-fluid">
    <div class="iz-container offer-loop">
        <?php  
         $term = get_queried_object();
         $term_name = $term->name;
         $term_taxonomy = $term->taxonomy;
         $term_slug = $term->slug;
         $term_desc = $term->description;
        ?>
        <div class="text-center mb-5">
            <?php get_template_part('template-parts/components/component-title-subtitle', null, array(
            'title'=>$term_name,
            'wrapper_title' => 'h1',
            'font_weight_title' => 'bold',
            ));?>
            <p><?php echo $term_desc;  ?></p>
        </div>
        <?php 
        $args = array(
            "post_type" => "offers",
            "post_status" => "publish",
            "tax_query" => array(
                "taxonomy" => $term_taxonomy,
                "field" => "slug",
                "terms" => $term_slug,
            )
        );
        $offers = new WP_Query($args);
        if ($offers->have_posts()) :
        ?>
        <div class="row">
            <?php while($offers->have_posts()) : $offers->the_post(); ?>
            <div class="col-md-3">
                <a href="<?php echo get_permalink(); ?>" class="single-offer">
                    <div class="single-offer__bg">
                        <?php echo get_the_post_thumbnail() ?>
                    </div>
                    <div class=" single-offer__title">
                        <?php echo get_the_title() ?>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>