<?php
// Crear una nueva consulta para las últimas 3 entradas del tipo 'social'
$recent_posts = new WP_Query(array(
    'post_type'      => 'social',
    'post_status'    => 'publish',      
    'orderby'       => 'date',   
    'order'         => 'DESC'     
));

if ($recent_posts->have_posts()) :
?>
    <ul class="social">
    <?php
    while ($recent_posts->have_posts()) : $recent_posts->the_post();
        $url = get_post_meta(get_the_ID(), '_social_url', true);
        $icon = get_post_meta(get_the_ID(), '_social_icon', true);
    ?>
        <li>
            <a href="<?php echo esc_url($url); ?>" class="social-icon <?php echo esc_attr($icon); ?>">
                <i class="fab fa-<?php echo esc_attr($icon); ?>"></i>
            </a>
        </li>
    <?php
    endwhile;
    ?>
    </ul>
    <?php
    wp_reset_postdata();
else : ?>
    <p>No hay redes sociales disponibles.</p>
<?php endif; ?>
