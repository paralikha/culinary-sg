jQuery(document).ready(function ($) {
	$(document).on("click", ".button-media", function (e) {
		e.preventDefault();

		var $button = $(this);
        var $target = $button.data('target') ? $($button.data('target')) : null;
        var title = $button.data('title') ? $button.data('title') : "Select or upload image";

		// Create the media frame.
        var wpmedia = wp.media.frames.file_frame = wp.media({
        	title: title,
        	library: { // remove these to show all
            	type: 'image' // specific mime
         	},
         	button: {
            	text: 'Select'
         	},
         	multiple: false  // Set to true to allow multiple files to be selected
      	});

      	wpmedia.on('select', function () {
      		var attachment = wpmedia.state().get('selection').first().toJSON();
         	$button.siblings('input').val(attachment.url);
            $button.siblings('img').attr("src", attachment.url);
      	});

      	// Open the modal
      	wpmedia.open();
	});
});