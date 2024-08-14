<?php get_header(); ?>

<div class="wrap">
    <div class="contein-single-post">
        <div>
            <?php if ( have_posts() ) : ?>
                    <h1 class="page-title">
                        <?php
                        if ( is_category() ) {
                            single_cat_title();
                        } elseif ( is_tag() ) {
                            single_tag_title();
                        } elseif ( is_author() ) {
                            the_post();
                            echo 'Autor: ' . get_the_author();
                            rewind_posts();
                        } elseif ( is_day() ) {
                            echo 'Dia: ' . get_the_date();
                        } elseif ( is_month() ) {
                            echo 'Mes: ' . get_the_date( 'F Y' );
                        } elseif ( is_year() ) {
                            echo 'Año: ' . get_the_date( 'Y' );
                        } else {
                            _e( 'Archivos', 'your-theme-textdomain' );
                        }
                        ?>
                    </h1>
                <div class="grid-archive">
                <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', get_post_format() );
                    endwhile;
                ?>

                </div>
                
                <?php

                the_posts_pagination( array(
                    'prev_text' => __( 'Previous page', 'your-theme-textdomain' ),
                    'next_text' => __( 'Next page', 'your-theme-textdomain' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'your-theme-textdomain' ) . ' </span>',
                ) );

            else :
                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>

        <div class="sidebar-archive">
                <div>
                    <?php include(get_template_directory() . "/comp/header/form-busqueda.php"); ?>
                </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
