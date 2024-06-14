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
  });

  



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
  var arrowContainer = `
    <div class="arrow-container">
      <button class="arrow pre-arrow"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  `;

  $(".trend-inner-slider").append(arrowContainer);

  $(".pre-arrow").click(function() {
    $(".trend-inner-slider").slick('slickPrev');
  });

  $(".next-arrow").click(function() {
    $(".trend-inner-slider").slick('slickNext');
  });


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
      '<button class="arrow-icon pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
    nextArrow:
      '<button class="arrow-icon next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',
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
      '<button class="arrow-icon pre-arrow">  <i class="fa-solid fa-arrow-left"></i> </button>',
    nextArrow:
      '<button class="arrow-icon next-arrow"> <i class="fa-solid fa-arrow-right"></i> </button>',
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





