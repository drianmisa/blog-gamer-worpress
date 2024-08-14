<div class="wrap">
  <div class="wrap-hdr">
    <div class="nav-hdr">
        <?php include("form-busqueda.php") ;?>
    </div>
    <div class="logo">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        echo '<span class="title">' . get_bloginfo('name') . '</span>';
      }
      ?>
    </div>
    <div>
      <?php include(get_template_directory() . "/comp/header/social.php"); ?>
    </div>
  </div>
</div>
<div class="wrap">
  <?php include "menu.php"; ?>
</div>