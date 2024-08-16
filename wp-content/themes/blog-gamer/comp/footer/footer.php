<footer class="wrap">
  <div class="comp-footer">
    <div class="item-wrap">
      <div class="logo">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else {
          echo '<a class="title" href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
        }
        ?>
      </div>
      <p>Descubre un mundo de ideas en nuestro blog: desde tendencias y consejos hasta historias inspiradoras. ¡Explora y encuentra lo que te mueve!</p>
      <?php include(get_template_directory() . "/comp/header/social.php"); ?>
    </div>
  </div>
</footer>