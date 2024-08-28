<?php
function create_footer_post_type() {
    register_post_type('footer',
        array(
            'labels'      => array(
                'name'          => __('Footer'),
                'singular_name' => __('Footer'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor'), 
        )
    );
}
add_action('init', 'create_footer_post_type');