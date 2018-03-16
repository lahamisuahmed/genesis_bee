	$(document).ready(function(){
			$("ul.layouts li.wide-layout").addClass("active");
        if ($.cookie('boxed') == "yes") {
            $("body").addClass("boxed");
			$("ul.layouts li.boxed-layout").addClass("active");
			$("ul.layouts li.wide-layout").removeClass("active");
        }
		
		if ($.cookie('boxed') == "no") {
			$("ul.layouts li.wide-layout").addClass("active");
        }
        
		if ($.cookie('ColorScheme') != null) {
			StoredColorScheme = $.cookie('ColorScheme');
			$('link.alt').attr('href',StoredColorScheme);
        }
    });
	$(document).ready(function () {
		$(".color-scheme a").click(function () {
			SCHEME = $(this).attr('data-rel');
			$('link.alt').attr('href', $(this).attr('data-rel'));
           $.cookie('ColorScheme',SCHEME);
			return false;
		});
		imgPathStart = "style-switcher/backgrounds/patterns/index.html";
		imgPathEnd = new Array("pt1.html","pt2.html","pt3.html","pt4.html","pt5.html","pt6.html","pt7.html","pt8.html","pt9.html","pt10.html","pt11.html","pt12.html","pt13.html","pt14.html","pt15.html");
		$(".background-selector li img").click(function() {
			backgroundNumber = $(this).attr("data-nr");
			bgPattern = imgPathStart+imgPathEnd[backgroundNumber]
			$("body").css("background-image","url('"+bgPattern+"')");
			$("body").css("background-repeat","repeat");
			$("body").css("background-size","auto");
           $.cookie('BGPATTERN',bgPattern);
		   $.removeCookie('BGIMAGE');
		});
		imgPathStart1 = "style-switcher/backgrounds/index.html";
		imgPathEnd1 = new Array("img1.html","img2.html","img3.html","img4.html","img5.html");
		$(".background-selector1 li img").click(function() {
			backgroundNumber1 = $(this).attr("data-nr");
			bgImage = imgPathStart1+imgPathEnd1[backgroundNumber1]
			$("body").css("background-image","url('"+bgImage+"')");
			$("body").css("background-repeat","no-repeat");
			$("body").css("background-size","cover");
           $.cookie('BGIMAGE',bgImage);
		   $.removeCookie('BGPATTERN');
		});
		$("ul.layouts li.wide-layout").click(function(){
			$("body").removeClass("boxed");
			$("body").css("background-image","none");
			$("ul.layouts li").removeClass("active");
           $.cookie('boxed','no',  {expires: 7, path: '/'});
           $("body").removeClass("boxed");
			$(this).addClass("active");
			$("body").css("background-image","none");
		   $.removeCookie('BGIMAGE');
		   $.removeCookie('BGPATTERN');
			return false;
		});
		$("ul.layouts li.boxed-layout").click(function(){
			$("body").addClass("boxed");
			$("ul.layouts li").removeClass("active");
           $.cookie('boxed','yes', {expires: 7, path: '/'});
           $("body").addClass("boxed");
			$(this).addClass("active");
           $.cookie('wide','no',  {expires: 7, path: '/'});
			return false;
		});
	});
	
	$(window).load(function(){
		$('.styleswitcher').animate({
					'left': '-206px'
				});
		$('.switch-button').addClass('closed');
	});
	$(document).ready(function () {		
		$('.switch-button').click(function () {	
			if ($(this).hasClass('open')) {
				$(this).addClass('closed');
				$(this).removeClass('open');
				$('.styleswitcher').animate({
					'left': '-206px'
				});
			} else {
				if ($(this).hasClass('closed')) {
				$(this).addClass('open');
				$(this).removeClass('closed');
				$('.styleswitcher').animate({
					'left': '0'
				});
				}
			}	
		});
	});
	