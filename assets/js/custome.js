$('.slider-single').slick({
    mobileFirst: true,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});

$('.slider-nav')
    .on('init', function (event, slick) {
        $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
        
        slidesToShow: 11,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: false,
        infinite: false,        
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        }, {
            breakpoint: 640,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        }, {
            breakpoint: 420,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }]
    });

$('.slider-single').on('afterChange', function (event, slick, currentSlide) {
    $('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
});

$('.slider-nav').on('click', '.slick-slide', function (event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');

    $('.slider-single').slick('slickGoTo', goToSingleSlide);
});


/* App Download */

$('.appDownload-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    centerMode: true,    
    variableWidth: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100,    
    arrows: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
});
     


/* Magnific Popup */
$('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
       
    }
});

/* Magnific Popup Model*/

$('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,
    
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
});

$('.popup-with-move-anim').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,
    
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-slide-bottom'
});
/* Loader */

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});


$('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
  });


  $( function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "D " + ui.values[ 0 ] + " - D " + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "D " + $( "#slider-range" ).slider( "values", 0 ) +
        " - D " + $( "#slider-range" ).slider( "values", 1 ) );
} );


/* login Popup */
$('.login-options').css({'left':0 + '%', 'opacity': 1});
$('.btn-personal').on('click', function(){            
    $('.login-options').css({'left':100 + '%', 'opacity': 0});
    $('.login-personal').css({'left':0 + '%', 'opacity': 1});
    $('.personal_forget').css({'left':100 + '%', 'opacity': 0})
});
$('.btn-agency').on('click', function(){            
    $('.login-options').css({'left':100 + '%', 'opacity': 0});
    $('.login-agency').css({'left':0 + '%', 'opacity': 1});            
});
$('.login_back').on('click', function(){            
    $('.login-options').css({'left':0 + '%', 'opacity': 1});
    $('.login-personal').css({'left':100 + '%', 'opacity': 0});
    $('.login-agency').css({'left':100 + '%', 'opacity': 0});
});
$('.personal_forget_password').on('click', function(){
    $('.login-personal').css({'left':100 + '%', 'opacity': 0});            
    $('.personal_forget').css({'left':0 + '%', 'opacity': 1})
});       
$('.personal_forget_back').on('click', function(){
    $('.personal_forget').css({'left':100 + '%', 'opacity': 0});
    $('.login-options').css({'left':100 + '%', 'opacity': 0});
    $('.login-personal').css({'left':0 + '%', 'opacity': 1});            
});
$('.agency_forget_password').on('click', function(){
    $('.login-agency').css({'left':100 + '%', 'opacity': 0});            
    $('.agency_forget').css({'left':0 + '%', 'opacity': 1})
});       
$('.agency_forget_back').on('click', function(){
    $('.agency_forget').css({'left':100 + '%', 'opacity': 0});
    $('.login-options').css({'left':100 + '%', 'opacity': 0});
    $('.login-agency').css({'left':0 + '%', 'opacity': 1});            
});



$('#notInterested').click(function(){
    if($(this).is(":checked")){       
        $('.not_interested').show();
        $('.interested').hide();
    }
    else if($(this).is(":not(:checked)")){        
        $('.interested').show();
        $('.not_interested').hide();
    }
});





 $('#sidebar_menu  a').filter(function(){
            return this.href==location.href
        }).parent().addClass('active').siblings().removeClass('active');

$('#sidebar_menu ul a').click(function(){
    $(this).parent().addClass('active').siblings().removeClass('active')    
});