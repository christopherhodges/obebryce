<?php

	function spark_enqueue_scripts(){
		wp_enqueue_script('template-default-js');
	}

	add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');

	// header.php
	get_header();


	// Loop
	if ( have_posts() ) :

	    while ( have_posts() ) : the_post();


	    endwhile;

	else :

	    echo 'Not Found.'

	endif;


	// Footer
	get_footer();