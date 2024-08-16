<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="wrap">
            <div class="hero-singlepost">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                <div class="data-title">
                    <div>
                        <a href="<?php $categories = get_the_category();
                                    echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                            <?php
                            if (!empty($categories)) {
                                echo esc_html($categories[0]->name);
                            }
                            ?>
                        </a>
                        <h1><?php echo the_title(); ?></h1>
                    </div>
                    <div>
                        por <span class="cat"><?php echo get_the_author(); ?></span> | <span class="date"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="contein-single-post">
                <div>
                    <div class="content-post">
                        <?php the_content(); ?>
                        <hr>
                    </div>
                    <div class="arr-single-post">
                        <div class="post-navigation__prev">
                            <?php previous_post_link('%link', '← <span class="arr-wrod">Entrada anterior</span>'); ?>
                        </div>
                        <div class="post-navigation__next">
                            <?php next_post_link('%link', '<span class="arr-wrod">Siguiente entrada</span> →'); ?>
                        </div>
                    </div>
                    <!-- Componente de Entradas Relacionadas -->
                    <div class="related-posts">
                        <h2>Entradas Relacionadas</h2>
                        <ul>
                            <?php
                            $current_post_id = get_the_ID();
                            $categories = wp_get_post_categories($current_post_id);

                            $related_posts = new WP_Query(array(
                                'category__in'   => $categories, // Basado en las categorías del post actual
                                'posts_per_page' => 3,           // Número de entradas relacionadas a mostrar
                                'post__not_in'   => array($current_post_id), // Excluir el post actual
                                'post_status'    => 'publish',   // Solo mostrar posts publicados
                            ));

                            if ($related_posts->have_posts()) :
                                while ($related_posts->have_posts()) : $related_posts->the_post();
                            ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </li>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                ?>
                                <li>No hay entradas relacionadas disponibles.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <?php include(get_template_directory() . "/comp/header/form-busqueda.php"); ?>
                    </div>
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <aside id="secondary" class="widget-area">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </aside>
                    <?php endif; ?>
                </div>


            </div>
        </div>

<?php endwhile;
endif; ?>