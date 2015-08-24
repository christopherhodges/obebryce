<?php

	// Errors
	ini_set('display_startup_errors',1); ini_set('display_errors',1); error_reporting(-1);

	// Yo include your functions so they can be reused!
	// If the function is part of a module, include it here too!

	include 'inc/globals.php';
	include 'inc/wp-reset.php';
	include 'inc/database.php';
	include 'inc/spark_module.php';
	include 'inc/post-types.php';
	include 'inc/taxonomies.php';
	include 'inc/walkers.php';
	include 'inc/enqueue.php';
	include 'inc/image-sizes.php';
	include 'inc/shortcodes.php';
	include 'inc/excerpt.php';
	include 'inc/navigation.php';
	include 'inc/tinyMCE/tinymce.styles.php';
	include 'inc/options.php';
	include 'inc/ajax.php';


	function make_href_root_relative($input) {
		return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
	}
	function root_relative_permalinks($input) {
		return make_href_root_relative($input);
	}
	add_filter( 'the_permalink', 'root_relative_permalinks' );


