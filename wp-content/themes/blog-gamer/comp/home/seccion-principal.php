<div class="wrap">
    <div class="grid-principal">
        <?php
        // Crear una nueva consulta para las últimas 3 entradas
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3, // Número de entradas a mostrar
            'post_status' => 'publish' // Solo mostrar publicaciones publicadas
        ));

        // Comprobar si hay entradas que mostrar
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="item-grid-prin">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="item-hov-zoom" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img class="item-hov-zoom" src="<?php echo get_template_directory_uri() . '/assets/common/images/images-webp/home/seccion-prin/1.webp'; ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                    <div class="container-data">
                        <!-- Categoría -->
                        <span><?php $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo '<span>' . esc_html($categories[0]->name) . '</span>';
                                } ?></span>
                        <h2><?php the_title(); ?></h2>
                        <ul>
                            <!-- Autor y fecha -->
                            <li>por <span><?php the_author(); ?></span> | <?php echo get_the_date(); ?></li>
                        </ul>
                    </div>
                </a>
            <?php
            endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No hay entradas disponibles.</p>
        <?php endif; ?>
    </div>
</div>