
(function($) {
  
  'use strict';

  // variables
  var $isAnimatedSecond = $('.second .is-animated'),
      $isAnimatedSecondSingle = $('.second .is-animated__single');

  // initialize fullPage
  $('#fullpage').fullpage({

    // navigation: true,
    anchors: ['home', 'about', 'courses', 'schedule', 'n_e', 'contactus'],
            scrollOverflow: true,
            continuousVertical: false,
            menu: '#menu',
            navigation: false,
            navigationPosition: 'right',
            navigationTooltips: ['home', 'about', 'courses', 'schedule', 'news & events', 'contact us'],
            scrollOverflowOptions: {
                click: true
            },
    onLeave: function(index, nextIndex, direction) {
    
      /**
      * use the following condition: 
      *
      *   if( index == 1 && direction == 'down' ) {
      *
      * if you haven't enabled the dot navigation
      * or you aren't interested in the animations that occur 
      * when you jump (using the dot navigation) 
      * from the first section to another sections 
      */
      
      // first animation
      if( ( index == 1 || index == 2 ) && nextIndex == 3 ) { 
        $isAnimatedSecond.addClass('animated bounceIn'); 
        $isAnimatedSecond.eq(0).css('animation-delay', '.3s');
        $isAnimatedSecond.eq(1).css('animation-delay', '.6s');
        $isAnimatedSecond.eq(2).css('animation-delay', '.9s');
        $isAnimatedSecond.eq(3).css('animation-delay', '.12s');
        $isAnimatedSecond.eq(4).css('animation-delay', '.15s');
        $isAnimatedSecond.eq(5).css('animation-delay', '.18s');
        $isAnimatedSecond.eq(6).css('animation-delay', '.21s');
        $isAnimatedSecond.eq(7).css('animation-delay', '.24s');
        // $isAnimatedSecondSingle.addClass('animated rollIn').css('animation-delay', '1.7s');
      }

      // third animation
      else if( ( index == 1 || index == 2 ) && nextIndex == 3 ) {
        $isAnimatedFourth.addClass('animated zoomIn').css('animation-delay', '.6s');
        $isAnimatedFourthSingle.addClass('animated lightSpeedIn').css('animation-delay', '1.2s');
        $isAnimatedFourthSingle.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
          $(this).removeClass('lightSpeedIn').addClass('zoomOutDown');
        });
      }
    }

  });
  
})(jQuery);


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