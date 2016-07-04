/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();

/*==========================actualities slider code=================================*/

	//configurations
	var height='70px';
  var animationSpeed= 1000;
  var pause=3000;
  var currentSlide=1;

  //cache DOM
  var $slidesWrapper = $('#news-slider');
  var $slidesSelector = $slidesWrapper.find('.news-slides');
  var $slides = $slidesSelector.find('.news-slide');
  var interval;

	//append first slide data to last slide for animation purposes
	var $firstSlide = $('.news-slides').children('.news-slide:first-child').html();
	console.log($firstSlide);
	$('.news-slide:last-child').prepend($firstSlide);

	function startSlider(){
  interval = setInterval(function(){
   $slidesSelector.animate({'margin-top':'-='+height},animationSpeed,function(){
		currentSlide++;
      if(currentSlide == $slides.length){
				currentSlide=1;
        $slidesSelector.css('margin-top',0);
      }
   });
},pause);
}


function stopSlider(){
  clearInterval(interval);
}

$slidesWrapper.on('mouseenter',stopSlider).on('mouseleave',startSlider);
startSlider();


/*========================appending hamburger icon to the new mobile menu=========================*/
$('#mobile-navigation').prepend('<span id="close-menu" class="fa fa-bars"></span></li>');

/*==========================appending right angle icon to each menu item==========================*/
$('.mobile-nav li').each(function(index){
	$(this).prepend('<span id="iconId'+index+'"'+'class="fa fa-angle-right"></span>');
});

/*==========================removing span from links without child elements=======================*/
$('.mobile-nav li.single-link').each(function(){
	$(this).children("span").remove();
  $(this).children("a").css("width", "100%");
});

/*============================toggling the sub menu and icon toggle==============================*/
$('#iconId1').on('click',function(e){
	$(this).toggleClass('fa fa-angle-down fa fa-angle-right');
	$(this).siblings('a').toggleClass('active-color');
		e.preventDefault;
	$('ul.sub-menu').slideToggle("slow");
});

/*===========================adding new icons to sub menu items==================================*/
$('#mobile-navigation ul.sub-menu li').each(function(){
		$(this).children("span").remove();
		$(this).prepend('<span class="fa fa-caret-right"></span>');
});

/*===========================adding icons to icon mobile menu====================================*/
$('li.home-icon').prepend('<span><img src="../wp-content/themes/fresh-bones/library/images/rci-assests/header-icons/home-icon.png"></span>');
$('li.faqs-icon').prepend('<span><img src="../wp-content/themes/fresh-bones/library/images/rci-assests/header-icons/faq-icon.png"></span>');
$('li.quickLinks-icon').prepend('<span><img src="../wp-content/themes/fresh-bones/library/images/rci-assests/header-icons/quickLink-icon.png"></span>');
$('li.career-icon').prepend('<span><img src="../wp-content/themes/fresh-bones/library/images/rci-assests/header-icons/career-icon.png"></span>');
$('li.terminology-icon').prepend('<span><img src="../wp-content/themes/fresh-bones/library/images/rci-assests/header-icons/terminology-icon.png"></span>');
$('li.downloads-icon').prepend('<span><img src="../wp-content/themes/fresh-bones/library/images/rci-assests/header-icons/download-icon.png"></span>');

/*===========================opening moblie menu on hamburger click=============================*/
$('.fa-bars').on('click',function(){
	$('#container').toggleClass('openNav');
});

/*=============================opening icon mobile menu on dots click============================*/
$('.dot-menu').on('click',function(){
	$("#icon-mobile-navigation").slideToggle('2000','linear');
});

/*=============resize function to close the mobile menu on window resize========================*/
	$(window).on('resize',function(){
			$('#container').removeClass('openNav');
			$('.billing-info').removeClass('onclick-billing-info');
	});

/*========================footer lower tabs info window toggle==================================*/
$('.billing-area a,.billing-close-icon').on('click',function (e) {
	$('#billing-info-wrapper-desktop .billing-info').toggleClass('onclick-billing-info');
	e.preventDefault();
});

$('.billing-area a,.billing-close-icon').on('click',function (e) {
	$('#billing-info-wrapper-tablet .billing-info').toggleClass('onclick-billing-info');
	e.preventDefault();
});


}); /* end of as page load scripts */
