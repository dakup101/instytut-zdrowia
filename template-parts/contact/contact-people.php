<?php 
global $post;
$people_field = get_field('people', $post->ID); 
$c_info = get_field('contact');
$people = $people_field['person'];
?>

<section class="container-fluid contact-people mb-5">
    <div class="iz-container">
        <div class="row gx-5">
            <div class="col-12 col-lf-4 col-xxl-3">
                <div class="contact-aside">
                    <?php
                            $info = $c_info['info'];
                            $tels = $c_info['tels'];
                            $email = $c_info['mails'];
                            ?>
                    <div>
                        <div class="contact-people__item mb-4 text-center">
                            <div class="contact-people__item--content">
                                <p class="mb-3 fw-bold"><?php echo $info ?></p>
                                <?php if (!empty($tels)) : ?>
                                <p class="fw-bold mb-1">Telefon:</p>
                                <?php foreach($tels as $tel) : ?>
                                <a class="d-block contact-people__item--phone"
                                    href="tel:<?php echo $tel['tel'] ?>"><?php echo $tel['tel'] ?></a>
                                <?php endforeach; ?>
                                <?php endif;?>
                                <?php if (!empty($email)) : ?>
                                <p class="mb-1 mt-2 fw-bold">E-mail:</p>
                                <?php foreach($email as $el) : ?>
                                <a href="mailto:<?php echo $el['mail'] ?>"
                                    class="d-block contact-people__item--mail"><?php echo $el['mail'] ?></a>
                                <?php endforeach; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="contact-aside__lower-img">

                        <img src="<?php echo get_template_directory_uri().'/assets/images/svg/half-horizontal.svg'?>"
                            alt="Instytut Zdrowia - Logo-połówka">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-xxl-9 ">
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
                                        <h4 class="contact-people__item--name"><?php echo $name ?></h4>
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