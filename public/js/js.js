$(document).ready(function () {
  $("#single_item").slick({
    dots: false
  });

  $('#multiple_items').slick({
    dots:false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
  });

  $('#responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
     autoplay: true,
  });

  $('#variable_width').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });

  $('#adaptive_height').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });

  $('#center').slick({
    dots:false,
    centerMode: true,
    centerPadding: '30px',
    slidesToShow: 4,
    autoplay: true,
    slidesToScroll: 1,
    autoplaySpeed: 3000,
        responsive: [

     {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  
  ]
  });

  $('#lazy').slick({
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    responsive: [

     {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  
  ]

  });

  $('#autoplay').slick({
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    centerPadding: '80px',
        responsive: [

     {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  
  ]
  });

  $('#fade').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  var slideIndex = $('#add_remove >div').length;
  $('#add_remove').slick({
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  $('#add_slide').on('click', function () {
    slideIndex++;
    $('#add_remove').slick('slickAdd', '<div><h1>' + slideIndex + '</h1></div>');
  });
  $('#remove_slide').on('click', function () {
    $('#add_remove').slick('slickRemove', slideIndex - 1);
    if (slideIndex !== 0) {
      slideIndex--;
    }
  });
});




$('.filtering').slick({
  slidesToShow: 4,
  slidesToScroll: 4,
});

var filtered = false;

$('.js-filter').on('click', function(){
  if (filtered === false) {
    $('.filtering').slick('slickFilter',':even');
    $(this).text('Unfilter Slides');
    filtered = true;
  } else {
    $('.filtering').slick('slickUnfilter');
    $(this).text('Filter Slides');
    filtered = false;
  }
});