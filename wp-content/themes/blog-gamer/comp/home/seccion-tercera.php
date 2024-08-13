<div class="wrap">
    <div class="segunda-cat">
        <h2>Salud y Belleza</h2>
        <ul class="grid-item-entada">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'category_name' => 'belleza y salud'
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <li>
                        <a href="<?php echo get_permalink() ;?>">
                            <?php if(the_post_thumbnail()){;?>
                                <img src="<?php echo get_template_directory_uri() . '/assets/common/images/images-webp/home/seccion-prin/freepik_standard_150318475.webp'; ?>" alt="title"></a>
                            <?php } else{;?>

                                <?php };?>
                        <div>
                            <a class="btn-rosa-cat" href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo '<span>' . esc_html($categories[0]->name) . '</span>';
                                }
                                ?>
                            </a>
                            <a href="<?php echo get_permalink() ;?>">
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
                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No hay entradas disponibles</p>
            <?php endif; ?>
        </ul>
    </div>
</div>