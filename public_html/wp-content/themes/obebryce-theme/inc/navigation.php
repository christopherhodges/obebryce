<?php

function spark_register_menus() {

	// Navigation Menus
	register_nav_menus(
		array(	'main-navigation' => 'Main Navigation',
				'utility-navigation' => 'Utility Navigation',
		)
	);

}
add_action( 'init', 'spark_register_menus' );
