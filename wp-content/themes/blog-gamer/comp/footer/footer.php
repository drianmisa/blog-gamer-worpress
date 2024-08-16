<footer class="wrap">
  <div class="comp-footer">
    <div class="item-wrap">
      <div class="btn-hdr">
        <a class="btn-rosa" href="http://">Editor's pick</a>
        <h3>The Art of Storytelling</h3>
      </div>
      <ul class="footer-list">
        <li>
          <a href="">This game raises the bar for excellence in storytelling, gameplay, and overall enjoyment.</a>
        </li>
        <li>
          <a href="">Gamer’s Delight: Top Picks from [Magazine Name]’s Latest Edition</a>
        </li>
        <li>
          <a href="">Leveling Up: The Evolution of [Magazine Name] and Gaming Journalism</a>
        </li>
      </ul>
    </div>
    <div class="item-wrap">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        echo '<a class="title" href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
      }
      ?>
      <p>This theme is perfect for blogs and excellent for online stores, news, magazine or review sites. Buy Soledad now!</p>
      <?php include(get_template_directory() . "/comp/header/social.php"); ?>
    </div>
    <div class="item-wrap">
      <h3>
        USERFUL LINKS
      </h3>
      <ul>
        <li>
          <a href="http://">Enlace 1</a>
        </li>
        <li>
          <a href="http://">Enlace 1</a>
        </li>
        <li>
          <a href="http://">Enlace 1</a>
        </li>
        <li>
          <a href="http://">Enlace 1</a>
        </li>
        <li>
          <a href="http://">Enlace 1</a>
        </li>
      </ul>

    </div>
  </div>
</footer>