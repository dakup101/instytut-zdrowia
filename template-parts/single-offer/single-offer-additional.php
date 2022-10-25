<?php
$additional = get_field("additional");
$show = !empty($additional);
if ($show):
?>
<section class="container-fluid mb-5">
    <div class="iz-container">
        <div class="text">
            <?php echo $additional ?>
        </div>
    </div>
</section>
<?php endif;?>