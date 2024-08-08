<div class="wrap">
  <div class="wrap-hdr">
    <div class="nav-hdr">
    <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'secondary',
                    'menu_class'     => 'secondary-menu',
                )
            );
            ?>

    </div>
    <div class="logo">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
      }
      ?>
    </div>
    <div>
      <?php include (get_template_directory() . "/comp/header/social.php");?>
    </div>
  </div>
</div>
<div class="wrap">
    <?php include "menu.php" ;?>
</div>