jQuery(document).ready(function ($) {
    $(document).find(".photogal").lightGallery({
        thumbnail: true,
        selector:'.image-selector',
        mode: 'lg-zoom-out',
        download: false,
        mousewheel: true,
    });
    // alert('asdasd');
});