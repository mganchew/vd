function initPhotoViewer(data) {
    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = data;

    // define options (if needed)
    var options = {
        // optionName: 'option value'
        // for example:
        index: 0 // start at first slide
    };

    // Initializes and opens PhotoSwipe
    var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
}

function getGalleryData() {
    $.ajax({
        type: 'GET',
        url: '/gallery',
        dataType: 'json',
        success: function (data) {
            initPhotoViewer(data);
        },
        error: function (data) {
            //
        }

    });
}


$(document).ready(function () {

    var gallery = $('#gallery');
    var phone = $('#phone');

    console.log(gallery);
    gallery.click(function (e) {
        e.preventDefault();
        getGalleryData();
    });

    phone.attr('href', 'registration');

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
        phone.attr('href', 'tel: 0888 88 88 88');
    }

});