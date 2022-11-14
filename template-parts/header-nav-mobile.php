<?php 
$menu_name = 'primary_menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$counter = 0;


?>

<nav class="main-nav__nav d-flex flex-column d-xl-none align-items-center mobile">
    <div class="d-flex justify-content-between align-items-center pt-4 w-100" style="padding: 0.5rem 1rem;">
        <p class="mb-0">
            Menu
        </p>
        <button class="close-mobile-nav p-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </button>
    </div>
    <?php foreach ($menu_items as $item) : ?>
    <?php if ($item->menu_item_parent == 0) : ?>
    <a href="<?php echo $item->url; ?>"
        class="main-nav__link mobile <?php if (menu_item_has_children($menu_items, $item->db_id)) {echo 'has-children-mobile';} ?>"
        data-parent="<?php echo $item->db_id; ?>">
        <span
            class="main-nav__link--text"><?php echo $item->title; ?><?php if (menu_item_has_children($menu_items, $item->db_id)) {echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>';} ?></span>
    </a>
    <!-- MENU CHILDREN -->
    <?php if(menu_item_has_children($menu_items, $item->db_id)) : ?>
    <div class="main-nav__nav-mobile-child" data-lvl1-menu="<?php echo $item->db_id; ?>">
        <?php foreach (get_menu_item_children($menu_items, $item->db_id) as $sub_item) : ?>
        <a href="<?php echo $sub_item->url; ?>"
            class="mega-menu__link mobile parent <?php if ($sub_item->url=="#") echo "no-link" ?> <?php if (menu_item_has_children($menu_items, $sub_item->db_id)) {echo 'has-children';} ?>"
            data-menu="<?php echo $sub_item->db_id; ?>">
            <span>
                <?php echo $sub_item->title; ?>
                <?php if (menu_item_has_children($menu_items, $sub_item->db_id)) {echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>';} ?>
            </span>

        </a>
        <!-- LEVEL 3 MENU -->
        <?php if(menu_item_has_children($menu_items, $sub_item->db_id)) : ?>
        <div class="mobile-sub-sub" data-lvl3-menu="<?php echo $sub_item->db_id ?>">
            <?php foreach (get_menu_item_children($menu_items, $sub_item->db_id) as $sub_sub_item) : ?>
            <a href="<?php echo $sub_sub_item->url; ?>"
                class="mega-menu__link mobile parent <?php if ($sub_sub_item->url=="#") echo "no-link" ?> <?php if (menu_item_has_children($menu_items, $sub_sub_item->db_id)) {echo 'has-children';} ?>"
                data-menu="<?php echo $sub_sub_item->db_id; ?>">
                <span>
                    <?php echo $sub_sub_item->title; ?>
                    <?php if (menu_item_has_children($menu_items, $sub_sub_item->db_id)) {echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>';} ?>
                </span>

            </a>
            <?php endforeach; ?>
        </div>
        <?php endif;?>
        <!-- END LEVEL 3 MENU -->
        <?php endforeach; ?>
    </div>
    <?php endif;?>
    <!-- END MENU CHILDREN -->
    <?php endif; ?>
    <?php $counter ++; endforeach; ?>
    <a href="/zarezerwuj-termin" class="iz-btn iz-btn__main ms-2">
        <img class="iz-btn__icon"
            src="<?php echo get_template_directory_uri().'/assets/images/svg/calendar-white.svg';?>" alt="">
        <span class="iz-btn__text">
            Zarezerwuj termin
        </span>
    </a>
</nav>