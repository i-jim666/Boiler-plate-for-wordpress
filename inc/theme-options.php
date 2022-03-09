<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'custom_theme_options' );
function custom_theme_options() {
    
    $basic_options_container = Container::make( 'theme_options', __( 'Theme Options' ) )
    ->set_icon('dashicons-admin-tools')
    ->set_page_menu_position( 3 )
    ->add_tab( __( 'General' ), array(
        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
        Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
    ) );

}


?>