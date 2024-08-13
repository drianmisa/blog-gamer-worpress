<div class="wrap">
  <div class="wrap-hdr">
    <div class="nav-hdr">
      <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <label>
          <span class="screen-reader-text"><?php echo _x('Search for:', 'label'); ?></span>
          <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </label>
        <button type="submit" class="search-submit">
          <?php echo esc_html_x('Search', 'submit button'); ?>
        </button>
      </form>
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
      <?php include(get_template_directory() . "/comp/header/social.php"); ?>
    </div>
  </div>
</div>
<div class="wrap">
  <?php include "menu.php"; ?>
</div>