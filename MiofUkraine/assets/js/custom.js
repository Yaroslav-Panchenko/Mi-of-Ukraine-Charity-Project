jQuery(document).ready(function($) {

  $('.bwg_load_btn').html('<span>Показати більше</span>');

    //----------------------Gallary tabs-------------

      $('ul.gallary-years-list').on('click', 'li:not(.year-btn-active)', function() {
      $(this)
        .addClass('year-btn-active').siblings().removeClass('year-btn-active')
        .closest('section.gallary-years').find('li.gallary-list-item').removeClass('gallary-item-active').eq($(this).index()).addClass('gallary-item-active');
    });
   
    // -----------------------Organization slider---------

    $('.organizator-slider').slick({
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: 
        "<a class='arrow-right'><span class='screen-reader-text'>Arrow left</span><svg class='icon icon-arrow-left' aria-hidden='true' role='img'> <use href='#left-chevrone' xlink:href='#left-chevrone'></use> </svg></a>",
        nextArrow: 
        "<a class='arrow-left'><span class='screen-reader-text'>Arrow right</span><svg class='icon icon-arrow-right' aria-hidden='true' role='img'> <use href='#right-chevrone' xlink:href='#right-chevrone'></use> </svg></a>",
        responsive: [
			
          {
            breakpoint: 1100,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
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



       // -----------------------Press slider---------
       $('.press-slider').slick({
        speed: 300,
        slidesToShow: 1, 
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        prevArrow: 
        "<a class='arrow-right book-arrow press-right'><span class='screen-reader-text'>Arrow left</span><svg class='icon icon-arrow-left' aria-hidden='true' role='img'> <use href='#left-chevrone' xlink:href='#left-chevrone'></use> </svg></a>",
        nextArrow: 
        "<a class='arrow-left book-arrow press-left'><span class='screen-reader-text'>Arrow right</span><svg class='icon icon-arrow-right' aria-hidden='true' role='img'> <use href='#right-chevrone' xlink:href='#right-chevrone'></use> </svg></a>",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
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
    

// --------------------Book slider------------------------

      $('.book-slider').slick({
        speed: 300,
        slidesToShow: 1, 
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        prevArrow: 
        "<a class='arrow-right book-arrow arrow-book-right'><span class='screen-reader-text'>Arrow left</span><svg class='icon icon-arrow-left' aria-hidden='true' role='img'> <use href='#left-chevrone' xlink:href='#left-chevrone'></use> </svg></a>",
        nextArrow: 
        "<a class='arrow-left book-arrow arrow-book-left'><span class='screen-reader-text'>Arrow right</span><svg class='icon icon-arrow-right' aria-hidden='true' role='img'> <use href='#right-chevrone' xlink:href='#right-chevrone'></use> </svg></a>",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
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


        // --------------------Book img slider------------------------

        $('.book-img-slider').slick({
          speed: 300,
          slidesToShow: 1, 
          slidesToScroll: 1,
          fade: true,
          autoplay: false,
          prevArrow: 
          "<a class='arrow-right arrow-book-img-right'><span class='screen-reader-text'>Arrow left</span><svg class='icon icon-arrow-left' aria-hidden='true' role='img'> <use href='#icon-arrow-left' xlink:href='#icon-arrow-left'></use> </svg></a>",
          nextArrow: 
          "<a class='arrow-left arrow-book-img-left'><span class='screen-reader-text'>Arrow right</span><svg class='icon icon-arrow-right' aria-hidden='true' role='img'> <use href='#right-chevrone' xlink:href='#right-chevrone'></use> </svg></a>",
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
                
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000
              }
            }
          ]
        });

      // --------------------Audio slider------------------------

      $('.audio-slider').slick({
        speed: 300,
        slidesToShow: 1, 
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        prevArrow: 
        "<a class='arrow-right book-arrow audio-right'><span class='screen-reader-text'>Arrow left</span><svg class='icon icon-arrow-left' aria-hidden='true' role='img'> <use href='#left-chevrone' xlink:href='#left-chevrone'></use> </svg></a>",
        nextArrow: 
        "<a class='arrow-left book-arrow audio-left'><span class='screen-reader-text'>Arrow right</span><svg class='icon icon-arrow-right' aria-hidden='true' role='img'> <use href='#right-chevrone' xlink:href='#right-chevrone'></use> </svg></a>",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
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


        // -----------------------Jury slider---------

    $('.jury-slider').slick({
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: 
      "<a class='arrow-right'><span class='screen-reader-text'>Arrow left</span><svg class='icon icon-arrow-left' aria-hidden='true' role='img'> <use href='#left-chevrone' xlink:href='#left-chevrone'></use> </svg></a>",
      nextArrow: 
      "<a class='arrow-left'><span class='screen-reader-text'>Arrow right</span><svg class='icon icon-arrow-right' aria-hidden='true' role='img'> <use href='#right-chevrone' xlink:href='#right-chevrone'></use> </svg></a>",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
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

    // ------------Audio slide stop----------------------
  $('.audio-right, .audio-left').on('click', function() {
    $('audio').addClass('stoped');
    $('.stoped').each(function() {
      $(this).trigger('pause');
      $(this)[0].currentTime = 0;
    })
  })

});

