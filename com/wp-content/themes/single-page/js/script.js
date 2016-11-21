jQuery(document).ready(function ($) {
	$(document).find('[data-img]').each(function () {
		var background = $(this).data('img');
		$(this).css({'background-image': 'url('+background+')'});
	});
});