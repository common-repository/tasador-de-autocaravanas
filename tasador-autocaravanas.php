<?php
/*
Plugin Name: Tasador de autocaravanas
Plugin URI: http://staiapps.com/app/tasador-de-autocaravanas/
Text Domain: tasador-de-autocaravanas
Description: Plugin para añadir un formulario para tasar autocaravanas
Version: 1.5.1
Author: Juan Carlos Rico Ochoa
Author URI: http://www.staiapps.com/juan-carlos-rico
License: GPL2
*/

/*  Copyright 2016 STAIAPPS  (email : info@staiapps.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class tasador_autocaravanas_plugin extends WP_Widget {

    // CONSTRUCTOR
    function __construct() {
        parent::__construct(false, $name = __('Tasador de autocaravanas', 'tasador-de-autocaravanas') );
    }

    // WIDGET FORM CREATION
    function form($instance) {
        // CHECK VALUES
        if( $instance) {
            $apikey = esc_attr($instance['apikey']);
            $email = esc_attr($instance['email']);
            $terminos = esc_attr($instance['terminos']);
        } else {
            $apikey = '';
            $email = '';
            $terminos = '';
        }
        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('apikey')); ?>"><?php _e('API KEY:', 'tasador-de-autocaravanas'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('apikey')); ?>" name="<?php echo esc_attr($this->get_field_name('apikey')); ?>" type="text" value="<?php echo esc_attr($apikey); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php _e('Email:', 'tasador-de-autocaravanas'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('terminos')); ?>"><?php _e('Términos:', 'tasador-de-autocaravanas'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('terminos')); ?>" name="<?php echo esc_attr($this->get_field_name('terminos')); ?>" type="text" value="<?php echo esc_attr($terminos); ?>" />
        </p>

        <?php
    }

    // WIDGET UPDATE
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        // FIELDS
        $instance['apikey'] = strip_tags($new_instance['apikey']);
        $instance['email'] = strip_tags($new_instance['email']);
        $instance['terminos'] = strip_tags($new_instance['terminos']);

        return $instance;
    }

    // WIDGET DISPLAY
    function widget($args, $instance) {
        extract( $args );
        $apikey = $instance['apikey'];
        $email = $instance['email'];
        $terminos = $instance['terminos'];

        ob_start();
        getTasadorAutocaravanasForm($apikey,$email,$terminos);
        $output = ob_get_contents();
        ob_end_clean();

        echo esc_attr($output);
    }
}

include_once "inc/form.php";

// WIDGET
add_action('widgets_init', create_function('', 'return register_widget("tasador_autocaravanas_plugin");'));

function tasador_autocaravanas_enqueue(){
    // STYLES & SCRIPTS
    wp_enqueue_style( 'bootstrap-css-local', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css');
    wp_enqueue_style( 'font-awesome-free', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css' );
    wp_enqueue_script( 'bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_enqueue_script( 'tasador-functions', plugin_dir_url(__FILE__) . 'js/functions.js', array ( 'bootstrap' ), 1.1, true);
    wp_enqueue_script( 'tasador-numeral', plugin_dir_url(__FILE__) . 'js/numeral.min.js', 1.1, true);
    // wp_enqueue_style( 'tasador-style', plugin_dir_url(__FILE__) . 'css/style.css', array( 'bootstrap-css-local' ) );
    // wp_enqueue_script( 'tasador-script-autocaravanas', plugin_dir_url(__FILE__) . 'js/scripts-autocaravanas.js', array ( 'bootstrap', 'tasador-functions' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'tasador_autocaravanas_enqueue', 12 );

function tasador_autocaravanas_shortcode($atts = array()){
    ob_start();
    getTasadorAutocaravanasForm(esc_attr($atts['api_key']), esc_attr($atts['email']), esc_attr($atts['terminos']));
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode( 'tasador_autocaravanas', 'tasador_autocaravanas_shortcode' );