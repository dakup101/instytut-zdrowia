<?php 
global $post;
$people_field = get_field('people', $post->ID); 
$people = $people_field['person'];
?>

<section class="container-fluid contact-people mb-5">
    <div class="iz-container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-1">
                <div class="row gx-5">
                    <?php foreach($people as $person) : ?>
                        <?php
                        $name = $person['name'];
                        $info = $person['info'];
                        $tels = $person['tels'];
                        $email = $person['mail'];
                        $img = $person['img'];
                        ?>
                        <div class="col-md-6 col-12">
                            <div class="contact-people__item mb-4">
                                <div class="contact-people__item--image">
                                    <img src="<?php echo $img; ?>" alt="<?php echo $name ?>">
                                </div>
                                <div class="contact-people__item--content">
                                    <p class="fw-bold mb-1"><?php echo $name; ?></p>
                                    <p class="mb-3"><?php echo $info ?></p>
                                    <p class="fw-bold mb-1">Telefon:</p>
                                    <?php foreach($tels as $tel) : ?>
                                        <a class="d-block contact-people__item--phone" href="tel:<?php echo $tel['tel'] ?>"><?php echo $tel['tel'] ?></a>
                                    <?php endforeach; ?>
                                    <p class="mb-1 mt-2 fw-bold">E-mail:</p>
                                    <a href="mailto:<?php echo $email ?>" class="d-block contact-people__item--mail"><?php echo $email ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>