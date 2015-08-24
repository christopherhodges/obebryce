<?php

################################
#	START demo
################################

/*

function spark_register_demo() {

	$cpt_single = 'Demo';
	$cpt_plural = 'Demos';
	$cpt_icon = 'dashicon-post';
	$rewrite =  array('slug' => 'demo', 'with_front' => true);
	$exclude_from_search = false;

	// Admin Labels
  	$labels = array(
            'name'               => __( $cpt_plural,                                'spark' ),
            'singular_name'      => __( $cpt_single,                                'spark' ),
            'add_new'            => __( 'Add New '.$cpt_single,                     'spark' ),
            'add_new_item'       => __( 'Add New '.$cpt_single,                     'spark' ),
            'edit_item'          => __( 'Edit '.$cpt_single,                        'spark' ),
            'new_item'           => __( 'New '.$cpt_single,                         'spark' ),
            'all_items'          => __( 'All '.$cpt_plural,                         'spark' ),
            'view_item'          => __( 'View '.$cpt_single.' Page',                'spark' ),
            'search_items'       => __( 'Search '.$cpt_plural,                      'spark' ),
            'not_found'          => __( 'No '.$cpt_plural.' found',                 'spark' ),
            'not_found_in_trash' => __( 'No '.$cpt_plural.' found in the Trash',    'spark' ),
            'parent_item_colon'  => '',
            'menu_name'          => $cpt_plural
        );

  	// Arguments
	$args = array(
        'labels'        	  => $labels,
        'description'   	  => __('Manage '.$cpt_plural,                      'spark'),
        'public'        	  => true,
        'menu_position' 	  => 10,
        'hierarchical'		  => true,
        'supports'      	  => array( 'title', 'editor', 'page-attributes', 'thumbnail', 'excerpt' ),
        'has_archive'   	  => true,
        'menu_icon'			  => $cpt_icon,
        'rewrite'       	  => $rewrite,
        'exclude_from_search' => $exclude_from_search
    );

	// Just do it
	register_post_type( 'demo', $args );
}

// Hook into the 'init' action
add_action( 'init', 'spark_register_demo', 0 );

*/

################################
#	END demo
################################