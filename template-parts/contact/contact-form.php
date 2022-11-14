<?php
global $post;
$content = get_field('cf', $post->ID);
$title = $content['title'];
$form = $content['form'];
?>

<section class="container-fluid contact-form my-5 position-relative">
    <h2 class="title-subtitle fw-light text-center mb-5 opacity-75"><?php echo $title; ?></h2>
    <div class="iz-container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-md-3">
                <div class="contact-form__wrapper cf-7-form">
                    <?php echo do_shortcode($form); ?>
                </div>
            </div>
        </div>
    </div>
</section>