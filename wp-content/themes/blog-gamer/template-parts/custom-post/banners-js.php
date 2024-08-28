<?php

function crear_custom_post_html_manager() {
    $labels = array(
        'name'               => 'HTML Blocks',
        'singular_name'      => 'HTML Block',
        'menu_name'          => 'HTML Blocks',
        'name_admin_bar'     => 'HTML Block',
        'add_new'            => 'Agregar Nuevo',
        'add_new_item'       => 'Agregar Nuevo HTML Block',
        'new_item'           => 'Nuevo HTML Block',
        'edit_item'          => 'Editar HTML Block',
        'view_item'          => 'Ver HTML Block',
        'all_items'          => 'Todos los HTML Blocks',
        'search_items'       => 'Buscar HTML Blocks',
        'not_found'          => 'No encontrado',
        'not_found_in_trash' => 'No encontrado en la papelera'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title'),
        'show_in_rest'       => false,
    );

    register_post_type('html_block', $args);
}
add_action('init', 'crear_custom_post_html_manager');

function agregar_metabox_html_block() {
    add_meta_box(
        'html_block_code',
        'HTML Code',
        'mostrar_metabox_html_block',
        'html_block',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'agregar_metabox_html_block');

function mostrar_metabox_html_block($post) {
    $html_code = get_post_meta($post->ID, '_html_block_code', true);
    echo '<textarea style="width:100%; height:200px;" name="html_block_code">' . esc_textarea($html_code) . '</textarea>';
}

function guardar_html_block_code($post_id) {
    if (array_key_exists('html_block_code', $_POST)) {
        update_post_meta($post_id, '_html_block_code', $_POST['html_block_code']);
    }
}
add_action('save_post', 'guardar_html_block_code');


