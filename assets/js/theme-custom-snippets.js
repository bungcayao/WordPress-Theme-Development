/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();

/**
 * File swrap-a-tag-space.js
 *
 * For some reason our Blog Posts are stripping out white-space around our <a> tags.
 * We're filtering, searching, and adding &nbsp; around our <a> tags.
 *
 */
jQuery(function ($) {

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

// We need this function to run on our bundle.js file
pageModules();

// Get Url Parameter
// @link https://stackoverflow.com/questions/19491336/get-url-parameter-jquery-or-how-to-get-query-string-values-in-js
export function getUrlParameter(sParam, sParamSource) {
	let sPageURL = sParamSource || window.location.search.substring(1);
	// if (sParamSource) {
	// 	sPageURL = sParamSource;
	// } else {
	// 	sPageURL = window.location.search.substring(1);
	// }
	console.log('sPageURL', sPageURL);

	var sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

	for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');
			console.log('sParameterName', sParameterName);

			if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}

			return sParameterName[1];
	}
};
// usage -> getUrlParameter('foo') will grab the value of 'foo'

export function videoHandler() {
	jQuery(function($) {
		$('.play-button').click(function() {
			
			var videoLink = $(this).attr('data-video-link');
	
			$(this)
				.closest('.video-container')								// Find .modal-open Parent
				.find('.video-section')			// Then to it's sibling .modal
				.addClass('is-active')	// Then add class
				.css('z-index','101')		// change z-index so that it shows over the navbar	
				.find('iframe.video-section')
				.attr('src', videoLink);
		});
		$('.modal-close').click(function() {
			//console.log('modalClose.click');
			$(this)
				.closest('.modal')
				.removeClass('is-active')
				.find('iframe.video-section')
				.removeAttr('src');
			$(this)
				.closest('.modal')
				.find('.video-container')	// find video container
				.css('z-index','');		// change it back.
		});
	});
}

export function domainLinkHandler() {
	let demo = (location.pathname === '/demo/');
	let preview = (location.pathname === '/preview/');
	let app = (wp_env === 'production');
	let stg = (wp_env === 'staging');
	
	if (demo) {
		return 'demo';
	} else if (preview) {
		return 'preview';
	} else if (app) {
		return 'app';
	} else if (stg) {
		return 'stg';
	} else {
		return 'dev';
	}

}

// Redirect Privacy Policy URLs to Hash Anchor Tags
export const beautifyMyHashTag = function(pageName,anchorTag) {
	let isPageName = window.location.pathname.split("/")[1];
	console.log('isPageName', isPageName);
	let isAnchorTag = window.location.pathname.split("/")[2];
	console.log('isAnchorTag', isAnchorTag);
	if (isPageName === pageName) {
			console.log('isPageName === pageName is TRUE')
			if (isAnchorTag === anchorTag) {
					console.log('isAnchorTag === anchorTag is TRUE');
					console.log('//'+top.location.host+'/'+pageName+'/#'+anchorTag);
					window.location.replace('//'+top.location.host+'/'+pageName+'/#'+anchorTag);
			} else {
					console.log('isAnchorTag === anchorTag is FALSE');
					return false;
			}
	} else {
			console.log('isPageName === pageName is FALSE');
			return false;
	}
}