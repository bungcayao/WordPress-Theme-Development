/*
*  Module: Section Content
*/

// Check to see if Element is Scrolled into View
// @link https://codepen.io/Founded1898/pen/qqJGjW

function isScrolledIntoView(elem) {
	var docViewTop = $(window).scrollTop();
	var docViewBottom = docViewTop + $(window).height();
	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + $(elem).height();
	return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
};

jQuery(function($) {
	// On Scroll
	$(window).on('scroll', function() {
		// For Each Element that has the class `.animated`
		$(".animated").each(function() {
			//$(this).css('visibility', 'hidden');
			// Animation CSS Class
			let animationType = $(this).attr('data-animate');
			// Check to see if it has come into view
			if (isScrolledIntoView($(this))) {
				// If so, Add our Animation Class
				$(this)
					//.css('visibility', 'visible')
					.addClass(animationType);
			};
		});
	});
});




