<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        if ( is_category() ) {
                            single_cat_title();
                        } elseif ( is_tag() ) {
                            single_tag_title();
                        } elseif ( is_author() ) {
                            the_post();
                            echo 'Author: ' . get_the_author();
                            rewind_posts();
                        } elseif ( is_day() ) {
                            echo 'Day: ' . get_the_date();
                        } elseif ( is_month() ) {
                            echo 'Month: ' . get_the_date( 'F Y' );
                        } elseif ( is_year() ) {
                            echo 'Year: ' . get_the_date( 'Y' );
                        } else {
                            _e( 'Archives', 'your-theme-textdomain' );
                        }
                        ?>
                    </h1>
                </header>

                <?php
                // Inicio del loop
                while ( have_posts() ) : the_post();
                    // Incluir la plantilla de contenido
                    get_template_part( 'template-parts/content', get_post_format() );
                endwhile;

                // Navegación
                the_posts_pagination( array(
                    'prev_text' => __( 'Previous page', 'your-theme-textdomain' ),
                    'next_text' => __( 'Next page', 'your-theme-textdomain' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'your-theme-textdomain' ) . ' </span>',
                ) );

            else :
                // Incluir la plantilla de contenido cuando no hay posts
                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>

        <div class="col-12 col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
