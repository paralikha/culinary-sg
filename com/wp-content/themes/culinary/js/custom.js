// Nav Dropdown
jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
},
function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// NiceScroll
jQuery(document).ready(
    function() {
        jQuery("html").niceScroll();
    }
);

// lightSlider
jQuery(document).ready(function() {
    jQuery('#imageGallery').lightSlider({
        gallery:true,
        item:3,
        loop:true,
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

// lightslider
jQuery(document).ready(function() {
    jQuery('#imageSLider')
})

//  materialize btn

jQuery(function(){
    var ink, d, x, y;
    jQuery(".ripplelink").click(function(e){
        if(jQuery(this).find(".ink").length === 0){
            jQuery(this).prepend("<span class='ink'></span>");
        }

        ink = jQuery(this).find(".ink");
        ink.removeClass("animate");

        if(!ink.height() && !ink.width()){
            d = Math.max(jQuery(this).outerWidth(), jQuery(this).outerHeight());
            ink.css({height: d, width: d});
        }

        x = e.pageX - jQuery(this).offset().left - ink.width()/2;
        y = e.pageY - jQuery(this).offset().top - ink.height()/2;

        ink.css({top: y+'px', left: x+'px'}).addClass("animate");
    });
});


AOS.init({
    easing: 'ease-in-out-sine'
});


jQuery(document).ready(function() {
    var _age = getParameterByName('age');
    var _class = getParameterByName('class');

    if (_age != null) {
        setTimeout(function() {
            jQuery(document).find('select[name="age"], select[name="nf-field-18"]').val(_age);
        }, 1000);
    }

    if (_class != null) {
        setTimeout(function() {
            jQuery(document).find('select[name="class"], select[name="nf-field-20"]').val(_class);
        }, 1000);
    }
});

function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}