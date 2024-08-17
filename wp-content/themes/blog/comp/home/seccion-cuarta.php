<div class="wrap">
   <div class="component-hov-box">
        <h2>Recetas</h2>

        <div class="item-component-hov-box">
        <?php
        // Crear una nueva consulta para las últimas 3 entradas
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'category_name' => 'recetas'
        ));

        // Comprobar si hay entradas que mostrar
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <div class="div-item-component-hov-box">
                    <a href="<?php the_permalink(); ?>" class="a-item-component-hov-box">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="item-hov-zoom" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img class="item-hov-zoom" src="<?php echo get_template_directory_uri() . '/assets/common/images/images-webp/home/seccion-prin/1.webp'; ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </a>
                    <div class="container-data">
                        <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                $category_id = $categories[0]->term_id;
                                $category_name = esc_html($categories[0]->name); 
                                $category_link = esc_url(get_category_link($category_id)); 
                                ?>
                                <a class="btn-rosa-cat" href="<?php echo $category_link; ?>">
                                    <?php echo $category_name; ?>
                                </a>
                                <?php
                            }
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <h3>
                                <?php 
                                    $title = get_the_title();
                                    // Limitar el título a 50 caracteres
                                    $limited_title = mb_strimwidth($title, 0, 70, '...');
                                    echo esc_html($limited_title); 
                                ?>
                            </h3>
                        </a>                   

                        <ul>
                            <li>por <span><?php the_author(); ?></span> | <?php echo get_the_date(); ?></li>
                        </ul>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No hay recetas disponibles</p>
        <?php endif; ?>
    </div>
   </div>
</div>