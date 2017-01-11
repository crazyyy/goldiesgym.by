$(document).ready(function(){
    //footer select
    setTimeout(function() {
      $('#help-question').styler({
        selectPlaceholder: 'Вопрос'
      });
  }, 100);
    //hamburger menu
    $(".hamburger").click(function  () {
        $(this).toggleClass("is-active");
        if($(this).hasClass("is-active")){
            $(".h-bot__nav").slideDown();
        }else{
            $(".h-bot__nav").slideUp();
        }
    });
    $('.btn-inf').popover();
    //gallery
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    /*****end gallery****/
   //slider
   if($(".slider")){
    $(".slider").slick({autoplay: true});
}else{}
if($(".slider-comments")){
    $(".slider-comments").slick({autoplay: true});
}else{}
   //partners slider
   if($(".partners__slider")){
    $(".partners__slider").slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
            infinite: true
        }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
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
}else{}
//slider personal
sliderPersonal ();
$(".nav-tabs--personal a").click(function() {
    $(".slider-personal").hide().slick("unslick");
    setTimeout( sliderPersonal, 300);
    $(".slider-personal").show();
});
function sliderPersonal () {
    if($(".slider-personal")){
        $(".slider-personal").slick({
            slidesToShow: 4,
            slidesToScroll: 2,
            responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: true
            }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
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
    }else{}
}
//slider shedule
if ($(".shedule__slider")) {
    $('.shedule__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      speed: 600,
      asNavFor: '.shedule__slider-nav',
      responsive: [
      {
          breakpoint: 767,
          settings: {arrows: false}
      }
      ]
  });
    $('.shedule__slider-nav').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      asNavFor: '.shedule__slider',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: false,
      responsive: [
      {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 2
        }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
    }
},
{
  breakpoint: 767,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true
}
}
]
});
}else{}
/**********end sliders***********/
   //map
   // When the window has finished loading create our google map below
   google.maps.event.addDomListener(window, 'load', init);

   function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,
                    scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(53.904666, 27.532332),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": "-100"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 65
                        },
                        {
                            "visibility": "on"
                        }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": "50"
                        },
                        {
                            "visibility": "simplified"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": "-100"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                        {
                            "visibility": "simplified"
                        }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "all",
                        "stylers": [
                        {
                            "lightness": "30"
                        }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "all",
                        "stylers": [
                        {
                            "lightness": "40"
                        }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "visibility": "simplified"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "hue": "#ffff00"
                        },
                        {
                            "lightness": -25
                        },
                        {
                            "saturation": -97
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "saturation": "25"
                        },
                        {
                            "lightness": "-76"
                        },
                        {
                            "gamma": "4.71"
                        },
                        {
                            "color": "#c08f69"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [
                        {
                            "lightness": -25
                        },
                        {
                            "saturation": -100
                        }
                        ]
                    }
                    ]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(53.904666, 27.532332),
                    map: map,
                    title: 'ул. Клары Цеткин, 51а',
                    icon: 'img/marker.png'
                });
            }
        });