<?php
/*
	Plugin Name: Dollar fix
	Plugin URI: https://github.com/shakyjake/dollarfix
	description: Mitigates unscrupulous dollar jQuery assignation
	Version: 1.0
	Author: Jake Nicholson
	Author URI: https://github.com/shakyjake
	License: MIT
*/

wp_enqueue_script('dollarfix', esc_url(plugins_url('dollarfix.js', __FILE__)), array('jquery'), '1.0', true);

?>
