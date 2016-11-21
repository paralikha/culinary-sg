jQuery(document).ready(function ($) {
	$(document).find('[data-datetimepicker]').datetimepicker({
        // hourGrid : 4,
        // minuteGrid : 10,
        timeFormat: "hh:mm tt",
    });
});

(function($){
    $(window).on("load",function(){
        $(".sched-content").mCustomScrollbar({
            axis: "x"
        });
    });
})(jQuery);