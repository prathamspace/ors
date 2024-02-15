$('#mode').click(function () {
    console.log('first');
    $('body').toggleClass('bodyDark');
    $('h1').toggleClass('headingDark');
    $('h2').children().toggleClass('headingDark');
})

$('#contactme>label').addClass('form-label');
$('.wpcf7-form-control').addClass('form-control');
$('.wpcf7-submit').addClass('btn btn-light');


$(document).ready(function () {
    $('.skillsSlider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        variableWidth: true
    });
});


$('.navbar-toggler').click(function () {
    $("#navigation").addClass('mobileMenu')
});





$(window).scroll(
    function () {
        if (window.scrollY > 0) {
            $('#header').addClass('stickyHeader')
            console.log('first')
        }
        else{
            $('#header').removeClass('stickyHeader')
        }
    }
)