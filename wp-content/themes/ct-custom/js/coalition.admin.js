jQuery(document).ready(function($){
	
	var mediaUploader;
	
	$('#upload-button').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a Custom Logo',
			button: {
				text: 'Choose Logo'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#custom_logo').val(attachment.url);
		});
		
		mediaUploader.open();
		
	});
	
});