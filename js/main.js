(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var owl = $('.featured-carousel');

  $('.featured-carousel').owlCarousel({
  		animateOut: 'fadeOut',
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 0,
      smartSpeed: 1500,
      autoplay: false,
      dots: false,
      nav: false,
      navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
  });

  $('.thumbnail li').each(function(slide_index){
      $(this).click(function(e) {
          owl.trigger('to.owl.carousel',[slide_index,1500]);
          e.preventDefault();
      })
  })

  owl.on('changed.owl.carousel', function(event) {
      $('.thumbnail li').removeClass('active');
      $('.thumbnail li').eq(event.item.index - 2).addClass('active');
  })

  var carousel = function() {
    $('.home-slider').owlCarousel({
    loop:true,
    autoplay: true,
    margin:0,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    mouseDrag: false,
    touchDrag: true,
    nav:true,
    dots: true,
    autoplayHoverPause: true,
    items: 1,
    navText : ["<span class='fa fa-angle-left'></span>","<span class='fa fa-angle-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
    });

};
carousel();

})(jQuery);

// (function($) {

// 	"use strict";

// 	var fullHeight = function() {

// 		$('.js-fullheight').css('height', $(window).height());
// 		$(window).resize(function(){
// 			$('.js-fullheight').css('height', $(window).height());
// 		});

// 	};
// 	fullHeight();

// 	var carousel = function() {
// 		$('.featured-carousel').owlCarousel({
// 	    loop:true,
// 	    autoPlay: false,
// 	    margin:30,
// 	    animateOut: 'fadeOut',
// 	    animateIn: 'fadeIn',
// 	    smartSpeed: 15000,
// 	    nav:true,
// 	    dots: true,
// 	    autoplayHoverPause: false,
//         mouseDrag: false,
//         touchDrag: false,
// 	    items: 1,
// 	    navText : ["<span class='fa fa-angle-left'></span>","<span class='fa fa-angle-right'></span>"],
// 		});

// 	};
// 	carousel();

// })(jQuery);