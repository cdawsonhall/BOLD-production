/*-------------------------------------------------------------------------

	Theme Name: EGO
	
	For any questions concerning this theme please refer to documention or
	our forum at support.udfrance.com.

/*------------------------------------------------------------------------

//GENERAL FUNCTONS ///////////////////////////////////////////////////////

-------------------------------------------------------------------------*/

jQuery(document).ready(function($){
	/*vars used throughout*/
	var wh,
		scrollSpeed = parseInt(udt_global_vars.scroll_speed,10),
		parallaxSpeedFactor = 0.6,
		scrollEase = 'easeOutExpo',
		targetSection,
		sectionLink = 'a.navigateTo',
		menuLinkStr = '.menu ul li a',
		menuLink = $('.menu ul li a'),
		section = $('.section'),
		toggleMenu =$('.mobileMenuToggle'),
		foliothumb = $('.folio-thumb'),
		thumbW,
		thumbH,
		thumbCaption,
		target,
		hoverSpeed=250,
		hoverEase='easeOutExpo';


	//INIT --------------------------------------------------------------------------------/
	
	
	if(isMobile === true) {
		$('.header').addClass('mobileHeader');	//add mobile header class	
	} else {
		$('.section').addClass('desktop');
		$('.teaser').addClass('fixed-desktop');
	}
	
	//HOMEPAGE SPECIFIC -----------------------------------------------------------------/
	
	function sliderHeight(){
		wh = $(window).height();
		$('#homepage').css({height:wh});
	}
	
	sliderHeight();
	$('#wrapper, #footer').show();

	var pos;
	var pos2;

	$('#portfolio').waypoint(function(direction) {
				pos = parseInt($(window).scrollTop());
				window.location.hash = 'portfolio';
				$('html,body').scrollTop(pos);
	});      
	$('#case-study').waypoint(function(direction) {
				pos2 = parseInt($(window).scrollTop());
				window.location.hash = '#case-study';
				$('html,body').scrollTop(pos2);
	}); 


	//PARALLAX ----------------------------------------------------------------------------/
		
	$(window).bind('load', function() {
		parallaxInit();
	});
	
	function parallaxInit(){
		if(isMobile === true) {
			return false;
		}
		$('.teaser').each(function() {
			$(this).parallax();
		});
		/*add as necessary*/
	}

	//PAGE SPECIFIC ---------------------------------------------------------------------/
	
	/*page scrolling
	-------------------*/
	
	$(document).on('click', '.epicSlider .epic-logo a', function(event) {
		//kill slider timer
		$.fn.epicSlider.killTimer();
		
		//get current
		targetSection = $(this).attr('href').split("#")[1];
		if(!targetSection || targetSection=='') {
			return;
		}
		targetSection = '#'+targetSection;
		
		//get pos of target section
		var targetOffset = Math.floor($(targetSection).offset().top+1);
		
		//scroll			 
		$('html,body').animate({scrollTop: targetOffset}, scrollSpeed, scrollEase, function() {
			/*ios5 menu fix*/
			if(iOS5===true) {
				$('.header.mobileHeader').animate({position:'absolute',top:$(window).scrollTop()},1);
			}
		});
		
		return false;
		//event.preventDefault();
		
	});
		
	$(document).on('click', sectionLink+','+menuLinkStr, function(event) { 
	
		//kill slider timer
		$.fn.epicSlider.killTimer();
		
		//get current
		targetSection = $(this).attr('href').split("#")[1];
		if(!targetSection || targetSection=='') {
			return;
		}
		targetSection = '#'+targetSection;
		
		//get pos of target section
		var targetOffset = Math.floor($(targetSection).offset().top+1);
		
		//scroll			 
		$('html,body').animate({scrollTop: targetOffset}, scrollSpeed, scrollEase, function() {
		
			/*ios5 menu fix*/
			if(iOS5===true) {
				$('.header.mobileHeader').animate({position:'absolute',top:$(window).scrollTop()},1);
			}
		});
		
		return false;
		
	});

	/*nav handling
	-------------------*/
	$(function(){
		section.waypoint({
			handler: function(event, direction) {
				var activeSection = $(this);
				
				if (direction === "up") {
					activeSection = activeSection.prev();
				}
				
				var activeMenuLink = $('.menu ul li a[href$=#' + activeSection.attr('id') + ']');
				
				menuLink.parent('li').removeClass('current_page_item current-menu-item');
				activeMenuLink.parent('li').addClass('current_page_item current-menu-item');
			},
			offset: '35%'	//when it should switch on consecutive page
		});
	});
	
	/*nav reveal
	-------------------*/
	// $(window).bind('scroll', function(){
	// 	if(isMobile === false){
	// 		desktopMenu();
	// 	} else {
	// 		mobileMenu();
	// 	}
	// }); 
	
	//desktop menu
	// function desktopMenu(){
		//reveal 
	// 	if ($(window).scrollTop() >= wh){
	// 		if(!$('.header-main').is(':animated')) {
	// 			$('.header-main').stop(true,true).fadeIn();
	// 			/*push elements out of view when scrolling*/
	// 			if(isMobile !== true) {
	// 				$('.epic-graphic, .epic-caption,#epic-navigation').css({position:'absolute'});
	// 			}
	// 		}
	// 	} else {
	// 		if(!$('.header-main').is(':animated')) {
	// 			$('.header-main').stop(true,true).fadeOut();
	// 			if(isMobile !== true) {
	// 				$('.epic-graphic, .epic-caption,#epic-navigation').css({position:'fixed'});
	// 			}
	// 		}
	// 	}
	// }
	
	//mobile menu
	// function mobileMenu(){
		//reveal 
	// 	if ($(window).scrollTop() <= wh) {
	// 		$('.header-main').hide();
	// 	} else {
	// 		$('.header-main').show();
	// 	}
	// 	$('.header').css({top:'0px'});
	// 	$('.header.mobileHeader').css({position:'fixed'});
	// }
	
	//ROLLOVER SPECIFIC ---------------------------------------------------------------------/
	/*folio
	-------------------*/
	foliothumb.on({
		mouseenter: function () {
			//check if device is mobile 
			//or within an inactive filter category
			//or if its video content in which case do nothing
			if(isMobile === true) {
				return false;
			}
			
			thumbW = $(this).closest('.folio-thumb-container').width();
			thumbH = $(this).closest('.folio-thumb-container').height();
			
			//get refrences needed
			thumbCaption = $(this).find('a').attr('title');
			
			//add rolloverscreen
			if(!$(this).find('a').find('div').hasClass('folio-thumb-rollover')) {
				$(this).find('a').append('<div class="folio-thumb-rollover"></div>');
			}
			
			//set it to the image size and fade in
			var hoverScreen = $('.folio-thumb-rollover');
			hoverScreen.css({width:thumbW,height:thumbH});
			
			//make sure caption is filled out
			if (typeof thumbCaption !== 'undefined' && thumbCaption !== false && $(this).find(hoverScreen).is(':empty')) {	
				//construct rollover & animate
				$(this).find(hoverScreen).append('<div class="thumbInfo">'+thumbCaption+'</div>');
				target = $(this).find(hoverScreen);
				target.stop().animate({opacity:1},hoverSpeed, hoverEase);
			}
		},
		mouseleave: function () {
			if(isMobile === true) {
				return false;
			}
			//animate out
			$(this).find('.folio-thumb-rollover').animate({opacity:0}, 0,'linear',function(){
				//delete rollover
				$(this).remove();
			});
		}
	});
	
	//WINDOW EVENTS ---------------------------------------------------------------------/
	$(window).bind('resize',function() {
		//Update slider height
		sliderHeight();
	});
});