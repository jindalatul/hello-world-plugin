<?php
/**
 * Plugin Name:       Hello World Plugin
 * Plugin URI:        https://example.com/plugins/demo-plugin/
 * Description:       A basic plugin built using ReactJS library.
 * Version:           1.0.0
 * @package Demo Plugin
 */

add_action( 'admin_menu', 'dp_add_menu' );

function dp_add_menu() {
	add_menu_page(
		'Demo Plugin',
		'Demo Plugin',
		'manage_options',
		'demo_plugin',
		'dp_render_page',
		'',
		'2'
	);
}

function dp_render_page() 
{
	//include_once 'templates/page-template.php';
    echo'<div>
	<h1>Demo Plugin</h1>
	<div id="root">
		Loading ...
	</div>
</div>';

}


add_action( 'admin_enqueue_scripts', 'dp_add_assets' );

function dp_add_assets() {
	wp_enqueue_script( 'demo_plugin', plugin_dir_url( __FILE__ ) . 'build/main.js' );
}
