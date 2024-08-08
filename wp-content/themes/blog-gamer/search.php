<?php
// Incluir el encabezado
get_header(); 
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php if ( have_posts() ) : ?>
                    <h1 class="page-title">
                        <?php printf( __( 'Resultados de búsqueda para: %s', 'your-theme-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?>
                    </h1>

                <?php
                // Inicio del loop
                while ( have_posts() ) : the_post();
                    // Incluir la plantilla de contenido
                    get_template_part( 'template-parts/content', 'search' );
                endwhile;

                // Navegación
                the_posts_navigation();

            else :
               
                include(get_template_directory() . "/comp/404/err-404.php");
 
            endif;
            ?>
        </div>

        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php
// Incluir el pie de página
get_footer();
?>
