/**
 * File swrap-a-tag-space.js
 *
 * For some reason our Blog Posts are stripping out white-space around our <a> tags.
 * We're filtering, searching, and adding &nbsp; around our <a> tags.
 *
 */
jQuery(function ($) {
	// $('a[href]').filter(function(){
	// 	$(this)
	// 		.before(' ')
	// 		.after(' ');
	// });

	// TODO (JOSH)
	// Scrolling doesn't work smoothly on wordpress
	// Offset doesn't offset either.
	
	// Select all links with hashes
	// @link https://css-tricks.com/snippets/jquery/smooth-scrolling/
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function (event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
						scrollTop: (target.offset().top) - 80
					}, 1000, function () {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});

});