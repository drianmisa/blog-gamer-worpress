<?php
// Registra el widget
function sidebar_register_widget() {
    register_widget('Sidebar_Widget');
}
add_action('widgets_init', 'sidebar_register_widget');

// Define la clase del widget
class Sidebar_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            // ID del widget
            'sidebar_widget',
            // Nombre del widget
            __('Widget Personalizado Sidebar', 'sidebar_widget_domain'),
            // Descripción del widget
            array('description' => __('Widget Personalizado para Sidebar', 'sidebar_widget_domain'))
        );
    }

    // Front-end del widget
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        // Si hay un título presente
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        // Contenido del widget
        echo __('¡Prueba Exitosa!', 'sidebar_widget_domain');
        echo $args['after_widget'];
    }

    // Back-end del widget (formulario de configuración)
    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : __('Título por defecto del Widget', 'sidebar_widget_domain');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Título:', 'sidebar_widget_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    // Actualiza el widget reemplazando las viejas instancias con las nuevas
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
?>


