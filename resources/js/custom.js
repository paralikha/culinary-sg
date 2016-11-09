// nicescroll
$(document).ready(
    function() { 
        $("html").niceScroll();
    }
);

//slickSlider
// $('.responsive').slick({
//   	dots: false,
//   	infinite: false,
//   	speed: 300,
//   	slidesToShow: 4,
//   	slidesToScroll: 4,
//   	responsive: [
//     	{
//       		breakpoint: 1024,
//       		settings: {
// 	        	slidesToShow: 3,
// 	        	slidesToScroll: 3,
// 	        	infinite: true,
// 	      	  	dots: true
// 	      	}
//     	},
// 	    {
// 	      	breakpoint: 600,
// 	      	settings: {
// 		        slidesToShow: 2,
// 		        slidesToScroll: 2
// 	      	}
// 	    },
// 	    {
// 	      	breakpoint: 480,
// 	      	settings: {
// 	        slidesToShow: 1,
// 	        slidesToScroll: 1
// 		    }
// 		}
//   	]
// });

// stickHeader
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});

// fadeOut when scroll
$(window).scroll(function(){
    $("#h-home").css("opacity", 1 - $(window).scrollTop() / 965);
});

// lightSlider
$(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:3,
        loop:false,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  
});