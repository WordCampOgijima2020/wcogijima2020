<?php
add_action( 'wp_enqueue_scripts', function() {
	$time = get_theme_file_uri( '/src/css/style.css' );
	wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wcogijima2020', get_theme_file_uri( '/src/css/style.css' ), ['twentytwenty-style'], $time );
} );

function mytheme_admin_bar() {
	echo '<style type="text/css">
	#wpadminbar {
		background: #eb8f22;
	}
	</style>';
}
add_action( 'wp_head', 'mytheme_admin_bar' );