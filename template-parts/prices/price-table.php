<?php
$prices = get_field('prices_table');
$banner = $prices['banner'];
$table = $prices['tabela'];
?>

<section class="container-fluid">
	<div class="iz-container">
		<div class="row">
			<div class="col-8 offset-2">
				<div class="prices__banner" style="background-image: url('<?php echo $banner['img'] ?>')">
                    <?php
                    // SET TITLE ARGS
                    $args = array(
                        'title' => $banner['text'],
                        'wrapper_title' => 'h1',
                        'font_weight_title' => 'light',
                        'class' => 'prices__banner-text'
                    );
                    // GET TITLE
                    get_template_part('/template-parts/components/component-title-subtitle', null, $args);
                    ?>
				</div>
                <div class="prices__table">
                    <?php $counter = 0; foreach ($table as $item) : ?>
                    <div class="prices__table-row">
                        <button type="button" class="prices__table-btn" data-tab="<?php echo $counter; ?>">
                            <span><?php echo $item['cateogry']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
                        </button>
                        <div class="prices__table-item" data-tab="<?php echo $counter?>">
                            <div class="prices__table-item--title"><?php echo $item['cateogry']; ?></div>
                            <?php foreach ($item['items'] as $row)  : ?>
                                <div class="prices__table-item--row">
                                    <span class="prices__table-item--service"><?php echo $row['text']; ?></span>
                                    <span class="prices__table-item--price"><?php echo $row['price']; ?> zł</span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php $counter++; endforeach; ?>
                </div>
			</div>
		</div>
	</div>
</section>
