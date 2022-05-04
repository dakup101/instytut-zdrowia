<?php 
$menu_name = 'primary_menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$counter = 0;

function get_menu_item_children($menu_items, $parent_id){
    $children = array();
    foreach ($menu_items as $item){
        if ($item->menu_item_parent == $parent_id) {array_push($children, $item);}
    }
    return $children;
}
function menu_item_has_children($menu_items, $check_id){
    foreach ($menu_items as $item){
        if ($item->menu_item_parent == $check_id) {return true;}
    }
    return false;
}
?>

<nav class="main-nav__nav d-flex justify-content-end align-items-center">
    <?php foreach ($menu_items as $item) : ?>
        <?php if ($item->menu_item_parent == 0) : ?>
            <a href="#" class="main-nav__link <?php if (menu_item_has_children($menu_items, $item->db_id)) {echo 'has-children';} ?>" data-parent="<?php echo $item->db_id; ?>">
                <span class="main-nav__link--text"><?php echo $item->title; ?><?php if (menu_item_has_children($menu_items, $item->db_id)) {echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>';} ?></span>
            </a>
            <?php if (isset($menu_items[($counter+1)]) && $menu_items[($counter+1)]->menu_item_parent == $item->db_id) : ?>
                    <div class="mega-menu" data-parent="<?php echo $item->db_id; ?>">
                        <div class="mega-menu__wrapper">
                        <div class="mega-menu__wrapper--left">
                            <?php foreach (get_menu_item_children($menu_items, $item->db_id) as $sub_item) : ?>
                                <a href="<?php echo $sub_item->url; ?>" class="mega-menu__link <?php if ($sub_item->url=="#") echo "no-link" ?> <?php if (menu_item_has_children($menu_items, $sub_item->db_id)) {echo 'has-children';} ?>" data-menu="<?php echo $sub_item->db_id; ?>">
                                    <span>
                                        <?php echo $sub_item->title; ?>
                                        <?php if (menu_item_has_children($menu_items, $sub_item->db_id)) {echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>';} ?>
                                    </span>
                                </a>
                                <?php if (menu_item_has_children($menu_items, $sub_item->db_id)) : ?>
                                <div class="mega-menu__links" data-menu="<?php echo $sub_item->db_id; ?>">
                                    <div class="mega-menu__links--wrapper">
                                        <p class="mega-menu__links--title"><?php echo $sub_item->title; ?></p>
                                        <div class="mega-menu__links--content">
                                        <?php foreach (get_menu_item_children($menu_items, $sub_item->db_id) as $sub_sub) : ?>
                                            <a href="<?php echo $sub_sub->url; ?>" class="mega-menu__links--item"><?php echo $sub_sub->title; ?></a>
                                        <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        </div>
                    </div>
                <?php endif; ?>
        <?php endif; ?>
    <?php $counter ++; endforeach; ?>
    <a href="#" class="iz-btn iz-btn__main ms-2">
        <img class="iz-btn__icon" src="<?php echo get_template_directory_uri().'/assets/images/svg/calendar-white.svg';?>" alt="">
        <span class="iz-btn__text">
            Zarezerwuj termin
        </span>
    </a>
</nav>
                