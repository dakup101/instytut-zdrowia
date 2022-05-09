<?php 
global $post;
//Template Name: Specjaliści 

$content = get_field('content', $post->ID);
$title = $content['title_subtitle'];

get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>
<section class="container-fluid specisalists-text">
    <div class="iz-container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="specialists-text__wrapper">
                    <div class="row">
                        <div class="col-md-8">
                            <?php get_template_part('template-parts/components/component-title-subtitle', null, $title); ?>
                            <div class="text">
                                <?php echo $content['text']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid specialists">
    <div class="iz-container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php 
                $departments = get_terms( array(
                    'taxonomy' => 'department',
                    'hide_empty' => true,
                ));
                $counter = 0;
                ?>
                <!-- Departments START -->
                <?php foreach ($departments as $department) : ?>
                <div class="prices__table-row">
                    <button type="button" class="prices__table-btn specialists__btn" data-tab="<?php echo $counter; ?>" <?php if($counter===0) echo "style='border-top: 0;'" ?>>
                        <span><?php echo $department->name; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
                    </button>
                    <?php
                    $doctors = get_posts(array(
                        'post_type' => 'doctors',
                        'numberposts' => -1,
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
                    <div class="prices__table-item specialists__item" data-tab="<?php echo $counter?>">
                        <?php foreach ($doctors as $doctor)  : ?>
                            <?php $specs = get_field('specs', $doctor->ID); ?>
                            <div class="prices__table-item--row specialists__item--row">
                                <span class="prices__table-item--service specialists__doctor--wrapper">
                                    <span class="specialists__doctor">
                                        <span class="specialists__doctor--title"><?php echo $specs['title']->name ?></span> 
                                        <span class="specialists__doctor--name"><?php echo $doctor->post_title; ?></span>
                                    </span>
                                    <span class="specialists__doctor--specs"><?php echo $specs['spec']; ?></span>
                                </span>
                                <span class="prices__table-item--price specialists__links">
                                    <a href="#" class="specialists__link specialists__link--more" data-doctor="<?php echo $doctor->ID; ?>">Przeczytaj więcej</a>
                                    <a href="#" class="specialists__link specialists__link--visit" data-doctor="<?php echo $doctor->ID; ?>" >Umów się na badanie</a>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $counter++;endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/specialist-popup'); ?>
<?php get_footer(); ?>


