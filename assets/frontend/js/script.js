    $(".donnerdiscription").click(function(){
         $( "#tablekksddescription" ).toggle();
         
         });
		 
    $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });

                // initialization of svg injector module
                //$.HSCore.components.HSSVGIngector.init('.js-svg-injector');
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                //$.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                //$.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                //$.HSCore.components.HSSelectPicker.init('.js-select');
            });
    
	
	
	
	
	
	$(".position-relative2").hover(function(){
  $(this).css("display", "block");
  }, function(){
  $(this).css("display", "none");
});
	
		
	
	$(".ulineme1").hover(function(){
  $('.submenush1').css("display", "block");
  }, function(){
  $('.submenush1').css("display", "none");
});
	
	$(".ulineme2").hover(function(){
  $('.submenush2').css("display", "block");
  }, function(){
  $('.submenush2').css("display", "none");
});
	
	$(".ulineme3").hover(function(){
  $('.submenush3').css("display", "block");
  }, function(){
  $('.submenush3').css("display", "none");
});
	
	$(".ulineme4").hover(function(){
  $('.submenush4').css("display", "block");
  }, function(){
  $('.submenush4').css("display", "none");
});
		$(".ulineme5").hover(function(){
  $('.submenush5').css("display", "block");
  }, function(){
  $('.submenush5').css("display", "none");
});
	
	$(".ulineme6").hover(function(){
  $('.submenush6').css("display", "block");
  }, function(){
  $('.submenush6').css("display", "none");
});
	
	$(".ulineme7").hover(function(){
  $('.submenush7').css("display", "block");
  }, function(){
  $('.submenush7').css("display", "none");
});
	
	$(".ulineme8").hover(function(){
  $('.submenush8').css("display", "block");
  }, function(){
  $('.submenush8').css("display", "none");
});
	
	
	$(".ulineme9").hover(function(){
  $('.submenush9').css("display", "block");
  }, function(){
  $('.submenush9').css("display", "none");
});
	
	
	$(".ulineme10").hover(function(){
  $('.submenush10').css("display", "block");
  }, function(){
  $('.submenush10').css("display", "none");
});
	
	
	$('#owl-carousel5').owlCarousel({
    loop:true,
	autoplay:true,
    margin:10,
	dots:false,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:7
        }
    }
});
	
		
	$("#sidebarNavToggler").click(function(){
  $('#sidebarContent1').toggle();
  });		
	$("button.close").click(function(){
  $('#sidebarContent1').hide();
  });
			
	$("#basicDropdownHoverInvoker1").click(function(){
  $('#basicDropdownHover1').toggle();
  });		
	$("button.close").click(function(){
  $('#basicDropdownHover1').hide();
  });
	
		$(".menubars").click(function(){
  $("#header .d-none1.d-xl-block.container-fluid").toggle();
});



$('#owl-carousel61').owlCarousel({
    loop:true,
	autoplay:false,
    margin:5,
	dots:false,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:8
        }
    }
});


$('#owl-carousel62').owlCarousel({
    loop:true,
	autoplay:false,
    margin:20,
	dots:false,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});


$('#owl-carousel63').owlCarousel({
      loop:true,
	autoplay:false,
    margin:20,
	dots:false,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});




	$("#partks10").click(function(){
  $(".box-swikd00").toggle();
});

	$("#partks1").click(function(){
  $(".box-swikd0").toggle();
});

	$("#partks2").click(function(){
  $(".box-swikd1").toggle();
});

	$("#partks3").click(function(){
  $(".box-swikd2").toggle();
});



	$(".produstket").click(function(){
  $(".box-swikd").toggle();
});


	$(".produstket2s").click(function(){
  $(".box-swikd").hide();
});


$(".bostrakrp").click(function(){
  $(".box-soldid1").css("display","none");
  $(".box-soldid2").css("display","block");
});

$(".box-soldid1back").click(function(){
 
  $(".box-soldid2").css("display","none");
   $(".box-soldid1").css("display","block");
});

