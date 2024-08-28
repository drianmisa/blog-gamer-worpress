<article class="archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="entry-thumbnail" href="<?php echo esc_url(get_permalink()); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </a>
    <div class="entry-footer">
        <?php
        the_category(' - ');
        the_tags('<span class="tag-links">', ', ', '</span>');

        edit_post_link(
            sprintf(
                __('<br>Editar =><span class="screen-reader-text"> "%s"</span>', 'your-theme-textdomain'),
                get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
    </div>
    <div class="entry-content-wrapper">
        <div class="entry-header">
            <h2 class="entry-title">
                <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                    <?php
                    $excerpt = the_title();
                    $limited_excerpt = mb_strimwidth($excerpt, 0, 70, '...');
                    echo esc_html($limited_excerpt); ?>
                </a>
            </h2>
        </div>
    </div>
    <div class="cats-archives">
        por <span><?php the_author(); ?></span> | <?php echo get_the_date(); ?>
    </div> 
</article>