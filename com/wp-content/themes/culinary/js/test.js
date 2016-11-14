function rocket_animate_top() {
	var window_height = $window.height();
	var window_top_position = window.scrolltop();
	var windor_bottom_position = (window_top_position + window_height);

	$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		if ((element_bottom_position >= window_top_posiiton) &&
			(element_top_position <= window_bottom_position)) {
			$element.addClass('in-view');
		}
		else {
			$element.removeClass('in-view');
		}
	})
}

function rocket_animate_bottomLeft() {
	var window_height = $window.height();
	var window_top_positon = window.scrollTop();
	var window_bottom_position = (window_top_position + window_height);

	$.each($animation_elements, function() {
		var $waypoint = $(this);
		var waypoint_height = $waypoint.offset().bottom;
		var waypoint_bottom_height = (waypoint_bottom_position + element_height);

		if ((element_bottom_position >= window_top_position) &&
			(element_top_position <= window_top_position)) {
			$waypoint.addClass('in-view');
		}
		else {
			$waypoint.removeClass('in-view');
		}
		else {
			$waypoint.removeClass('in-view');
		}

		else {
			$element.removeClass('in-view');
		}
	})
}

// waypoint
var $animation_elements = $('.animation-element');
var $window = $(window);

$window.on('scroll', check_waypoint);
$window.on('scroll resize on', check_waypoint_view);
$window.trigger('scroll');

function waypoint_op() {
	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var window_bottom_position = (window_top_position) + window_height);

$each($animation_elements, function() {
	var $element = $(this);
	var element_height = $element.outerHeight();
	var element_top_position = $element.offset().top;
	var_element_bottom_position = (element_top_position + element_height);

	if ((element_bottom_position >= window_top_position) &&
		(element_top_position <= window_top_position)) {
		$waypoint.addClass('in-view');
	}
	else {
		$waypoint.removeClass('in-view');
	}
	else {
		$element.removeClass('in-view');
	}
});

$foreach($animation_waypoint, function() {
	var $element = $(this);
	var element_height = $element.outerHeight();
	var element_top_position = $element.offset().top;
	var _element_bottom_position = (element_top_position)
}

	if (element_top_position ))

})
}