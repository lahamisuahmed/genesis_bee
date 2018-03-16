jQuery(function($){

var CAMEROLL = window.CAMEROLL || {};

/* ==================================================
	Contact Form Validations
================================================== */
	CAMEROLL.ContactForm = function(){
		$('.contact-form').each(function(){
			var formInstance = $(this);
			formInstance.submit(function(){
		
			var action = $(this).attr('action');
		
			$("#message").slideUp(750,function() {
			$('#message').hide();
		
			$('#submit')
				.after('<img src="images/assets/ajax-loader.gif" class="loader" />')
				.attr('disabled','disabled');
		
			$.post(action, {
				name: $('#name').val(),
				email: $('#email').val(),
				phone: $('#phone').val(),
				comments: $('#comments').val()
			},
				function(data){
					document.getElementById('message').innerHTML = data;
					$('#message').slideDown('slow');
					$('.contact-form img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#submit').removeAttr('disabled');
					if(data.match('success') != null) $('.contact-form').slideUp('slow');
		
				}
			);
			});
			return false;
		});
		});
	}

/* ==================================================
	Responsive Nav Menu
================================================== */
	CAMEROLL.navMenu = function() {
		// Responsive Menu Events
		$(".menu-toggle").click(function(){
			$(".main-menu-wrapper").slideToggle();
			return false;
		});
		$(window).resize(function(){
			if($(".menu-toggle").hasClass("opened")){
				$(".main-menu-wrapper").css("display","block");
			} else {
				$(".menu-toggle").css("display","none");
			}
		});
	}
/* ==================================================
	Scroll to Top
================================================== */
	CAMEROLL.scrollToTop = function(){
		var windowWidth = $(window).width(),
			didScroll = false;
	
		var $arrow = $('#back-to-top');
	
		$arrow.click(function(e) {
			$('body,html').animate({ scrollTop: "0" }, 750, 'easeOutExpo' );
			e.preventDefault();
		})
	
		$(window).scroll(function() {
			didScroll = true;
		});
	
		setInterval(function() {
			if( didScroll ) {
				didScroll = false;
	
				if( $(window).scrollTop() > 200 ) {
					$arrow.fadeIn();
				} else {
					$arrow.fadeOut();
				}
			}
		}, 250);
	}
/* ==================================================
   Accordion
================================================== */
	CAMEROLL.accordion = function(){
		var accordion_trigger = $('.accordion-heading.accordionize');
		
		accordion_trigger.delegate('.accordion-toggle','click', function(event){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).addClass('inactive');
			}
			else{
				accordion_trigger.find('.active').addClass('inactive');          
				accordion_trigger.find('.active').removeClass('active');   
				$(this).removeClass('inactive');
				$(this).addClass('active');
			}
			event.preventDefault();
		});
	}
/* ==================================================
   Toggle
================================================== */
	CAMEROLL.toggle = function(){
		var accordion_trigger_toggle = $('.accordion-heading.togglize');
		
		accordion_trigger_toggle.delegate('.accordion-toggle','click', function(event){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).addClass('inactive');
			}
			else{
				$(this).removeClass('inactive');
				$(this).addClass('active');
			}
			event.preventDefault();
		});
	}
/* ==================================================
   Tooltip
================================================== */
	CAMEROLL.toolTip = function(){ 
		$('a[data-toggle=tooltip]').tooltip();
	}
/* ==================================================
   Twitter Widget
================================================== */
	CAMEROLL.TwitterWidget = function() {
		$('.twitter-widget').each(function(){
			var twitterInstance = $(this); 
			twitterTweets = twitterInstance.attr("data-tweets-count") ? twitterInstance.attr("data-tweets-count") : "2"
			twitterInstance.twittie({
            	dateFormat: '%b. %d, %Y',
            	template: '<li><i class="fa fa-twitter"></i> {{tweet}} <span class="date">{{date}}</span></li>',
            	count: twitterTweets,
            	hideReplies: true
        	});
		});
	}
/* ==================================================
   Flex Slider
================================================== */
	CAMEROLL.FlexSlider = function() {
		$('.flexslider').each(function(){
				var sliderInstance = $(this); 
				sliderAutoplay = sliderInstance.attr("data-autoplay") == 'yes' ? true : false,
				sliderPagination = sliderInstance.attr("data-pagination") == 'yes' ? true : false,
				sliderArrows = sliderInstance.attr("data-arrows") == 'yes' ? true : false,
				sliderDirection = sliderInstance.attr("data-direction") ? sliderInstance.attr("data-direction") : "horizontal",
				sliderStyle = sliderInstance.attr("data-style") ? sliderInstance.attr("data-style") : "fade",
				sliderSpeed = sliderInstance.attr("data-speed") ? sliderInstance.attr("data-speed") : "5000",
				sliderPause = sliderInstance.attr("data-pause") == 'yes' ? true : false,
				
				sliderInstance.flexslider({
					animation: sliderStyle,
					easing: "swing",               
					direction: sliderDirection,       
					slideshow: sliderAutoplay,              
					slideshowSpeed: sliderSpeed,         
					animationSpeed: 600,         
					initDelay: 0,              
					randomize: false,            
					pauseOnHover: sliderPause,       
					controlNav: sliderPagination,           
					directionNav: sliderArrows,            
					prevText: "",          
					nextText: "",
					start: function(){$(".flex-caption").fadeIn();}
				});
		});
	}
/* ==================================================
   PrettyPhoto
================================================== */
	CAMEROLL.PrettyPhoto = function() {
			$("a[data-rel^='prettyPhoto']").prettyPhoto({
				  opacity: 0.5,
				  social_tools: "",
				  deeplinking: false
			});
	}
/* ==================================================
   Pricing Tables
================================================== */
	var $tallestCol;
	CAMEROLL.pricingTable = function(){
		$('.pricing-table').each(function(){
			$tallestCol = 0;
			$(this).find('> div .features').each(function(){
				($(this).height() > $tallestCol) ? $tallestCol = $(this).height() : $tallestCol = $tallestCol;
			});	
			if($tallestCol == 0) $tallestCol = 'auto';
			$(this).find('> div .features').css('height',$tallestCol);
		});
	}
/* ==================================================
   Animated Counters
================================================== */
	CAMEROLL.Counters = function() {
		$('.counters').each(function () {
			$(".timer .count").appear(function() {
			var counter = $(this).html();
			$(this).countTo({
				from: 0,
				to: counter,
				speed: 2000,
				refreshInterval: 60,
				});
			});
		});
	}
/* ==================================================
   SuperFish menu
================================================== */
	CAMEROLL.SuperFish = function() {
		$('.sf-menu').superfish({
			  delay: 200,
			  animation: {opacity:'show', height:'show'},
			  speed: 'fast',
			  cssArrows: false,
			  disableHI: true
		});
		$(".navigation > ul > li > ul > li:has(ul)").find("a:first").append(" <i class='fa fa-angle-right trigger'></i>");
		$(".navigation > ul > li > ul > li > ul > li:has(ul)").find("a:first").append(" <i class='fa fa-angle-right trigger'></i>");
	}
/* ==================================================
   IsoTope Portfolio
================================================== */
		CAMEROLL.IsoTope = function() {	
			$("ul.sort-source").each(function() {

				var source = $(this);
				var destination = $("ul.sort-destination[data-sort-id=" + $(this).attr("data-sort-id") + "]");

				if(destination.get(0)) {

					$(window).load(function() {

						destination.isotope({
							itemSelector: ".grid-item",
							layoutMode: 'sloppyMasonry'
						});

						source.find("a").click(function(e) {

							e.preventDefault();

							var $this = $(this),
								filter = $this.parent().attr("data-option-value");

							source.find("li.active").removeClass("active");
							$this.parent().addClass("active");

							destination.isotope({
								filter: filter
							});

							if(window.location.hash != "" || filter.replace(".","") != "*") {
								self.location = "#" + filter.replace(".","");
							}

							return false;

						});

						$(window).bind("hashchange", function(e) {

							var hashFilter = "." + location.hash.replace("#",""),
								hash = (hashFilter == "." || hashFilter == ".*" ? "*" : hashFilter);

							source.find("li.active").removeClass("active");
							source.find("li[data-option-value='" + hash + "']").addClass("active");

							destination.isotope({
								filter: hash
							});

						});

						var hashFilter = "." + (location.hash.replace("#","") || "*");

						var initFilterEl = source.find("li[data-option-value='" + hashFilter + "'] a");

						if(initFilterEl.get(0)) {
							source.find("li[data-option-value='" + hashFilter + "'] a").click();
						} else {
							source.find("li:first-child a").click();
						}

					});

				}

			});
			$(window).load(function() {
				IsoTopeCont = $(".isotope-grid");
				IsoTopeCont.isotope({
					itemSelector: ".grid-item",
					layoutMode: 'sloppyMasonry'
				});
				if ($(".grid-holder").length > 0){	
					var $container_blog = $('.grid-holder');
					$container_blog.isotope({
					itemSelector : '.grid-item'
					});
			
					$(window).resize(function() {
					var $container_blog = $('.grid-holder');
					$container_blog.isotope({
						itemSelector : '.grid-item',
					layoutMode: 'sloppyMasonry'
					});
					});
				}
			});
		}
/* ==================================================
   Sticky Navigation
================================================== */	
	CAMEROLL.StickyNav = function() {
		$('.sticky').each(function(){
			var stickyInstance = $(this); 
			stickyTopSpace = stickyInstance.attr("data-topspace") ? stickyInstance.attr("data-topspace") : "0"
			if ($(window).width() > 992){
				stickyInstance.sticky({topSpacing:stickyTopSpace});
			}
		});
	}
/*-----------------------------------------------------------------------------------*/
/*	SWIPER
/*-----------------------------------------------------------------------------------*/
	CAMEROLL.iSWIPER = function() {
		$('.swiper-container').each(function(){
			var swiperInstance = $(this); 
			swiperFreeMode = swiperInstance.attr("data-freemode") == 'yes' ? true : false
			$(this).swiper({
				grabCursor: true,
				scrollContainer: swiperFreeMode,
				freeMode: swiperFreeMode,
				freeModeFluid: swiperFreeMode,
				slidesPerView: 'auto',
				wrapperClass: 'swiper',
				slideClass: 'swiper-slide'
			});
			var $swipers = jQuery(this);
			$swipers.siblings('.arrow-left').click(function(e){
				e.preventDefault();
				$swipers.data('swiper').swipePrev();
			});
			$swipers.siblings('.arrow-right').click(function(e){
				e.preventDefault();
				$swipers.data('swiper').swipeNext();
			});
		});
		$('.swiper-container.clients').each(function(){
			$(this).swiper({
				grabCursor: true,
				slidesPerView: 'auto',
				wrapperClass: 'swiper',
				slideClass: 'swiper-slide',
				autoplay: 5000,
				visibilityFullFit: true
			});
		});
	}
/*-----------------------------------------------------------------------------------*/
/*	INSTAGRAM FEED WIDGET
/*-----------------------------------------------------------------------------------*/
	CAMEROLL.InstaWidget = function() {
		var widgetFeed = new Instafeed({
			target: 'insta-widget',
			get: 'user',
			limit: 6,
			userId: 723675218,
			accessToken: '723675218.467ede5.622cc36907cb42f49792f8fed9669287',
			resolution: 'thumbnail',
			template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" alt="" /></a></li>'
		});
		
		$('#insta-widget').each(function() {
			widgetFeed.run();
		});
	}
/* ==================================================
   FLICKR FEED WIDGET
================================================== */
	CAMEROLL.FlickrWidget = function() {
		$('.flickr-widget').each(function(){
			var flickrInstance = $(this); 
			flickrImages = flickrInstance.attr("data-images-count") ? flickrInstance.attr("data-images-count") : "1",
			flickrUserid = flickrInstance.attr("data-flickr-userid") ? flickrInstance.attr("data-flickr-userid") : "1"
			flickrInstance.jflickrfeed({
				limit: flickrImages,
				qstrings: {
					id: flickrUserid
				},
				itemTemplate: '<li><a href="{{image_b}}" target="_blank"><img alt="{{title}}" src="{{image_b}}" /></a></li>'
			});
		});
	}
/* ==================================================
   FLICKR FEED WIDGET
================================================== */
	CAMEROLL.FOOTER = function() {
		MH = $(".main").height();
		WH = $(window).height();
		DIF = MH - 100
		if(DIF < WH){
			$(".site-footer").css("position","fixed");
		}
	}
/* ==================================================
   Initialize Functions
================================================== */
	$(document).ready(function(){
		CAMEROLL.ContactForm();
		CAMEROLL.scrollToTop();
		CAMEROLL.accordion();
		CAMEROLL.toggle();
		CAMEROLL.toolTip();
		CAMEROLL.navMenu();
		CAMEROLL.TwitterWidget();
		CAMEROLL.FlexSlider();
		CAMEROLL.PrettyPhoto();
		CAMEROLL.SuperFish();
		CAMEROLL.pricingTable();
		CAMEROLL.Counters();
		CAMEROLL.IsoTope();
		CAMEROLL.StickyNav();
		CAMEROLL.iSWIPER();
		CAMEROLL.InstaWidget();
		CAMEROLL.FlickrWidget();
	});

	/* Design Related Scripts */
	//Sets the current scroll position
		var st = $(this).scrollTop();
		//Determines up-or-down scrolling
		if (st > 100){
		   //Replace this with your function call for downward-scrolling
		   $(".top-header").addClass('stickyh');
		}
		else {
			$(".top-header").removeClass('stickyh');
		}
	$(window).scroll(function(event){
		//Sets the current scroll position
		var st = $(this).scrollTop();
		//Determines up-or-down scrolling
		if (st > 100){
		   //Replace this with your function call for downward-scrolling
		   $(".top-header").addClass('stickyh');
		}
		else {
			$(".top-header").removeClass('stickyh');
		}
	});
	// Gallery Description
	$(".description-opener").click(function(){
		if($(this).hasClass("closed")){
			$(this).removeClass("closed");
			$(".gallery-description").animate({bottom:0});
			$(this).addClass("inverse");
			$(this).html("<i class='fa fa-times'></i>");
		} else{
			$(this).addClass("closed");
			$(".gallery-description").animate({bottom:-300});
			$(this).removeClass("inverse");
			$(this).html("<i class='fa fa-info'></i>");
		}
		return false;
	});
	// On Load Animations
	$(window).load(function(){
		$('.site-footer').animate({bottom:0});
		$(".landing-content").fadeIn(200);
		$("body.gallery").css("background-image","none");
		$(".grid-item").fadeIn(200);
		/* Vertically centering the grid item hover */
		$(".grid-item").each(function(){
			gHt = $(this).find(".grid-hover-central").height();
			gHtCe = gHt/2 + 20
			$(".grid-hover-central").css("margin-top",-gHtCe);
		});
		/* Zoom icons centering */
		$(".media-box .zoom").each(function(){
			mpwidth = $(this).parent().width();
			mpheight = $(this).parent().find("img").height();
			
			$(this).css("width", mpwidth);
			$(this).css("height", mpheight);
			$(this).css("line-height", mpheight+"px");
		});
	});
	
	$(document).ready(function(){
	/* Portfolio navigation centering */
	$(".portfolio-single-title").each(function(){
		PROSGLH = $(this).height();
		PROSGLHRE = PROSGLH/2;
		$(".project-nav a").css("margin-top",PROSGLHRE);
	});
	/* Widget Title Style */
	$(".widgettitle").each(function(){
		$("<div class='clearfix'><hr class='sm afwidgtit'></div>").insertAfter(this);
	});
	/* Inserting the icons for post types */
	$(".format-quote").each(function(){
		$(this).find("a.quote-box").append("<i class='fa fa-quote-left'></i>");
	});
	$(".format-image").each(function(){
		$(this).find(".media-box").append("<span class='zoom'><span><i class='fa fa-search'></i></span></span>");
	});
	$(".format-standard").each(function(){
		$(this).find(".media-box").append("<span class='zoom'><span><i class='fa fa-plus'></i></span></span>");
	});
	$(".format-video").each(function(){
		$(this).find(".media-box").append("<span class='zoom'><span><i class='fa fa-play'></i></span></span>");
	});
	$(".format-link").each(function(){
		$(this).find(".media-box").append("<span class='zoom'><span><i class='fa fa-link'></i></span></span>");
	});
	if ($(window).width() > 992){
		$(".main-menu-wrapper").css("display","block");
	} else {
		$(".main-menu-wrapper").css("display","none");
	}
	$(window).resize(function(){
		$(".grid-item").each(function(){
			gHt = $(this).find(".grid-hover-inner").height();
			gHtCe = gHt/2 + 20
			$(".grid-hover-central").css("margin-top",-gHtCe);
		});
		$(".media-box .zoom").each(function(){
			mpwidth = $(this).parent().width();
			mpheight = $(this).parent().find("img").height();
			
			$(this).css("width", mpwidth);
			$(this).css("height", mpheight);
			$(this).css("line-height", mpheight+"px");
		});
		if ($(window).width() > 992){
			$(".main-menu-wrapper").css("display","block");
		} else {
			$(".main-menu-wrapper").css("display","none");
		}
	});
	
	
	/* Any Button Scroll to section */	
	$('.scrollto').click(function(){
		$.scrollTo( this.hash, 800, { easing:'easeOutQuint' });
		return false;
	});
	// FITVIDS
	$(".container").fitVids();
	
	// List Styles
	$('ul.checks li').prepend('<i class="fa fa-check"></i> ');
	$('ul.angles li, .nav-list-primary li a').prepend('<i class="fa fa-angle-right"></i> ');
	$('ul.inline li').prepend('<i class="fa fa-check-circle-o"></i> ');
	$('ul.chevrons li').prepend('<i class="fa fa-chevron-right"></i> ');
	$('ul.carets li').prepend('<i class="fa fa-caret-right"></i> ');
	$('a.external').prepend('<i class="fa fa-external-link"></i> ');
	
	// Animation Appear
	$("[data-appear-animation]").each(function() {
		var $this = $(this);
		$this.addClass("appear-animation");
		if(!$("html").hasClass("no-csstransitions") && $(window).width() > 767) {
			$this.appear(function() {
				var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
				if(delay > 1) $this.css("animation-delay", delay + "ms");
				$this.addClass($this.attr("data-appear-animation"));
				setTimeout(function() {
					$this.addClass("appear-animation-visible");
				}, delay);
			}, {accX: 0, accY: -150});
		} else {
			$this.addClass("appear-animation-visible");
		}
	});
	// Animation Progress Bars
	$("[data-appear-progress-animation]").each(function() {
		var $this = $(this);
		$this.appear(function() {
			var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
			if(delay > 1) $this.css("animation-delay", delay + "ms");
			$this.addClass($this.attr("data-appear-animation"));
			setTimeout(function() {
				$this.animate({
					width: $this.attr("data-appear-progress-animation")
				}, 1500, "easeOutQuad", function() {
					$this.find(".progress-bar-tooltip").animate({
						opacity: 1
					}, 500, "easeOutQuad");
				});
			}, delay);
		}, {accX: 0, accY: -50});
	});
	
	// Parallax Jquery Callings
	if(!Modernizr.touch) {
		$(window).bind('load', function () {
			parallaxInit();						  
		});
	}
	function parallaxInit() {
		$('.parallax1').parallax("50%", 0.1);
		$('.parallax2').parallax("50%", 0.2);
		$('.parallax3').parallax("50%", 0.3);
		$('.parallax4').parallax("50%", 0.4);
		$('.parallax5').parallax("50%", 0.5);
		$('.parallax6').parallax("50%", 0.6);
		$('.parallax7').parallax("50%", 0.7);
		$('.parallax8').parallax("50%", 0.7);
		/*add as necessary*/
	}
	
	// Window height/Width Getter Classes
	wheighter = $(window).height();
	wwidth = $(window).width();
	wheighterLH = wheighter - 110
	$(".wheighterLH").css("height",wheighterLH);
	$(".wheighter").css("height",wheighter);
	$(".wwidth").css("width",wwidth);
	$(window).resize(function(){
		wheighter = $(window).height();
		wwidth = $(window).width();
		wheighterLH = wheighter - 110
		$(".wheighter").css("height",wheighter);
		$(".wwidth").css("width",wwidth);
		$(".wheighterLH").css("height",wheighterLH);
	});
	});
});