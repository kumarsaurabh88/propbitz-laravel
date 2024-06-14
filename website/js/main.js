 
//========== Sticky menu

  $(window).on("scroll", function () {
    var heightFromTop = $(this).scrollTop();
    if (heightFromTop) {
      $('.header-area').addClass('stick');
    } else {
      $('.header-area').removeClass('stick');
    }
  });
  
  
  
//========== Sticky home logo

  $(window).on("scroll", function () {
    var heightFromTop = $(this).scrollTop();
    if (heightFromTop) {
      $('.logo-tagline').addClass('logo-stick');
    } else {
      $('.logo-tagline').removeClass('logo-stick');
    }
  });  



//================= mobile menu

if($('.menu-button').length){
  //Show Form
  $('.menu-button').on('click', function(e) {
    e.preventDefault();
    $('body').addClass('cosult-form-visible');
  });
  //Hide Form
  $('.cross-icon,.black-drop').on('click', function(e) {
    e.preventDefault();
    $('body').removeClass('cosult-form-visible');
  });
}




//================= mobile menu dropdown

$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});



//========== home banner 
        
$('.slider-nav').slick({
    pauseOnHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed:8500,
    focusOnSelect: true,
    speed: 1200,
    dots: true,
    appendDots: $('.slider-dots-box'),
    dotsClass: 'slider-dots',
});


// before slide change
$('.slider-nav').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  $('.slider-dots-box button').html('');
}).trigger('beforeChange');


// after slide change
$('.slider-nav').on('afterChange', function(event, slick, currentSlide){
  $('.slider-dots-box button').html('');
     $('.slider-dots-box .slick-active button')
         .html(`<svg class="progress-svg" width="40" height="40">
        <g transform="translate(20,20)">
            <circle class="circle-line" r="19" cx="0" cy="0"></circle>
            <circle class="circle-go" r="19" cx="0" cy="0"></circle>
            <text class="circle-tx" x="0" y="2" alignment-baseline="middle" stroke-width="0" text-anchor="middle">${(currentSlide || 0) + 1}</text>
        </g>
    </svg>`);
}).trigger('afterChange');




//=========== home stories slider

$('.stories-slider').slick({
    dots: true,
    slidesToShow: 3,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    pauseOnHover:false,
    arrows: false,
    centerMode: true,
    cssEase: "ease",
    speed: 1000,
    prevArrow: '<i class="fa fa-angle-left"></i>',
    nextArrow: '<i class="fa fa-angle-right"></i>',   
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:3,

      }
    },   

    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    },

  ]
  });  


$('.stories-slider').hover(function() {
    $(this).slick('slickPause');
}, function() {
    $(this).slick('slickPlay');
});


//=========== technology slider

$('#tech-slide-1 .slides-image').slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: "ease",
    speed: 1000,
    asNavFor: '#tech-slide-2 .slides-text'
});

$('#tech-slide-2 .slides-text').slick({
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: "ease",
    speed: 1000,
    asNavFor: ' #tech-slide-1 .slides-image',
    prevArrow: '<i class="techarrow-left"><img src="website/img/white-arrow.svg" alt="Arrow"></i>',
    nextArrow: '<i class="techarrow-right"><img src="website/img/white-arrow.svg" alt="Arrow"></i>',
});




//=========== blog deatil slider

$('.popular-slider').slick({
    dots: true,
    slidesToShow: 2,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    pauseOnHover:false,
    arrows: false,
    centerMode: true,
    cssEase: "ease",
    speed: 1000,   
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:2,

      }
    },   

    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    },

  ]
  });  



//=========== about certificate slider

$('.certificate-slider').slick({
    dots: true,
    slidesToShow: 4,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    pauseOnHover:false,
    arrows: false,
    speed: 1000,   
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:4,

      }
    },   

    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    },

  ]
  });  



//=========== about page history slider

$('.history-slider').slick({
    dots: false,
    slidesToShow: 3,
    infinite: true,
    autoplay: false,
    slidesToScroll: 1,
    infinite: true,
    pauseOnHover:false,
    arrows: true,
    speed: 1000,
    centerMode: true,
    cssEase: "ease",
    prevArrow: '<i class="history-arrow-left"><img src="website/img/right-arrow.png" alt="Arrow"></i>',
    nextArrow: '<i class="history-arrow-right"><img src="website/img/right-arrow.png" alt="Arrow"></i>',   
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:3,

      }
    },   

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    }

  ]
  }); 



//=========== rubber dam slider

$('.install-slider').slick({
    dots: false,
    slidesToShow: 2,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    pauseOnHover:false,
    arrows: true,
    centerMode: true,
    cssEase: "ease",
    speed: 1000,   
    prevArrow: $('.installarrow-left'),
    nextArrow: $('.installarrow-right'),
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:2,

      }
    },   

    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    },

  ]
  }); 




//=========== advantage slider

$('.advantage-slider').slick({
    dots: true,
    slidesToShow: 3,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    pauseOnHover:false,
    arrows: false,
    centerMode: true,
    cssEase: "ease",
    speed: 1000,
    prevArrow: '<i class="fa fa-angle-left"></i>',
    nextArrow: '<i class="fa fa-angle-right"></i>',   
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:3,

      }
    },   

    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    },

  ]
  });  




//=========== about project slider

$('.aboutproject-slider').slick({
    dots: true,
    slidesToShow: 1,
    infinite: true,
    autoplay: true,
    slidesToScroll: 1,
    pauseOnHover:false,
    arrows: false,
    cssEase: "ease",
    speed: 1500,
    prevArrow: '<i class="fa fa-angle-left"></i>',
    nextArrow: '<i class="fa fa-angle-right"></i>',   
     responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow:1,

      }
    },   

    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    },

  ]
  });  



//=========== button effect

$(function() {
    $('.butn-default').on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    }).on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    });
});




$(function() {
    $('.butn-transparent').on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    }).on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    });
});



$(function() {
    $('.butn-white').on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    }).on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    });
});



//==========  counter

$('.counter').counterUp({
  delay: 10,
  time: 1000
});



//========== career file upload bbtn

$("input[type=file]").change(function (e) {
  $(this).parents(".uploadFile").find(".filename").text(e.target.files[0].name);
});



//========== home career tab

$(".recr-content").click(function () {
  $(".recr-content").removeClass("active");
  $(this).addClass("active");
});




//==================== blog page Load More

$(document).ready(function(){
  $("#seeLess").hide();
  $(".post-items").slice(0,3).show();

  $("#seeMore").click(function(e){
    e.preventDefault();

    $(".post-items:hidden").slice(0,2).fadeIn("slow");

    if($(".post-items:hidden").length == 0){
      $("#seeMore").hide();
      $("#seeLess").show();
    }
  });

  $("#seeLess").click(function(e){
    $(".post-items").hide();
    $(".post-items").slice(0,3).show();
    $("#seeMore").show();
    $("#seeLess").hide();
  });

});



//==================== news page Load More

$(document).ready(function(){
  $("#newsLess").hide();
  $(".news-items").slice(0,4).show();

  $("#newsMore").click(function(e){
    e.preventDefault();

    $(".news-items:hidden").slice(0,4).fadeIn("slow");

    if($(".news-items:hidden").length == 0){
      $("#newsMore").hide();
      $("#newsLess").show();
    }
  });

  $("#newsLess").click(function(e){
    $(".news-items").hide();
    $(".news-items").slice(0,4).show();
    $("#newsMore").show();
    $("#newsLess").hide();
  });

});




//==================== project listing page Load More

$(document).ready(function(){
 
  if($(".project-items").length <= 4){
    $("#projectLess").hide();
    $("#projectMore").hide();
  }
  $("#projectLess").hide();
  $(".project-items").slice(0,4).show();

  $("#projectMore").click(function(e){
    e.preventDefault();

    $(".project-items:hidden").slice(0,2).fadeIn("slow");

    if($(".project-items:hidden").length == 0){
      $("#projectMore").hide();
      $("#projectLess").show();
    }
  });

  $("#projectLess").click(function(e){
    $(".project-items").hide();
    $(".project-items").slice(0,4).show();
    $("#projectMore").show();
    $("#projectLess").hide();
  });



});
jQuery(function ($) {
    $(".filters a")
        .click(function(e) {
            var link = $(this);

            var item = link.parent("span");
            
            if (item.hasClass("current")) {
                item.removeClass("current").children("a").removeClass("current");
            } else {
                item.addClass("current").children("a").addClass("current");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("current").parents("span").addClass("current");
                return false;
            }
        });
});






//=========== parallex video popup 

$(document).ready(function() {
// get video source from data-src button
var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);
// autoplay video on modal load  
$('#myModal').on('shown.bs.modal', function (e) {
// youtube iframe configuration and settings
$("#clientsvideo").attr('src',$videoSrc + "?autoplay=1&rel=0&controls=1&loop=1&modestbranding=1"); 
})
// stop playing the youtube video when modal closed
$('#myModal').on('hide.bs.modal', function (e) {
    // stop video
    $("#clientsvideo").attr('src',$videoSrc); 
}) 
});



//========== contact accord

$(document).ready(function () {
    $(".collapse").on('show.bs.collapse', function () {
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus").addClass("fas");
    }).on('hide.bs.collapse', function () {
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus").addClass("fas");
    });
});



//========== team page link fixed

$(window).scroll(function(){
  var pixel = $(window).scrollTop();
  if(pixel > 290){
    $('.teampage-links').addClass('fixed-teamtab');
  } else {
    $('.teampage-links').removeClass('fixed-teamtab');
  }
});



//========== team page link smooth scroll

$(document).on('click', '.teampage-tab ul li a', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 170
    }, 500);
});



//=========== project mix                               

$('.project-mixture').mixItUp();



//=========== project page tab effect 

const indicator = document.querySelector('.filter-indicator');
const items = document.querySelectorAll('.filter-item');

function handleIndicator(el) {
  items.forEach(item => {
    item.classList.remove('is-active');
    item.removeAttribute('style');
  });

  indicator.style.width = `${el.offsetWidth}px`;
  indicator.style.left = `${el.offsetLeft}px`;
  indicator.style.backgroundColor = el.getAttribute('active-color');

  el.classList.add('is-active');
  el.style.color = el.getAttribute('active-color');
}


items.forEach((item, index) => {
  item.addEventListener('click', e => {handleIndicator(e.target);});
  item.classList.contains('is-active') && handleIndicator(item);
});



//========== project page filter fixed

$(window).scroll(function(){
  var pixel = $(window).scrollTop();
  if(pixel > 300){
    $('.project-filter').addClass('fixed-projectfilter');
  } else {
    $('.project-filter').removeClass('fixed-projectfilter');
  }
});



//=========== about page vedio

$('#homeplayclik').on('click', function(ev) {
    $("#player")[0].src += "?autoplay=1&rel=0";
    ev.preventDefault();
});

$('#homeplayclik').click(function() {
    $('.aboutvideo-box').hide();
    $('#videochasingcontentt').show();
    // $('#chasingVideo').muted = false;
    //document.getElementById('homechasingVideo').play();
});



//========== smmoth Scroll 

$(".scroll-down").on("click", function (e) {
    var anchor = $(this);
    $("html, body").stop().animate({
        scrollTop: $(anchor.attr("href")).offset().top -80
    }, 700);
    e.preventDefault();
}); 



//====================Animation Effect
wow = new WOW(
  {
  boxClass:     'wow',      // default
  animateClass: 'animated', // default
  offset:       0,          // default
  mobile:       true,       // default
  live:         true        // default
}
)
wow.init();



// Source url capture

var sessionCheck = sessionStorage.getItem("sourceurlSession");
if(sessionCheck == null)
{
     sessionStorage.setItem("sourceurlSession", window.location.href);
     var urlinfield = document.getElementById("source_url").value = window.location.href;
}
else
{
  var urlinfield = document.getElementById("source_url").value = sessionCheck;
}
console.log('urlinfield:' + urlinfield);
console.log('sessionCheckvalue: ' + sessionCheck);

// Source url capture end









