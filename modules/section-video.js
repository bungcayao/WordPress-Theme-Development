/*
*  Module: Section Video
*
*  Simple Modal
*  @link https://codepen.io/edgardleal/pen/GWWKoO
*
*  jQuery Function Problems
*  @link https://stackoverflow.com/questions/12258282/typeerror-is-not-a-function-wordpress
*
*/
import {videoHandler} from '../assets/js/page-modules.js';

videoHandler();

jQuery(function($) {
	// $('.play-button').click(function() {
		
	// 	var videoLink = $(this).attr('data-video-link');

	// 	$(this)
	// 		.closest('.video-container')								// Find .modal-open Parent
	// 		.find('.video-section')			// Then to it's sibling .modal
	// 		.addClass('is-active')	// Then add class
	// 		.css('z-index','101')		// change z-index so that it shows over the navbar	
	// 		.find('iframe.video-section')
	// 		.attr('src', videoLink);
	// });
	// $('.modal-close').click(function() {
	// 	//console.log('modalClose.click');
	// 	$(this)
	// 		.closest('.modal')
	// 		.removeClass('is-active')
	// 		.find('iframe.video-section')
	// 		.removeAttr('src');
	// 	$(this)
	// 		.closest('.modal')
	// 		.find('.video-container')	// find video container
	// 		.css('z-index','');		// change it back.
	// });
});
