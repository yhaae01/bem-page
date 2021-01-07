    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BEM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query menu -->
    <?php 
        $role_id    = $this->session->userdata('role_id');
        $queryMenu  = "SELECT `user_menu`.`id`, `menu` 
                         FROM `user_menu` JOIN `user_accessmenu` 
                           ON `user_menu`.`id` = `user_accessmenu`.`menu_id` 
                        WHERE `user_accessmenu`.`role_id` = $role_id
                     ORDER BY `user_accessmenu`.`menu_id` ASC
                    ";

        $menu       = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- Looping Menu -->

    <?php foreach($menu as $m) : ?>
    <div class="sidebar-heading">
        <?= $m['menu']; ?>
    </div>

    <!-- Submenu sesuai menu -->
    <?php 
        $menuId       = $m['id'];
        $querySubMenu = "SELECT * FROM `user_submenu` WHERE `menu_id` = $menuId AND `is_active` = 1";

        $subMenu      = $this->db->query($querySubMenu)->result_array();
    ?>
        <?php foreach($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']): ?>
                <li class="nav-item active">
                    <?php else : ?>
                        <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                <i class="<?= $sm['icon']; ?>"></i>
                <span><?= $sm['title']; ?></span></a>
            </li>
        <?php endforeach; ?>

        <hr class="sidebar-divider mt-3">
    <?php endforeach; ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->