// @codekit-prepend "load.smartajax.js"; 
// @codekit-prepend "translate.js"; 
// @codekit-prepend "../bower_components/royalslider/jquery.royalslider.min.js"; 
// @codekit-prepend "../bower_components/velocity/velocity.js"; 
// @codekit-prepend "../bower_components/skrollr/dist/skrollr.min.js"; 
// @codekit-prepend "../bower_components/superfish/dist/js/superfish.min.js";
// @codekit-prepend "../bower_components/parallax/deploy/jquery.parallax.js";
// @codekit-prepend "../bower_components/photoset-grid/jquery.photoset-grid.js";
// @codekit-prepend "../bower_components/magnific-popup/dist/jquery.magnific-popup.min.js";

SmartAjax_load('/assets/javascripts', function(){

  function thangs() {
  
  $('#gallery').css({opacity:0}).photosetGrid({
    gutter: 10,
    onComplete: function(){
      $('#gallery').velocity({
        opacity: 1
      }, 300);
    },
  });
  
  $('.menu').slicknav();
  
  $('li#English a').click(function() {
    $('body').removeClass().addClass('english');
  });
  
  $('li#Korean a').click(function() {
    $('body').removeClass().addClass('alt');
  });
  
  $('li#Spanish a').click(function() {
    $('body').removeClass().addClass('alt');
  });
  
  $('li#Vietnamese a').click(function() {
    $('body').removeClass().addClass('alt');
  });
  
//  $('.twitterfeed').tweet({
//    modpath: '../twitter/',
//    count: 5,
//    username: "ggopenstreets",
//    loading_text: 'loading twitter feed...',
//  });
  
  $('#languages').superfish();
  
  $('.modal').magnificPopup({
  		type: 'image',
  		closeOnContentClick: true,
  		closeBtnInside: false,
  		fixedContentPos: true,
  		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
  		image: {
  			verticalFit: true
  		},
  		zoom: {
  			enabled: true,
  			duration: 300 // don't foget to change the duration also in CSS
  		}
  	});
  
  $('#menu-primary-navigation').superfish({
    speed: 'fast', 
    autoArrows:  false,
    delay:       400,  
    animation:   {opacity:'show',height:'show'},
  });
  

  $('#scene').parallax({
    forceHeight: false
  });
  
  
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   
  }else {
  	var s = skrollr.init();
  }
  

  // Royalslider
  
  
  var wh = $(window).height();
  var ww = $(window).width();
  
  $('#slider').royalSlider({
    arrowsNav: true,
    loop: false,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: ww,     
    autoScaleSliderHeight: wh,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: false,
    transitionType:'fade',
    globalCaption: false,
    transitionSpeed: 1300,
    deeplinking: {
      enabled: true,
      change: false
    },
    autoPlay: {
      enabled: true,
      delay: 10000,
    },
    imgWidth: 1665,
    imgHeight: 800
  });
  
  }
  
  thangs();

	SmartAjax.isDebug = false;
	SmartAjax.setOptions({
		cache: false,
		reload: false,
		containers:
		[
			{selector: '#content'}
		],

		before: function()
		{
			//$('#ajax-loader').show();

			SmartAjax.proceed();
		},
		success: function()
		{
			$('#content-wrap').velocity({
			  opacity:0,
			  paddingTop: 10
			},200, SmartAjax.proceed);
      
		},
		done: function()
		{
			//$('#ajax-loader').hide();
			$('#content-wrap').velocity({
			  opacity: 1,
			  paddingTop: 0
			},100);
			thangs();
			twttr.widgets.load();
      $('body').attr('style', '');
			$("html, body").animate({ scrollTop: "0" }, 200);
		}
	});

	SmartAjax.bind('a:not([href^="mailto:"])');
	SmartAjax.bindForms('form');
}, true);
