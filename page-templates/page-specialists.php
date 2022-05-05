<?php 
global $post;
//Template Name: Specjaliści 


get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>

<section class="container-fluid specialists">
    <div class="iz-container">
        <?php 
        $departments = get_terms( array(
            'taxonomy' => 'department',
            'hide_empty' => true,
        ));
        ?>
        <!-- Departments START -->
        <?php foreach ($departments as $department) : ?>
        <div class="prices__table-row">
            <button type="button" class="prices__table-btn" data-tab="<?php echo $counter; ?>">
                <span><?php echo $department->name; ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
            </button>
            <?php
            $doctors = get_posts(array(
                'post_type' => 'doctors',
                'numberposts' => 1,
                'tax_query' => array(
                array(
                    'taxonomy' => 'department',
                    'field' => 'term_id', 
                    'terms' => $department->term_id,
                    'include_children' => false
                )
                )
            ));
            ?>
            <div class="prices__table-item" data-tab="<?php echo $counter?>">
                <?php foreach ($doctors as $doctor)  : ?>
                    <?php $specs = get_field('specs', $doctor->ID); ?>
                    <div class="prices__table-item--row">
                        <span class="prices__table-item--service"><?php echo $specs['title']->name ?> <strong><?php echo $doctor->post_title; ?></strong><br><i><?php echo $specs['spec']; ?></i></span>
                        <span class="prices__table-item--price">Test</span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>


