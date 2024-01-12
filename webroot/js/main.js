(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow');
            } else {
                $('.fixed-top').removeClass('shadow');
            }
        } else {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow').css('top', -55);
            } else {
                $('.fixed-top').removeClass('shadow').css('top', 0);
            }
        } 
    });
    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });


    // vegetable carousel
    $(".vegetable-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

})(jQuery);

var caption = $(this).closest('.input-upload').find('.js-img-caption').text().trim();
        var captionArr = caption.split(',');
        captionArr.splice(data_number, 1);

        if (captionArr.length == 0) {
            $(this).closest('.input-upload').find('.js-img-caption').text('ファイル未選択');
        } else {
            $(this).closest('.input-upload').find('.js-img-caption').text(captionArr.join(','));
        }

        if (sessionStorage.getItem('img_nameupload_application') !== null) {
            if (captionArr.length == 0) {
                sessionStorage.removeItem('img_nameupload_application');
            } else {
                sessionStorage.setItem('img_nameupload_application', captionArr.join(','));
            }
        } 
        
$('body').delegate(".js-delete-file" , 'click' , function (e) {
    var file = $(this).parent().data("file");
    var data_number = $(this).parent('.file-img').attr('data-number');
    var id = $(this).parent('.file-img').attr('data-id');
    var listImgDelete = $('.list-img-delete').attr('value');
    if (listImgDelete == '') {
        listImgDelete = [];
    } else {
        listImgDelete = JSON.parse(listImgDelete);
    }

    if (id !== undefined) {
        listImgDelete.push({"id": id, "name_file" : file});
    }

    if (sessionStorage.getItem('src_img_application') !== null) {
        var val_url = JSON.parse(sessionStorage.getItem('src_img_application'));
        val_url.splice(data_number, 1);
        if (val_url.length == 0) {
            sessionStorage.removeItem('src_img_application');
        } else {
            sessionStorage.setItem('src_img_application', JSON.stringify(val_url));
        }
    }

    var caption = $(this).closest('.input-upload').find('.js-img-caption').text().trim();
    var captionArr = caption.split(',');
    captionArr.splice(data_number, 1);

    if (captionArr.length == 0) {
        $(this).closest('.input-upload').find('.js-img-caption').text('ファイル未選択');
    } else {
        $(this).closest('.input-upload').find('.js-img-caption').text(captionArr.join(','));
    }

    if (sessionStorage.getItem('img_nameupload_application') !== null) {
        if (captionArr.length == 0) {
            sessionStorage.removeItem('img_nameupload_application');
        } else {
            sessionStorage.setItem('img_nameupload_application', captionArr.join(','));
        }
    }

    $('input[name="img_delete"]').attr('value', JSON.stringify(listImgDelete));
    $(this).parent().remove();

    $('.preview .file-img').each(function (index, item) {
        $(item).attr('data-number', index);
    });
});



