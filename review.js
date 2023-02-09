$(document).ready(function () {
  // Box slider function call. Provided options for the effect of the box slider. 
  $("#slider").bxSlider({
    auto: true,
    captions: false,
    minSlides: 1,
    maxSlides: 1, 
    slideWidth: 800,
    slideMargin: 10,
    adaptiveHeight: true,
    pause: 10000
  })
});