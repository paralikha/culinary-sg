//fullpage
$(document).ready(function() {
    $('#fullpage').fullpage({
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
    });
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