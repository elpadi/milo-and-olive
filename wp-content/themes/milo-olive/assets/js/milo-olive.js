jQuery(document).ready(function($){
	"use strict";





	// Menu Toggle
	$('html').addClass('enhanced');
	$('#menu-btn').on('click', function() {
	$('#nav').toggleClass('show');
	$('#nav-icon').toggleClass('open');
	 });

	 // Sub-menu hover on mobile
	 $('#menu-item-1132').on('click', function() {
		$('#primary-menu .sub-menu').toggleClass('show');
	 });







	// Menu Tabs
	$('#menu-tabs').each(function(){                   // Find lists of tabs
	  var $this = $(this);                            // Store this list
	  var $tab = $this.find('li.active');             // Get the active list item
	  var $link = $tab.find('a');                     // Get link from active tab
	  var $panel = $($link.attr('href'));             // Get active panel

	  $this.on('click', '.tab-control', function(e) { // When click on a tab
		e.preventDefault();                           // Prevent link behavior
		var $link = $(this),                          // Store the current link
			id = this.hash;                           // Get href of clicked tab

		if (id && !$link.is('.active')) {             // If not currently active
		  $panel.removeClass('active');               // Make panel inactive
		  $tab.removeClass('active');                 // Make tab inactive

		  $panel = $(id).addClass('active');          // Make new panel active
		  $tab = $link.parent().addClass('active');   // Make new tab active
		}
	  });
	});





	// Photo Gallery Magnific Lightbox
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',

		callbacks: {
		change: function() {
			if (this.isOpen) {
				this.wrap.addClass('mfp-open');
			}
		}
	},
		gallery:{
		enabled:true,
		navigateByImgClick: true,
		preload: [0,2],
		tPrev: 'previous projects', // title for left button
		tNext: 'next projects', // title for right button
		arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
		tCounter: ''
	  }
	});

	$("#checker").change(function() {
		if(this.checked) {
			$('#mc4wp-form-1 input[type=checkbox]').attr('checked', true);
			$('#milo-check').attr('checked', true);
		} else {
			$('#mc4wp-form-1 input[type=checkbox]').attr('checked', false);
		}
	});





	/* ----- Credits Pop-up ----- */
	var $popup = $('.pop-up');
	var $body = $('body');

	// Show Popup popup
	$('.js-pop-up__trigger').on('click', function(e) {
		e.stopPropagation();
		e.preventDefault();
		$popup.toggleClass('is-open');
		$body.addClass('fixed');
	});

	// Close Popup when click .close
	$('.js-close').on('click', function() {
		$popup.removeClass('is-open');
		$body.removeClass('fixed');
	});

	// Close Popup by esc key
	function popupClose ( e ) {
		if ( !e.keyCode || e.keyCode === 27 ) {
			$popup.removeClass("is-open");
			$('body').removeClass('fixed');
		}
	}
	document.addEventListener('keydown', popupClose);





	// Slider Home
	$('.js-slider').slick({
		infinite: true,
		fade: true,
		speed: 2500,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 1000,
		pauseOnHover: false
	});



});
