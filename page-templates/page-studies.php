<?php
global $post;
//Template Name: Badanie Kliniczne
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
get_template_part('template-parts/studies/studies-section-1');
get_template_part('template-parts/studies/studies-section-2');
get_template_part('template-parts/icons-row');
get_template_part('template-parts/studies/studies-section-3');

$people_field = get_field('people', $post->ID); 
$people = $people_field['person'];
if (!empty($people)):
?>

<section class="container-fluid contact-people mb-5">
    <div class="iz-container">
        <div class="row gx-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="row gx-5 ps-0 ps-md-5 ps-xxl-0">
                            <?php foreach($people as $person) : ?>
                            <?php
                            $info = $person['info'];
                            $tels = $person['tels'];
                            $email = $person['mail'];
                            $name = $person['name'];
                            $img = $person['img'];
                            ?>
                            <div class="col-xxl-3 col-md-6 col-12">
                                <div class="contact-people__item mb-4 text-center">
                                    <div class="contact-people__item--content">
                                        <div class="contact-people__item--img-wrapper">
                                            <img src="<?php echo $img ?>" class="contact-people__item--img mb-3"
                                                alt="<?php echo $name ?>">
                                        </div>
                                        <h4 class="contact-people__item--name"><?php echo $name ?></h4>f
                                        <p class="mb-3 fw-bold"><?php echo $info ?></p>
                                        <p class="fw-bold mb-1">Telefon:</p>
                                        <?php foreach($tels as $tel) : ?>
                                        <a class="d-block contact-people__item--phone"
                                            href="tel:<?php echo $tel['tel'] ?>"><?php echo $tel['tel'] ?></a>
                                        <?php endforeach; ?>
                                        <p class="mb-1 mt-2 fw-bold">E-mail:</p>
                                        <a href="mailto:<?php echo $email ?>"
                                            class="d-block contact-people__item--mail"><?php echo $email ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
get_footer();