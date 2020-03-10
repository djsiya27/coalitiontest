<?php

function coalition_load_admin_scripts(){
    
	

	
	wp_enqueue_media();
	wp_register_script( 'coalition-admin-script', get_template_directory_uri() . '/js/coalition.admin.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'coalition-admin-script' );
    
   
	
}
add_action( 'admin_enqueue_scripts', 'coalition_load_admin_scripts' );