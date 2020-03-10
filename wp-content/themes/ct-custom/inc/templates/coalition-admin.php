<h1>Coalition Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'coalition-settings-group' ); ?>
	<?php do_settings_sections( 'coalition_test' ); ?>
	<?php submit_button(); ?>
</form>