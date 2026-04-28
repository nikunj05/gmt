jQuery(document).ready(function ($) {
  if ($(".product-slider").length > 0) {
    $(".product-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: false,
      dots: true,
      infinite: true,
      loop: true,
      speed: 600,
      autoplay: true,
      centerMode: false,
      variableWidth: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  }
  if ($(".tools-slider").length > 0) {
    $(".tools-slider").slick({
      slidesToShow: 5,
      slidesToScroll: 3,
      arrows: false,
      dots: true,
      infinite: true,
      loop: true,
      speed: 600,
      autoplay: true,
      centerMode: false,
      variableWidth: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 390,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  }
});
