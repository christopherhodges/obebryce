<?php
function spark_enqueue_scripts(){
	//wp_enqueue_script('jqueryui');
}
add_action('wp_enqueue_scripts', 'spark_enqueue_scripts');


get_header();

// Loop
if ( have_posts() ) :

    while ( have_posts() ) : the_post();

		spark_module( 'post/archived-post.php' );

    endwhile;

else :

    echo 'Not Found.';

endif;


get_sidebar();
get_footer();
