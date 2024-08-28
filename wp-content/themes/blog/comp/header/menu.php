<div class="wrap-menu">
    <div class="toggle">&#9776;</div>
    <div class="menu">
        <div class="close">X</div>
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                )
            );
            ?>
        </nav>
    </div>
</div>