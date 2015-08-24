<?php

function spark_scripts(){
	if (!is_admin()) {
		### jQuery, Condiitonizr, and Modernizr are loaded in the <head>.
		### Everything else should load at the end of the page, use TRUE for the 5th parameter of wp_register_script().

		// Deregister WordPress jQuery
		wp_deregister_script('jquery');

		//wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array(), '1.11.1', false);
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false);
		wp_enqueue_script('jquery');

		// Conditionizr
		wp_register_script('conditionizr', JSDIR.'/conditionizr.min.js', array(), '2.1.1', false);
		wp_enqueue_script('conditionizr');

		// Modernizr
		wp_register_script('modernizr', JSDIR.'/modernizr.custom.2.8.1.js', array(), '2.8.1', false);
		wp_enqueue_script('modernizr');

		// Main Stylsheet
		wp_register_style('css', STYLEDIR.'/style.css', false, '1.0');
		wp_enqueue_style('css');

		// Main Scripts
		wp_register_script('scripts', JSDIR.'/scripts.js', array('jquery'), '1.0', true);
		wp_enqueue_script('scripts');

		// Templates
		wp_register_script('template-default-js', JSDIR.'/tempalte-default.js', array('jquery'), '1.0', true);
	}
}

add_action('wp_enqueue_scripts','spark_scripts');
