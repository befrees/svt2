function showPopup(popupName, type){
	var type = type || 0;
	// если звонок
	if(type==1){
		dataLayer.push({'SubmitCallOk':'ok', 'event':'callSubmited'});
	}
	// если заявка
	if(type==2){
		dataLayer.push({'SubmitFormOk':'ok', 'event':'formSubmited'});
	}
	if(popupName != undefined && popupName.length > 0){
		var popup = $('.popup[data-name="'+popupName+'"]');

		$('.popup').removeClass('current');
		popup.addClass('current');

		$('#popupWrap').fadeIn();

	}	
}

$(document).ready(function(){
	var site_link = window.location.protocol + "//" + window.location.host + "/";

	if($(window).width()<768){
		$('#intro').css({minHeight: $(window).height()+'px'});
	}
	$('input:checkbox').styler();
	$('body').on('change', '.ckb-l1', function(e){
		var layouts_tier_slider = '#layouts_tier-1';
		$(layouts_tier_slider).slick('slickUnfilter');
		var showclasses = [];
		$('.ckb-l1:checked').each(function(idx, el){
			showclasses.push('.'+el.value);			
		});
		showclassesFilter = showclasses.join(', ');
		if(!!showclassesFilter)
			$(layouts_tier_slider).slick('slickFilter', showclassesFilter);
		else 
			$(layouts_tier_slider).slick('slickUnfilter');
		
	});

	try{
		$('#docs-modal').on('shown.bs.modal', function(){
			$(this).find('iframe').each(function(idx, el){
				$(el).attr('src', $(el).data('src'));
			});
			$('.slider-docs').slick('unslick');
			setTimeout(function(){$('.slider-docs').slick()}, 100);
			// $('.slider-docs').slick();
		});
		$('.slider-docs').slick();
	} catch(e) {}

	/** Update links */
	$('.our_link').each(function(){
		var _this = $(this);

		_this.attr('href', _this.attr('href') + window.location.search);
	});

	/** Benefits arrow animate */
	setInterval(function(){
		$('#watchDown > .arrowDown').toggleClass('up');
	}, 500);

	/** Show benefits text */
	$('#benefits .item').click(function(){
		var _this = $(this);

		if(_this.children('.hover').hasClass('current')){
			$('#benefits .item .hover').removeClass('current');
		}else{
			$('#benefits .item .hover').removeClass('current');
			_this.children('.hover').toggleClass('current');
		}
	});

	/** Print */
	$('.popup .print').click(function(){
		var _this = $(this);
		var layout = $(_this.data('layout'));
		var page = '<!DOCTYPE html>'+
        '<html><head><meta charset="utf-8" />'+
        '<link rel="stylesheet" type="text/css" media="all" href="'+site_link+'/css/print.css" />'+
        '</head><body>'+
        '<div id="head" class="flex">'+
        '	<div class="sprite color-logo"></div>'+
        '	<div class="phone">'+$('#header .phone').text()+'</div>'+
        '<div>'+layout.find('.thumb').html()+'</div'+
        '</div>'+
        '<div id="layouts" class="flex">' + _this.parents('.content').html() + '</div>'+
        '</body></html>';
        var win1 = window.open("", "myWindow", "toolbar=0,width=1000,height=600");
        win1.document.open();
        win1.document.write(page);
        win1.focus();
        win1.print();
    });

    /** Forms */
    $('form').submit(function(){
    	var _this = $(this);
    	var haveErrors = false;
    	_this.find('input, textarea').removeClass('error').each(function(){
    		if($(this).val().length == 0){
    			haveErrors = true;
    			$(this).addClass('error');
    		}
    	});

    	if(_this.find('.azureus_check').length > 0 && _this.find('input[type="range"]').val() != 100) haveErrors = true;
    	if(haveErrors) return false;
    });

    /** Form range setup */
	$(".azureus_check input[type=range]").on("change mousemove", function() {
		var val = $(this).val();
		$(this).parents(".content").find(".bg").css("width", val + "%");
	});

	/** Menu */
	$('.menu a').click(function(e){
		e.preventDefault();

		var _this = $(this);
		var anchor = _this.attr('href');
		var moveTo = _this.attr('move-to');

		if(moveTo != undefined) anchor = moveTo;

		if(anchor.length > 0){
			$('html, body').animate({scrollTop: $(anchor).offset().top});
			$('.menu').removeClass('active');
			$('#menuBTN').removeClass('active');
			$('#logo').removeClass('open');
		}	

		return;
	});

	$('#menuBTN').click(function(){
		$(this).toggleClass('active');
		$('.menu').toggleClass('active');
		$('#logo').toggleClass('open');
	});

	/** Window scroll */
	$(window).scroll(function(){
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		var _this, anchor;

		/* Update menu */
		$('.menu a').each(function(){
			_this = $(this);
			anchor = _this.attr('href');

			if(anchor != '' && scrolled >= $(anchor).offset().top && scrolled < $(anchor).offset().top + $(anchor).height()){
				$('.menu li').removeClass('.current');
				_this.parent().addClass('current');
			}else{
				_this.parent().removeClass('current');
			}
		});
	});
	$(window).scroll();

	/** Layouts sliders */
	var sliderLayout1 = (function sliderLayout1(){
		$('#layouts_tier-1').slick({
		// infinite: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		prevArrow: $('#layouts_tier-1').prev(),
		nextArrow: $('#layouts_tier-1').next(),
		infinite: false,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
			    slidesToShow: 1,
			    slidesToScroll: 1
			  }
			}
		]
	});
		return sliderLayout1;
	}())
	

	

	$('#layouts_tier-2').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		prevArrow: $('#layouts_tier-2').prev(),
		nextArrow: $('#layouts_tier-2').next(),
		responsive: [
			{
			  breakpoint: 640,
			  settings: {
			    slidesToShow: 1,
			    slidesToScroll: 1
			  }
			}
		]
	});

	/** Gallery */
	$('#gallery .part a').each(function(){
		var _this = $(this);
		var href = _this.attr('href');

		_this.children('.thumb').css('background-image', 'url("'+href+'")');
	});
	$(".fancybox").fancybox();

	/** Scroll up */
	$('#watchUp').click(function(){
		$('html, body').animate({scrollTop: 0});
	});

	/** Mask */
	$('input[type="tel"]').mask("+38(999) 999 99 99");

	/** Popup */
	$('.popupCloseBTN').click(function(e){
		e.preventDefault();
		$('#popupWrap').fadeOut();
		$('.modal').modal('hide');
	});

	$('#popupWrap > .bg').click(function(){
		$('#popupWrap').fadeOut();
	});


	$('.callPopupBtn').click(function(e){
		e.preventDefault();
		$('.modal').modal('hide');
		// showPopup($(this).attr('popup'));
	});

	// $('.callPopupBtn')
	$('.btn-link-layouts').on('click',function(e){
		e.preventDefault();
		$('.modal').modal('hide');
		var _this = $(this);
		var anchor = _this.attr('href');
		var moveTo = _this.attr('move-to');

		if(moveTo != undefined) anchor = moveTo;

		if(anchor.length > 0){
			$('html, body').animate({scrollTop: $(anchor).offset().top});
		}	

	});

	/** Layouts */
	$('#layouts_tier-1 .layout').click(function(){
		var self = $(this);
		var popup = $('.popup[data-name="layouts_tier_1"]');
		var popupInfo = popup.find(".sign");

		popupInfo.children(".area").text( self.attr('area') );
		popupInfo.children(".factor").text( self.attr('factor') );
		popup.find('.thumb').html(self.clone());
		// showPopup("layouts_tier_1");
		$('#layout-one-modal').modal('show');
	});

	$('#layouts_tier-2 .layout').click(function(){
		var popup = $('.popup[data-name="layouts_tier_2"]');
		var _this = $(this);
		var link = _this.attr('src').substring(0, _this.attr('src').length - 5);

		popup.find('.thumb').html('<img src="'+link+'1.png"><img src="'+link+'2.png">');
		showPopup("layouts_tier_2");
	});

	/** Camera */
    $('img#camera').attr('src', 'http://svyatobor.kiev.ua/translator.php?i=' + Math.random());
    var TIMEOUT = 1000;
    var refreshInterval = setInterval(function() {
        var random = Math.floor(Math.random() * Math.pow(2, 31));
        $('img#camera').attr('src', 'http://svyatobor.kiev.ua/translator.php?i=' + Math.random());
    }, TIMEOUT);


    setTimeout(function(){
    	var txt = $('#header .phone a').text();
    	$('#header .phone a').html('<span>'+txt+'</span>');
    	console.log('ok');
    }, 1000);	
});
$(document).ready(function(){
	$('.slider-gallery').slick({
    			slidesToShow: 1,
  				slidesToScroll: 1,
  				autoplay: true,
  				autoplaySpeed: 2000,
  				arrows: false
  			});	
  	$('.slider-gallery-onepic').slick({
    			slidesToShow: 2,
  				slidesToScroll: 1,
  				autoplay: true,
  				autoplaySpeed: 2000,
  				arrows: false
  			});
});


function in_array(needle, haystack, strict) { // Checks if a value exists in an array

    var found = false,
        key,
        strict = !!strict;

    for (key in haystack) {
        if ((strict && haystack[key] === needle) || (!strict && haystack[key] == needle)) {
            found = true;
            break;
        }
    }

    return found;
}
