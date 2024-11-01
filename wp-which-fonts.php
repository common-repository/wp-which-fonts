<?php
/*
Plugin Name:  WP Which Fonts?
Plugin URI:   https://wordpress.org/plugins/wp-which-fonts/
Description:  Outputs a list of fonts used on any front end page in the javascript console.
Version:      1.0.1
Author:       Andrija Naglic
Author URI:   https://upwork.com/fl/andrija
License:      GPL3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:  wp-which-fonts
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function wp_which__elite_enqueue_scripts(){
    
    if( current_user_can("update_core") ){
        wp_enqueue_script( 'wp-which-fonts', plugin_dir_url( __FILE__ ) . 'js/find_styles.js', array( 'jquery' ), '1.0.1', true );
    }
    
}
add_action( 'wp_enqueue_scripts', 'wp_which__elite_enqueue_scripts' );
