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



// animation
(function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

}).call(this);


wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100
  }
);
wow.init();
