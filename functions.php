<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$includes = array(
	'/theme-setup.php',     // Initialize theme default settings.
    '/theme-options.php',   // Theme options
	'/custom-post-types.php', // Register custom post types
	'/custom-taxonomy.php', // Register custom taxonomies
	'/enqueue.php', // Enqueue elements
	'/custom-gutenberg-blocks.php', // Register gutenberg blocks
	// '/custom-meta-fields.php', // Register meta fields
);

foreach ( $includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

add_filter( 'wpcf7_mail_components', 'remove_blank_lines' );

function remove_blank_lines( $mail ) {
	if ( is_array( $mail ) && ! empty( $mail['body'] ) )
		$mail['body'] = preg_replace( '|\n\s*\n|', "\n\n", $mail['body'] );
	return $mail;
}

add_filter('wpcf7_autop_or_not', '__return_false');


?>