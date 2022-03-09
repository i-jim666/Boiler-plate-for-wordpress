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



add_action( 'wp_ajax_nopriv_check_company', 'check_company_api' );
add_action( 'wp_ajax_check_company', 'check_company_api' );

function check_company_api() {

    $str = $_POST['number'];
	$curl = curl_init();

    curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.companieshouse.gov.uk/company/'.$_POST['number'].'',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
		  'Authorization: Basic c2hURVp4TURaRXdZNEJmZjk2M29IWkk3TV9IbVozaWFhbkdBSkVtTjo6'
		),
	  ));

    $response = curl_exec($curl);

    curl_close($curl);
    
    echo json_encode($response);
	
	exit(0);
}




add_action( 'wp_ajax_nopriv_check_directors', 'check_directors' );
add_action( 'wp_ajax_check_directors', 'check_directors' );

function check_directors() {

	$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.companieshouse.gov.uk/company/'.$_POST['number'].'/officers?start_index=0',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Authorization: Basic c2hURVp4TURaRXdZNEJmZjk2M29IWkk3TV9IbVozaWFhbkdBSkVtTjo6'
        ),
      ));

    $response = curl_exec($curl);

    curl_close($curl);
    
    echo json_encode($response);
	
	exit(0);
}



?>