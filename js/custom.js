
$(document).ready(function(){

  // Counter
   if ($(".counter")[0]) {
      $('.counter').counterUp({
      delay: 10,
      time: 3000
    });
  }

  /*slider-home 1-for*/
  if ($(".slider-for-two")[0]){
  $('.slider-for-two').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true

    });
  } 
 /*slider-home 1*/ 
  if ($(".slider-nav-two")[0]){
    $('.slider-nav-two').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for-two',
      dots: false,
      focusOnSelect: true,

    });
  }


/*slider home 3 */
  if ($(".slider-for-three")[0]){
    $('.slider-for-three').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false
    });
  }
/*slider home 3 */
  if ($(".slider-nav-three")[0]){
    $('.slider-nav-three').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for-three',
      dots: false,
      focusOnSelect: true,

    });
  }
/*slider home 2 */
  if ($(".your-class")[0]){
    $('.your-class').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding:'300px',
      autoplay: true,
      dots:true,
      arrows: false,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 1200,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerPadding:'100px',
        }
      },
      {
        breakpoint: 850,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
        
    ]
      
    });
  }

/*slider home 3 */
  if ($(".slider-home-three")[0]){
    $('.slider-home-three').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade:true
    });
  }

/*slider home 2 */
  if ($(".history-items")[0]){
    $('.history-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 850,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
        
    ]

  });

  }

/*slider home 1 */
if ($(".number")[0]){
$(".number").slick({
    autoplay: true,
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    customPaging : function(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return '<a class="dot">'+0+(i+1)+'</a>';
            },
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }   
  ]
});
}


/*slider home 2 */
if ($(".number-two")[0]){
  $(".number-two").slick({
      autoplay: true,
      dots: true,
      arrows: false,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      customPaging : function(slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<a class="dot">'+0+(i+1)+'</a>';
              },
      responsive: [{ 
          breakpoint: 700,
          settings: {
              dots: true,
              arrows: false,
              infinite: false,
              slidesToShow: 1,
              slidesToScroll: 1
          } 
      }]
  });
}

// custome 
if ($(".custome-one")[0]){
  $('.custome-one').slick({
    dots: true,
    infinite: false,
    speed: 300,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
}
if ($(".custome-two")[0]){
  $('.custome-two').slick({
    dots: true,
    infinite: false,
    speed: 300,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
}


if ( $.isFunction($.fn.filterData) ) {
$('.portfolios').filterData({
    aspectRatio: '6:5',     
    nOfRow : 3,
    itemDistance : 0
});
}
// portfolio-controllers button
$('.portfolio-controllers button').on('click',function(){
    $('.portfolio-controllers button').removeClass('active-work');
    $(this).addClass('active-work');
});
     

//progressbar
  {
    function animateElements() {
      $('.progressbar').each(function () {
        var elementPos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        var percent = $(this).find('.circle').attr('data-percent');
        var percentage = parseInt(percent, 10) / parseInt(100, 10);
        var animate = $(this).data('animate');
        if (elementPos < topOfWindow + $(window).height() - 10 && !animate) {
          $(this).data('animate', true);
          $(this).find('.circle').circleProgress({
            startAngle: -Math.PI / 2,
            value: percent / 100,
            size: 200,
            thickness: 6,
            emptyFill: "rgba(250,250,250, .8)",
            fill: {
              color: '#ff5442'
            }
          }).on('circle-animation-progress', function (event, progress, stepValue) {
            $(this).find('div').text((stepValue*100).toFixed() + "%");
          }).stop();
        }
      });
    }

    // Show animated elements
    animateElements();
    $(window).scroll(animateElements);
  };
    //scrollTop
  {
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
  };
});

// Responsive header menu
$(document).ready(function(){
 

          jQuery('.mobile-nav .menu-item-has-children').on('click', function($) {

          jQuery(this).toggleClass('active');

        }); 



        jQuery('#nav-icon4').click(function($){

           // jQuery(this).toggleClass('open');

            jQuery('#mobile-nav').toggleClass('open');

        });



        jQuery('#res-cross').click(function($){

           jQuery('#mobile-nav').removeClass('open');

            //jQuery('#nav-icon4').removeClass('open')

        });


        jQuery('.bar-menu').click(function($){

           // jQuery(this).toggleClass('open');

            jQuery('#mobile-nav').toggleClass('open');
            jQuery('#mobile-nav').toggleClass('hmburger-menu');
            jQuery('#mobile-nav').show();

        });



        jQuery('#res-cross').click(function($){

           jQuery('#mobile-nav').removeClass('open');

            //jQuery('#nav-icon4').removeClass('open')

        });
});



// mobile search
$('.search-btn').on("click",function(){$('.mobile-search').addClass('slide');})
$('.search-cross-btn').on("click",function(){$('.mobile-search').removeClass('slide');})

//AOS animation
    AOS.init({
      once:true
    });
 
// PRELOADER
if ($("body")[0]) {
  $(window).on('load', function() {
    $("body").addClass("page-loaded");
  });
}

// if ($("body")[0]) {
//   Fancybox.bind('[data-fancybox="gallery"]', {
//     caption: function (fancybox, carousel, slide) {
//       return (
//         `${slide.index + 1} / ${carousel.slides.length} <br />` + slide.caption
//       );
//     },
//   });
// }

 


