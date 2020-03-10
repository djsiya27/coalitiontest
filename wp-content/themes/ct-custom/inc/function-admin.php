<?php

function coalition_add_admin_page(){
	// Coalition Admin Page
	add_menu_page( 'Coalition Theme Options', 'Coalition', 'manage_options', 'coalition_test', 'coalition_theme_create_page', 'dashicons-admin-generic', 110 );





	//Activate custom settings
	
	add_action( 'admin_init', 'coalition_custom_settings');
	
}


add_action( 'admin_menu', 'coalition_add_admin_page');


function coalition_custom_settings(){

	register_setting( 'coalition-settings-group', 'custom_logo');
	register_setting( 'coalition-settings-group', 'address_title');
	register_setting( 'coalition-settings-group', 'street');
	register_setting( 'coalition-settings-group', 'state');
	register_setting( 'coalition-settings-group', 'phone_number');
	register_setting( 'coalition-settings-group', 'fax_number');
	register_setting( 'coalition-settings-group', 'facebook');
	register_setting( 'coalition-settings-group', 'twitter');
	register_setting( 'coalition-settings-group', 'linkedin');
	register_setting( 'coalition-settings-group', 'pinterest');


	add_settings_section( 'coalition-sidebar-options', 'Sidebar Options', 'coalition_sidebar_options', 'coalition_test' );

	
	add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'coalition_sidebar_profile', 'coalition_test', 'coalition-sidebar-options');
	add_settings_field( 'sidebar-title', 'Address Title', 'coalition_sidebar_title', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-street', 'Street', 'coalition_sidebar_street', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-state', 'State', 'coalition_sidebar_state', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-phone', 'Phone Number', 'coalition_sidebar_phone', 'coalition_test', 'coalition-sidebar-options' );
	
	
	
	add_settings_field( 'sidebar-fax', 'Fax Number', 'coalition_sidebar_fax', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-facebook', 'Facebook ', 'coalition_sidebar_facebook', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-twitter', 'Twitter ', 'coalition_sidebar_twitter', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-linkedin', 'Linkedin ', 'coalition_sidebar_linkedin', 'coalition_test', 'coalition-sidebar-options' );
	add_settings_field( 'sidebar-pinterest', 'Pinterest ', 'coalition_sidebar_pinterest', 'coalition_test', 'coalition-sidebar-options' );
}


function coalition_sidebar_options(){
	echo 'Customize your Sidebar Information';
}

function coalition_sidebar_profile() {
	$logo = esc_attr( get_option( 'custom_logo' ) );
	echo '<input type="button" class="button button-secondary" value="Upload Custom Logo" id="upload-button"><input type="hidden" id="custom-logo" name="custom_logo" value="'.$logo.'" />';
}


function coalition_sidebar_title(){

	$addressTitle = esc_attr( get_option('address_title') );
	echo '<input type="text" name="address_title" value="'.$addressTitle.'" placeholder="Address Title" />';
}

function coalition_sidebar_street(){

	$street = esc_attr( get_option('street') );
	echo '<input type="text" name="street" value="'.$street.'" placeholder="Street" />';
}

function coalition_sidebar_state(){

	$state = esc_attr( get_option('state') );
	echo '<input type="text" name="state" value="'.$state.'" placeholder="State" />';
}

function coalition_sidebar_phone(){

	$phoneNumber = esc_attr( get_option('phone_number') );
	echo '<input type="text" name="phone_number" value="'.$phoneNumber.'" placeholder="Phone Number" />';
	
}

function coalition_sidebar_fax(){

	$faxNumber = esc_attr( get_option('fax_number') );
	echo '<input type="text" name="fax_number" value="'.$faxNumber.'" placeholder="Fax Number" />';
	
}

function coalition_sidebar_facebook(){

	$facebook = esc_attr( get_option('facebook') );
	echo '<input type="text" name="facebook" value="'.$facebook.'" placeholder="Facebook " />';
	
}

function coalition_sidebar_twitter(){

	$twitter = esc_attr( get_option('twitter') );
	echo '<input type="text" name="twitter" value="'.$twitter.'" placeholder="Twitter " />';
	
}

function coalition_sidebar_linkedin(){

	$linkedin = esc_attr( get_option('linkedin') );
	echo '<input type="text" name="linkedin" value="'.$linkedin.'" placeholder="Linkedin" />';
	
}

function coalition_sidebar_pinterest(){

	$pinterest = esc_attr( get_option('pinterest') );
	echo '<input type="text" name="pinterest" value="'.$pinterest.'" placeholder="Pinterest" />';
	
}


function coalition_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/coalition-admin.php');
}

