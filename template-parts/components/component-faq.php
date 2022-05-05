<?php
$args = wp_parse_args($args, array(
    'text' => '',
    'link' => '',
    'alt' => false,
    'brown' => false,
    'arrow' => false,
    'is_icon' => false,
    'icon' => ''
));

$prices = get_field('prices_table');
$banner = $prices['banner'];
$table = $prices['tabela'];
?>

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