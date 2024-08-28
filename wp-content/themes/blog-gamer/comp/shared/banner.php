<div class="wrap" style="margin-bottom: 80px;">
    <?php
    // Crear una nueva consulta para las últimas 3 entradas
    $recent_posts = new WP_Query(array(
        'post_type'      => 'html_block',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
    ));

    // Comprobar si hay entradas que mostrar
    if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post();
            $html_code = get_post_meta($post->ID, '_html_block_code', true);
            if (!empty($html_code)) {
                echo $html_code;
            }
        endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No hay banners disponibles</p>
    <?php endif; ?>

</div>