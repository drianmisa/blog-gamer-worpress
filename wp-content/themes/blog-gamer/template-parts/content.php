<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
        }
        ?>
    </div>

    <div class="entry-content-wrapper">
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php
            the_category( ', ' );
            the_tags( '<span class="tag-links">', ', ', '</span>' );
            edit_post_link(
                sprintf(
                    __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'your-theme-textdomain' ),
                    get_the_title()
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
