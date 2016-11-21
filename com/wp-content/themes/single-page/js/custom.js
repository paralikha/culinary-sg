// // Nav Dropdown
// jQuery('ul.nav li.dropdown').hover(function() {
//     jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
// },
// function() {
//     jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
// });

// // NiceScroll
// jQuery(document).ready(
//     function() {
//         jQuery("html").niceScroll();
//     }
// );

// //  materialize btn

// jQuery(function(){
//     var ink, d, x, y;
//     jQuery(".ripplelink").click(function(e){
//         if(jQuery(this).find(".ink").length === 0){
//             jQuery(this).prepend("<span class='ink'></span>");
//         }

//         ink = jQuery(this).find(".ink");
//         ink.removeClass("animate");

//         if(!ink.height() && !ink.width()){
//             d = Math.max(jQuery(this).outerWidth(), jQuery(this).outerHeight());
//             ink.css({height: d, width: d});
//         }

//         x = e.pageX - jQuery(this).offset().left - ink.width()/2;
//         y = e.pageY - jQuery(this).offset().top - ink.height()/2;

//         ink.css({top: y+'px', left: x+'px'}).addClass("animate");
//     });
// });


// jQuery(document).ready(function() {
//     var _age = getParameterByName('age');
//     var _class = getParameterByName('class');

//     if (_age != null) {
//         setTimeout(function() {
//             jQuery(document).find('select[name="age"], select[name="nf-field-18"]').val(_age);
//         }, 1000);
//     }

//     if (_class != null) {
//         setTimeout(function() {
//             jQuery(document).find('select[name="class"], select[name="nf-field-20"]').val(_class);
//         }, 1000);
//     }
// });

// function getParameterByName(name, url) {
//     if (!url) {
//       url = window.location.href;
//     }
//     name = name.replace(/[\[\]]/g, "\\$&");
//     var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
//         results = regex.exec(url);
//     if (!results) return null;
//     if (!results[2]) return '';
//     return decodeURIComponent(results[2].replace(/\+/g, " "));
// }

//fullpage
(function($) {
    'use strict';

    var $isAnimatedSecond = $('.second .is-animated'),
        $isAnimatedSecondSingle = $('.second .is-animated__single');

    $('#fullpage').fullpage({
        anchors: ['home', 'about', 'courses', 'schedules', 'news-events', 'contact'],
        scrollOverflow: true,
        continuousVertical: false,
        menu: '#mymenu',
        navigation: false,
        navigationPosition: 'right',
        css3: true,
        navigationTooltips: ['home', 'about', 'courses', 'schedules', 'news-events', 'contact'],
        scrollOverflowOptions: {
            click: true
        },
        // animate
        onLeave: function(index, nextIndex, direction) {
            if (( index == 1 || index == 2 ) && nextIndex == 3 ) {
                $isAnimatedSecond.addClass('animated bounceIn');
                $isAnimatedSecond.eq(0).css('animation-delay', '.3s');
                $isAnimatedSecond.eq(1).css('animation-delay', '.4s');
                $isAnimatedSecond.eq(2).css('animation-delay', '.5s');
                $isAnimatedSecond.eq(3).css('animation-delay', '.6s');
                $isAnimatedSecond.eq(4).css('animation-delay', '.7s');
                $isAnimatedSecond.eq(5).css('animation-delay', '.8s');
                // $isAnimatedSecondSingle.addClass('animated rollIn').css('animation-delay', '1.7s');
            }
        }
    });

    var link = $('.nav-link:contains("facebook"), .nav-link:contains("instagram"), .nav-link:contains("twitter"), .nav-link:contains("linkedin")');
    if(link) {
        link.html('<i class="fa fa-'+link.html()+'-square"></i>')
    }
})(jQuery);