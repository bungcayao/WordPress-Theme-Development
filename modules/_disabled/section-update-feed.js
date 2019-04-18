/*
 *  Module: Section Resources (Hybrid)
 */

// News Feed
jQuery(function($) {
	$('.news-link-modal-open').click(function() {
		var newsLink = $(this).attr('data-news-link');
		console.log(newsLink);
		$(this)
			.next()                  // The modal is setup after the clicked element
			.addClass('is-active');   // Then add class
		$(this)
      .parents()  
      .find('.section-update-feed')	  // find video container
			.css('z-index','101');       		// change z-index so that it shows over the navbar	
	});
	$('.modal.news-feed').ready(function(){
		$('.modal-close').click(function() {
			//console.log('modalClose.click');
		 $(this)
			 .parent('.modal')
			 .removeClass('is-active');
			$(this)
			 .parents()	
			 .find('.section-update-feed')	  // find video container
			 .css('z-index','');		        // change it back.  	 
	 	});
	});	
}); 

// Webinar Feed 
jQuery(function($) {
	$('.resource-link-modal-open').click(function() {
		var videoLink = $(this).attr('data-resource-link');
		// console.log(videoLink);
		$(this)
			.next()                     // The modal is setup after the clicked element
      .addClass('is-active')	    // Then add class
      .find('iframe.resource-link-video')
      .attr('src', videoLink);
    $(this)
      .parents()  
      .find('.section-update-feed')	  // find video container
			.css('z-index','101');       		// change z-index so that it shows over the navbar	


	});

	// TODO
	// LOOK UP DETACH and INSERTAFTER
	$('.modal.resource-feed').ready(function(){
		$('.modal-close').click(function() {
			// console.log('modalClose.click');
			$(this)
				.parents()
				.removeClass('is-active')
				.find('iframe.resource-link-video')
        .removeAttr('src');
      $(this)
        .parents()	
        .find('.section-update-feed')	  // find video container
        .css('z-index','');		        // change it back.  
		});
	});
});