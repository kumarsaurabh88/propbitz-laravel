//====================
$(document).ready(function () {
$(".trending-sliders").slick({
dots: true,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
centerMode: true,
centerPadding: '100px',
autoplay: true,
slidesToShow: 3,
slidesToScroll: 1,
prevArrow:
'<button class="arrow pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
nextArrow:
'<button class="arrow next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',
responsive: [
{
breakpoint: 1200,
settings: {
slidesToShow: 2,
},
},
{
breakpoint: 850,
settings: {
slidesToShow: 1,
},
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
},
},
],

});





// $(".trend-inner-slider").slick({
// dots: true,
// infinite: true,
// arrows: false,
// cssEase: "ease",
// speed: 1000,
// autoplay: true,
// slidesToShow: 1,
// slidesToScroll: 1
// });
// var arrowContainer = `
// <div class="arrow-container">
//    <button class="arrow pre-arrow"><i class="fa-solid fa-arrow-left"></i></button>
//    <button class="arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>
// </div>
// `;
// $(".trend-inner-slider").append(arrowContainer);
// $(".pre-arrow").click(function() {
// $(".trend-inner-slider").slick('slickPrev');
// });
// $(".next-arrow").click(function() {
// $(".trend-inner-slider").slick('slickNext');
// });


// load more

$(document).ready(function(){
  function initializeSlick() {
    $(".trend-inner-slider").slick({
      dots: true,
      infinite: true,
      arrows: false,
      cssEase: "ease",
      speed: 1000,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }
  initializeSlick();
  var arrowContainer = `
  <div class="arrow-container">
    <button class="arrow pre-arrow"><i class="fa-solid fa-arrow-left"></i></button>
    <button class="arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>
  </div>
  `;
  $(".trend-inner-slider").append(arrowContainer);
  $(document).on('click', '.pre-arrow', function() {
    $(".trend-inner-slider").slick('slickPrev');
  });

  $(document).on('click', '.next-arrow', function() {
    $(".trend-inner-slider").slick('slickNext');
  });
  $(".filter-data").slice(0, 6).show();
  $("#filter-more").on("click", function(e){
    e.preventDefault();
    $(".filter-data:hidden").slice(0, 5).slideDown();
    $(".trend-inner-slider").slick('unslick'); 
    initializeSlick(); 
    $(".trend-inner-slider").append(arrowContainer);
  });
});

// 

$(".counter-count").each(function () {
$(this)
.prop("Counter", 0)
.animate(
{
Counter: $(this).text(),
},
{
//chnage count up speed here
duration: 9000,
easing: "swing",
step: function (now) {
$(this).text(Math.ceil(now));
},
}
);
});
$(".intelligence-box").slick({
dots: true,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
centerMode: true,
centerPadding: '40px',
autoplay: true,
slidesToShow: 5,
slidesToScroll: 1,
prevArrow:
'<button class="arrow pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
nextArrow:
'<button class="arrow next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',


responsive: [
{
breakpoint: 1200,
settings: {
slidesToShow: 3,
},
},
{
breakpoint: 1050,
settings: {
slidesToShow: 2,
},
},

{
breakpoint: 768,
settings: {
slidesToShow: 1,
},
},


{
breakpoint: 480,
settings: {
slidesToShow: 1,
},
},
],


});




$(".featured-slider").slick({
dots: false,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
autoplay: true,
slidesToShow: 3,
slidesToScroll: 1,
prevArrow:
'<button class="arrow-icon pre-arrow">  <i class="fa-solid fa-angle-left"></i> </button>',
nextArrow:
'<button class="arrow-icon next-arrow"> <i class="fa-solid fa-angle-right"></i> </button>',

responsive: [
{
breakpoint: 1200,
settings: {
slidesToShow: 2,
},
},
{
breakpoint: 768,
settings: {
slidesToShow: 1,
},
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
},
},
],


});



$(".testimonial-slider").slick({
dots: false,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
autoplay: true,
slidesToShow: 1,
slidesToScroll: 1,
prevArrow:
'<button class="arrow-icon pre-arrow"> <i class="fa-solid fa-angle-left"></i> </button>',
nextArrow:
'<button class="arrow-icon next-arrow"><i class="fa-solid fa-angle-right"></i></button>',
});



$(".recent-slider").slick({
dots: true,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
autoplay: true,
slidesToShow: 3,
slidesToScroll: 1,
prevArrow:
'<button class="arrow pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
nextArrow:
'<button class="arrow next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',
responsive: [
{
breakpoint: 993,
settings: {
slidesToShow: 2,
},
},
{
breakpoint: 768,
settings: {
slidesToShow: 1,
},
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
},
},
],
});
$(".life-slider").slick({
dots: true,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
autoplay: true,
slidesToShow: 3,
slidesToScroll: 1,
prevArrow:
'<button class="arrow pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
nextArrow:
'<button class="arrow next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',
responsive: [
{
breakpoint: 993,
settings: {
slidesToShow: 2,
},
},
{
breakpoint: 768,
settings: {
slidesToShow: 2,
},
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
},
},
],
});
$(".interior-slider").slick({
dots: true,
infinite: true,
arrows: true,
cssEase: "ease",
speed: 1000,
autoplay: true,
slidesToShow: 3,
centerMode: true,
centerPadding: '0px',
slidesToScroll: 1,
prevArrow:
'<button class="arrow pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
nextArrow:
'<button class="arrow next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',
responsive: [
{
breakpoint: 993,
settings: {
slidesToShow: 3,
},
},
{
breakpoint: 768,
settings: {
slidesToShow: 2,
},
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
},
},
],
});
});
// Select all elements with the class name 'play_button'
var playButtons = document.getElementsByClassName("play_button");
// Function to handle play/pause for a video
function togglePlayPause(event) {
// Find the closest video element (assumes video and button are siblings or close in hierarchy)
var video = event.target.closest('.video_container').getElementsByClassName("video")[0];
if (video.paused == true) {
// Play the video
video.play();
event.target.classList.add("hide");
} else {
// Pause the video
video.pause();
// Update the button text to 'Play'
event.target.innerHTML = '<img src="images/play-icon.png" alt="Play Button" style="width: 26px; display: inline;"/> PLAY VIDEO';
event.target.classList.remove("hide");
}
}
// Add event listeners to all play buttons
for (var i = 0; i < playButtons.length; i++) {
playButtons[i].addEventListener("click", togglePlayPause);
}
$(document).ready(function(){
$('.dropdown-toggles').click(function(){
$('.city-section').not($(this).next('.city-section')).removeClass('active-drowdown');
$(this).next('.city-section').toggleClass('active-drowdown');
});
});
// price range 
const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider .progress");
let priceGap = 1000;
priceInput.forEach((input) => {
input.addEventListener("input", (e) => {
let minPrice = parseInt(priceInput[0].value),
maxPrice = parseInt(priceInput[1].value);
if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
if (e.target.className === "input-min") {
rangeInput[0].value = minPrice;
range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
} else {
rangeInput[1].value = maxPrice;
range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
}
}
});
});
rangeInput.forEach((input) => {
input.addEventListener("input", (e) => {
let minVal = parseInt(rangeInput[0].value),
maxVal = parseInt(rangeInput[1].value);
if (maxVal - minVal < priceGap) {
if (e.target.className === "range-min") {
rangeInput[0].value = maxVal - priceGap;
} else {
rangeInput[1].value = minVal + priceGap;
}
} else {
priceInput[0].value = minVal;
priceInput[1].value = maxVal;
range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
}
});
});
//No Banner
var bannerClass = document.getElementsByClassName("banner-area");
if (!bannerClass.length) {
document.querySelector("body").classList.add("no-banner");
}
wow = new WOW(
{
animateClass: 'animated',
offset: 100
}
);
wow.init();

// mobile toggle
/* Mobile toggle  */

$(".menu-toggler").click(function () {
  $("body").toggleClass("active-menu");
});

$(".mobile-overlay,  .aside-trigger").click(function () {
  $("body").removeClass("active-menu");
});



$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".smoothscroll-up").fadeIn();
  } else {
    $(".smoothscroll-up").fadeOut();
  }
});
$(".smoothscroll-up").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 600);
  return false;
});



$(window).on("scroll", function () {
  var heightFromTop = $(this).scrollTop();
  if (heightFromTop) {
    $(".header").addClass("header-sticky");
  } else {
    $(".header").removeClass("header-sticky");
  }
});




//slider 

 $(document).ready(function() {
    $('.videos-slider-2').slick({
        autoplay: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        arrows: true,
        dots: true,
        asNavFor: '.slider-nav-thumbnails',
        appendArrows: $('.appenddots'),
        prevArrow: '<button class="arrow pre-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button class="arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>',
    });
});

    $('.slider-nav-thumbnails').slick({
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.videos-slider-2',
        dots: false,
          arrows: false,
        focusOnSelect: true,
        variableWidth: true
    });

    // Remove active class from all thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

    // Set active class to first thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

    // On before slide change match active thumbnail to current slide
    $('.videos-slider-2').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
        $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
        $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
    });



 
    // signup
//No Banner

var signClass = document.getElementsByClassName("signup-area");
if (signClass.length) {
  document.querySelector("body").classList.add("no-footer");
}

    // 


 const rangeInputs = document.querySelectorAll('input[type="range"]')
const numberInput = document.querySelector('input[type="number"]')
let isRTL = document.documentElement.dir === 'rtl'

function handleInputChange(e) {
  let target = e.target
  if (e.target.type !== 'range') {
    target = document.getElementById('range')
  } 
  const min = target.min
  const max = target.max
  const val = target.value
  let percentage = (val - min) * 100 / (max - min)
  if (isRTL) {
    percentage = (max - val) 
  }
  
  target.style.backgroundSize = percentage + '% 100%'
}

rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
})

numberInput.addEventListener('input', handleInputChange)

// Handle element change, check for dir attribute value change
function callback(mutationList, observer) {  mutationList.forEach(function(mutation) {
    if (mutation.type === 'attributes' && mutation.attributeName === 'dir') {
      isRTL = mutation.target.dir === 'rtl'
    }
  })
}

// Listen for body element change
const observer = new MutationObserver(callback)
observer.observe(document.documentElement, {attributes: true})

rangeSlider();



// load More



