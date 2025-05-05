$(function(){
  $('.slider-inner').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2200,
      touchMove: false,
      prevArrow: '<button id="prev" class="slider-button prev"><img class="arrow" src="images/logo/left-arrow.png"></button>',
      nextArrow: '<button id="next" class="slider-button next"><img class="arrow" src="images/logo/right-arrow.png"></button>',
      responsive: [
          {
              breakpoint: 1801,
              settings:{
                  slidesToShow: 4,
              }
          },
          {
              breakpoint: 1441,
              settings:{
                  slidesToShow: 3,
              }
          },
          {
              breakpoint: 981,
              settings:{
                  slidesToShow: 2,
              }
          
          },
          {
              breakpoint: 781,
              settings:{
                  slidesToShow: 1,
              }
          
          }
      ]
});
});
	