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
      <?php
      $recent_posts = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => "Footer",
        'post_status' => 'publish',
      ));
      if ($recent_posts->have_posts()) :
        while ($recent_posts -> have_posts()) : $recent_posts -> the_post();
        the_content();
        endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No hay entradas disponibles</p>
      <?php endif; ?>
      <?php include(get_template_directory() . "/comp/header/social.php"); ?>
    </div>
  </div>
</footer>