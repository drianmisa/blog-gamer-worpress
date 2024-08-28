<?php
function create_social_post_type() {
    register_post_type('social',
        array(
            'labels'      => array(
                'name'          => __('Redes sociales'),
                'singular_name' => __('Red social'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title'), 
            'menu_icon'   => 'dashicons-share',
        )
    );
}
add_action('init', 'create_social_post_type');

function social_add_meta_boxes() {
    add_meta_box(
        'social_meta_box', // ID del meta box
        __('Red social Details'), // Título del meta box
        'social_meta_box_callback', // Callback function
        'social', // Tipo de post al que se aplica
        'normal', // Contexto (normal, side, etc.)
        'high' // Prioridad
    );
}
add_action('add_meta_boxes', 'social_add_meta_boxes');

function social_meta_box_callback($post) {
    // Recuperar valores existentes
    $url = get_post_meta($post->ID, '_social_url', true);
    $icon = get_post_meta($post->ID, '_social_icon', true);
    ?>
    <p>
        <label for="social_url"><?php _e('URL:'); ?></label>
        <input type="url" id="social_url" name="social_url" value="<?php echo esc_attr($url); ?>" size="25" />
    </p>
    <p>
        <label for="social_icon"><?php _e('Ícono:'); ?></label>
        <select id="social_icon" name="social_icon">
            <option value=""><?php _e('Selecciona un ícono'); ?></option>
            <option value="facebook" <?php selected($icon, 'facebook'); ?>>Facebook</option>
            <option value="twitter" <?php selected($icon, 'twitter'); ?>>Twitter</option>
            <option value="instagram" <?php selected($icon, 'instagram'); ?>>Instagram</option>
            <option value="youtube" <?php selected($icon, 'youtube'); ?>>YouTube</option>
            <option value="linkedin" <?php selected($icon, 'linkedin'); ?>>LinkedIn</option>
            <option value="pinterest" <?php selected($icon, 'pinterest'); ?>>Pinterest</option>
            <option value="snapchat" <?php selected($icon, 'snapchat'); ?>>Snapchat</option>
            <option value="tiktok" <?php selected($icon, 'tiktok'); ?>>TikTok</option>
            <option value="whatsapp" <?php selected($icon, 'whatsapp'); ?>>WhatsApp</option>
            <option value="telegram" <?php selected($icon, 'telegram'); ?>>Telegram</option>
            <option value="reddit" <?php selected($icon, 'reddit'); ?>>Reddit</option>
            <option value="tumblr" <?php selected($icon, 'tumblr'); ?>>Tumblr</option>
        </select>
    </p>
    <?php
}

// Guardar los campos personalizados
function social_save_meta_box_data($post_id) {
    if (array_key_exists('social_url', $_POST)) {
        update_post_meta(
            $post_id,
            '_social_url',
            sanitize_text_field($_POST['social_url'])
        );
    }
    if (array_key_exists('social_icon', $_POST)) {
        update_post_meta(
            $post_id,
            '_social_icon',
            sanitize_text_field($_POST['social_icon'])
        );
    }
}
add_action('save_post', 'social_save_meta_box_data');




