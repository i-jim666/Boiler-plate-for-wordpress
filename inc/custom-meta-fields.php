<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'custom_meta_fields' );
function custom_meta_fields() {
    // Show menu selection option in every page

    // $nav_menus = get_terms( 'nav_menu' );
    // $menu_names = [];

    // foreach($nav_menus as $item){
    //     $menu_names += [ $item->term_id => $item->name ];
    // }

    // Container::make( 'post_meta', 'Page menu' )
    //     ->where( 'post_type', '=', 'page' )
    //     ->set_context('side')
    //     ->add_fields( array(
    //         Field::make( 'select', 'page_menu',  __( 'Choose menu' ) )
    //             ->set_options( $menu_names )
    //     ));

    // Container::make( 'post_meta', 'MED logos' )
    //     ->where( 'post_type', '=', 'page' )
    //     ->set_context('side')
    //     ->add_fields( array(
    //         Field::make( 'complex', 'samarbete_logos',  __( 'Logos' ) )
    //             ->set_layout('tabbed-vertical')
    //             ->add_fields(array(
    //                 Field::make( 'image', 'samarbete_logo',  __( 'Logo' ) )
    //             ))
    //     ));
}

?>