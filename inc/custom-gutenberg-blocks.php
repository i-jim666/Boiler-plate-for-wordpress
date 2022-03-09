<?php
use Carbon_Fields\Container;
use Carbon_Fields\Block;
use Carbon_Fields\Field;

// Blocks style for better UI
add_action('admin_head', function(){
    echo "
    <style>
    .cf-block__fields {
        padding: 30px;
	}
	
    .block-editor-block-list__block:nth-child(even){
		background-color: #eff4fc;
	}
	.block-editor-block-list__block:nth-child(odd){
		background-color: rgba(16, 49, 107, 0.01);
	}
	
    </style>
    ";
});



add_action( 'carbon_fields_register_fields', 'custom_gutenberg_components' );
function custom_gutenberg_components() {

    Block::make( __( 'Hero' ) )
        ->set_icon('star-filled')
        ->add_fields( array(
          
            Field::make( 'text', 'title', __( 'Title' ) ),

        ) )
        ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {		
            setData($fields);
            get_template_part( 'components/hero' );            
        } );


}
?>