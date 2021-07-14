/*
 * @plugin SO Ajax Shortcode
 */


$(document).ready(function() {
	jQuery(".know-more").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		alert('knowmore');
// 		var linkto=jQuery(this).attr("href")
// 		window.history.replaceState({},'https://nexmark.io/',''+jQuery(this).attr("href"));

	});	
	
	
	const el = jQuery('.menu-cover');
	el.on('click', function () {
		el.toggleClass('is-active');
		jQuery(".an-menu-overlay").toggle(1200);
		jQuery("body").toggleClass("an-overflow");
		jQuery("#menu-mobile-1").fadeToggle();
		jQuery("#menu-mobile-2").fadeToggle();
		jQuery("#menu-mobile-3").fadeToggle();
		jQuery("#menu-mobile-4").fadeToggle();

	});
	$("#an-mobile-menu-btn").click(function () {
		$(".an-mobile-menu-open").fadeToggle(1000);
	});
	$(".an-mobile-li").click(function () {
		$(".an-mobile-menu-open").fadeOut(1000);
		$("#an-mobile-menu-btn").removeClass("is-active")
	});


	$('li').removeClass('Portfolio-tabs-active');
	$( ".nav-pills a li" ).first().addClass('Portfolio-tabs-li-active');
	item_count=4;
	$('#QueryCount').val(item_count);	
	var item_count = $( "#QueryCount" ).val()
	$.ajax({
		type: 'POST',
		url: ajaxurl,
		data: {
			"action" : 'PortfolioFilter',
			'action-name' : 'first-portfolio',
			'item-count' : item_count ,			
		},
		dataType: 'json',
		success: function(response) {
			var result=response['data']["htmlbody"];
			var hidesoremore=response['data']["HideSeeMore"];
			if (hidesoremore!=0) {
				$('#ShowSeeMore').val(0);
				$("#see-more").hide();
			}else{
				$("#see-more").show();
				$('#ShowSeeMore').val(1);
			}				

			$("#portfoliocontent").html(result);

			console.log(response);
			// 			console.log(result);

		}

	});

	$('.Portfolio-tabs ').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$([document.documentElement, document.body]).animate({
			scrollTop: $(".Portfolio-tabs").offset().top- 50
		}, 1000);
		var param1=$( this ).attr('cat-id');
		var item_count = $( "#QueryCount" ).val()
		item_count=4;
		$('#QueryCount').val(item_count);
		$('#catID').val(param1);
		$('li').removeClass('Portfolio-tabs-li-active');
		// 		$(this).parent('li').addClass('li.Portfolio-tabs-li-active');
		$(this).find('li').addClass('Portfolio-tabs-li-active');
		$(".an-back-div").hide();

		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				"action" : 'PortfolioFilter',
				'cat-id' : param1,
				'action-name' : 'filter-portfolio',
				'item-count' : item_count ,				
			},
			dataType: 'json',
			success: function(response) {
				var result=response['data']["htmlbody"];
				var hidesoremore=response['data']["HideSeeMore"];
				if (hidesoremore!=0) {
					$('#ShowSeeMore').val(0);
					$("#see-more").hide();
				}
				else{
					$("#see-more").show();
					$('#ShowSeeMore').val(1);
				}					

				$("#portfoliocontent").html(result);
				console.log(response);
				// 				console.log(result);

			}

		});
	});
	$('#see-more').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		// 		$([document.documentElement, document.body]).animate({
		// 			scrollTop: $(".Portfolio-tabs a").offset().top- 50
		// 		}, 1000);
		var item_count = $( "#QueryCount" ).val()
		item_count=parseInt(item_count)+4;
		$('#QueryCount').val(item_count);
		var catID=$('#catID').val();
		// 		//var param1=$( this ).attr('cat-id');
		// 		$('li').removeClass('Portfolio-tabs-active');
		// 		$(this).parent('li').addClass('Portfolio-tabs-active');


		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				"action" : 'PortfolioFilter',
				'cat-id' : parseInt(catID),
				'action-name' : 'filter-portfolio',
				'item-count' : item_count ,

			},
			dataType: 'json',
			success: function(response) {
				var result=response['data']["htmlbody"];
				var hidesoremore=response['data']["HideSeeMore"];
				if (hidesoremore!=0) {
					$('#ShowSeeMore').val(0);
					$("#see-more").hide();
				}
				else{
					$("#see-more").show();
					$('#ShowSeeMore').val(1);
				}					

				$("#portfoliocontent").html(result);
				console.log(response);
				// 				console.log(result);

			}

		});
	});	

	$('#contactusbutton').click(function(e){
		e.preventDefault();
		// 		e.stopPropagation();
		// 		$([document.documentElement, document.body]).animate({
		// 			scrollTop: $(".Portfolio-tabs a").offset().top- 50
		// 		}, 1000);

		var message = $( "#message" ).val();
		var from = $( "#email" ).val();
		var fullName = $( "#FullName" ).val();
		var company = $( "#Companyname" ).val();
		var phone = $( "#tel" ).val()

		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				"action" : 'sendmailajax',
				'message' : message ,
				'from' : from ,
				'fullName' : fullName,
				'company_name' : company,
				'phone': phone,


			},
			dataType: 'json',
			success: function(response) {
				var result=response['data']["htmlbody"];

				jQuery("#response").show();
				$("#response").html(result);
				console.log(response);
				// 				console.log(result);

			}

		});
	});	

	var owl = $('.owl-carousel');

	// Carousel initialization
	owl.owlCarousel({
		loop:true,
		margin:0,
		navSpeed:1000,

		autoplay: true,
		rewind: true,
		items:1
	});


	// add animate.css class(es) to the elements to be animated
	function setAnimation ( _elem, _InOut ) {
		// Store all animationend event name in a string.
		// cf animate.css documentation
		var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

		_elem.each ( function () {
			var $elem = $(this);
			var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

			$elem.addClass($animationType).one(animationEndEvent, function () {
				$elem.removeClass($animationType); // remove animate.css Class at the end of the animations
			});
		});
	}

	// Fired before current slide change
	owl.on('change.owl.carousel', function(event) {
		var $currentItem = $('.owl-item', owl).eq(event.item.index);
		var $elemsToanim = $currentItem.find("[data-animation-out]");
		setAnimation ($elemsToanim, 'out');
	});

	// Fired after current slide has been changed
	var round = 0;
	owl.on('changed.owl.carousel', function(event) {

		var $currentItem = $('.owl-item', owl).eq(event.item.index);
		var $elemsToanim = $currentItem.find("[data-animation-in]");

		setAnimation ($elemsToanim, 'in');
	})

	owl.on('translated.owl.carousel', function(event) {

		if (event.item.index == (event.page.count - 1))  {
			if (round < 1) {
				round++

			} else {
				owl.trigger('stop.owl.autoplay');
				var owlData = owl.data('owl.carousel');
				owlData.settings.autoplay = false; //don't know if both are necessary
				owlData.options.autoplay = false;
				owl.trigger('refresh.owl.carousel');
			}
		}
	});




});

$( document ).ajaxComplete(function() {
	setTimeout(function(){
		jQuery("#response").empty();
		jQuery("#response").hide();
		$( "#message" ).val("");
		$( "#email" ).val("");
		$( "#FullName" ).val("");
		$( "#Companyname" ).val("");
		$( "#tel" ).val("")	;	

	},5000)


	if (jQuery(window).width() >= 1239) {

		jQuery(".an-overlay-hover-left").click(function () {
			jQuery('.an-overlay-hover-left').not( $(this) ).hide();
			jQuery('.an-overlay-hover-right') .hide();
			jQuery(".an-title-for-hover").css({"color":"black"});
			jQuery(".an-para-for-hover").css({"color":"black"});
			jQuery(".an-back-div").show();
			jQuery("#see-more").hide();
			jQuery(this).find("img").animate({left: '107%'} , 1200);
			jQuery(".an-para-for-hover").fadeIn();
			jQuery(".an-title-for-hover").fadeIn();
			jQuery(".portfolio-button").fadeIn();


			jQuery(this).find(".an-overlay").addClass("fullWidthbox");
			jQuery(this).find(".an-overlay").removeClass("an-overlay");
			$([document.documentElement, document.body]).animate({
				scrollTop: jQuery(this).find("img").offset().top- 150
			}, 1000);			
		});
		jQuery(".an-overlay-hover-right").click(function () {

			jQuery(".an-title-for-hover").css({"color":"black"});
			jQuery(".an-para-for-hover").css({"color":"black"});
			jQuery('.an-overlay-hover-right').not( $(this) ).hide();
			jQuery('.an-overlay-hover-left').hide();
			jQuery(".an-back-div").show();
			jQuery("#see-more").hide();
			jQuery(this).find(".an-overlay").addClass("fullWidthbox");
			jQuery(this).find(".an-title-for-hover").addClass("fullWidthboxRight");
			jQuery(this).find(".an-para-for-hover").addClass("fullWidthboxRight");
			jQuery(".an-para-for-hover").fadeIn();
			jQuery(".an-title-for-hover").fadeIn();
			jQuery(".portfolio-button").fadeIn();
			jQuery(this).find(".portfolio-button").css({"left": "119%"});
			jQuery(this).find("img").css({"left": "106%"});
			jQuery(this).find("img").animate({right: '106%',left: '0%'} , 1200);
			jQuery(this).find(".an-overlay").removeClass("an-overlay");
			$([document.documentElement, document.body]).animate({
				scrollTop: jQuery(this).find("img").offset().top- 150
			}, 1000);					

		});
		jQuery(".an-back-img").click(function () {
			jQuery(".an-overlay-hover-right").find("img").css({"left" : "0"})
			jQuery(".an-overlay-hover-left").find("img").css({"left" : "0%"})
			jQuery('.an-overlay-hover-right').show();
			jQuery('.an-overlay-hover-left').show();
			jQuery('.an-overlay ').removeClass("fullWidthbox");
			jQuery('.an-title-for-hover ').removeClass("fullWidthboxRight");
			jQuery('.an-para-for-hover ').removeClass("fullWidthboxRight");
			jQuery('.an-para-for-hover').hide();
			jQuery('.an-title-for-hover').hide();
			jQuery(".portfolio-button").hide();
			jQuery(this).find(".fullWidthbox").addClass("an-overlay");
			var ShowMoreButton= $('#ShowSeeMore').val();
			if (ShowMoreButton!=0){jQuery("#see-more").show();}
			else {jQuery("#see-more").hide();}

			jQuery('.an-back-div').hide();

		});
		jQuery(".an-overlay-hover-right").hover(function () { 
			jQuery(this).find(".an-title-for-hover").show();
		},
												function(){
			// 			jQuery(this).find(".an-title-for-hover").hide();
		}); 
		jQuery(".an-overlay-hover-left").hover(function () { 
			jQuery(this).find(".an-title-for-hover").show();
		},
											   function(){
			// 			jQuery(this).find(".an-title-for-hover").hide();
		}); 
	}

	if (jQuery(window).width() <= 1000) {

		jQuery(".an-overlay-hover-left").click(function () {
			jQuery('.an-overlay-hover-left').not( $(this) ).hide();
			jQuery('.an-overlay-hover-right') .hide();
			jQuery(".an-title-for-hover").css({"color":"black"});
			jQuery(".an-para-for-hover").css({"color":"black"});
			jQuery(".an-back-div").show();
			jQuery("#see-more").hide();
			jQuery(this).find(".an-para-for-hover").animate({top: '17'} , 1200);
			jQuery(this).find(".an-para-for-hover").css({'position': 'relative'});
			jQuery(this).find(".an-title-for-hover").animate({top: '-30'} , 1200);
			jQuery(this).find(".an-title-for-hover").css({'position': 'relative'});
			jQuery(".an-para-for-hover").fadeIn();
			jQuery(".an-title-for-hover").fadeIn();
			jQuery(".portfolio-button").fadeIn();
			jQuery(this).find(".portfolio-button").animate({"marginTop": '30px'} ,1000);





			//jQuery(this).find(".an-overlay").addClass("fullWidthbox");
			$([document.documentElement, document.body]).animate({
				scrollTop: jQuery(this).find("img").offset().top- 150
			}, 1000);			
		});
		jQuery(".an-overlay-hover-right").click(function () {

			jQuery(".an-title-for-hover").css({"color":"black"});
			jQuery(".an-para-for-hover").css({"color":"black"});
			jQuery('.an-overlay-hover-right').not( $(this) ).hide();
			jQuery('.an-overlay-hover-left').hide();
			jQuery(".an-back-div").show();
			jQuery("#see-more").hide();
			//jQuery(this).find(".an-overlay").addClass("fullWidthbox");
			//jQuery(this).find(".an-title-for-hover").addClass("fullWidthboxRight");
			//jQuery(this).find(".an-para-for-hover").addClass("fullWidthboxRight");
			jQuery(this).find(".an-para-for-hover").animate({top: '17'} , 1200);
			jQuery(this).find(".an-para-for-hover").css({'position': 'relative'});
			jQuery(this).find(".an-title-for-hover").animate({top: '-30'} , 1200);
			jQuery(this).find(".an-title-for-hover").css({'position': 'relative'});
			jQuery(".an-para-for-hover").fadeIn();
			jQuery(".an-title-for-hover").fadeIn();
			jQuery(".portfolio-button").fadeIn();
			jQuery(this).find(".portfolio-button").animate({"marginTop": '30px'} ,1000);

			//jQuery(this).find("img").css({"left": "106%"});
			//jQuery(this).find("img").animate({right: '106%',left: '0%'} , 1200);
			$([document.documentElement, document.body]).animate({
				scrollTop: jQuery(this).find("img").offset().top- 150
			}, 1000);					

		});
		jQuery(".an-back-img").click(function () {
			jQuery(".an-overlay-hover-right").find("img").css({"left" : "0"})
			jQuery(".an-overlay-hover-left").find("img").css({"left" : "0%"})
			jQuery('.an-overlay-hover-right').show();
			jQuery('.an-overlay-hover-left').show();
			jQuery('.an-overlay ').removeClass("fullWidthbox");
			jQuery('.an-title-for-hover ').removeClass("fullWidthboxRight");
			jQuery('.an-para-for-hover ').removeClass("fullWidthboxRight");
			jQuery('.an-para-for-hover').hide();
			jQuery('.an-title-for-hover').hide();
			jQuery(".portfolio-button").hide();
			var ShowMoreButton= $('#ShowSeeMore').val();
			if (ShowMoreButton!=0){jQuery("#see-more").show();}
			else {jQuery("#see-more").hide();}

			jQuery('.an-back-div').hide();

		});
		jQuery(".an-overlay-hover-right").hover(function () { 
			jQuery(this).find(".an-title-for-hover").show();
		},
												function(){
			// 			jQuery(this).find(".an-title-for-hover").hide();
		}); 
		jQuery(".an-overlay-hover-left").hover(function () { 
			jQuery(this).find(".an-title-for-hover").show();
		},
											   function(){
			// 			jQuery(this).find(".an-title-for-hover").hide();
		}); 
	}

	jQuery(".know-more").click(function(e){
		e.preventDefault();
		e.stopPropagation();
 		var linkto=jQuery(this).attr("href")
 		window.history.replaceState({},'https://nexmark.io/',''+jQuery(this).attr("href"));

	});	

});