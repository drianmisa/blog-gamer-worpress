<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Buscar …', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit">
        <?php echo esc_html_x('Search', 'submit button'); ?>
    </button>
</form>