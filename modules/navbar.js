/*
*  Header (Navbar)
*/


// NavBar Scroll
// Transparent -> Solid Fixed Nav
// TODO (Josh) -> Subtle Fade In/Out FX
(function ($) {
	let navbarHeight = 60;
	$(window).scroll(function () {
		if ($(this).scrollTop() > navbarHeight) {
			$('nav')
				.addClass('is-fixed-top');
		} else {
			$('nav')
				.removeClass('is-fixed-top');
		}
	});
}(jQuery));

/**
 * File navbar-hamburger.js.
 *
 * This is a controller for our Navbar.
 * If in mobile view, we show nav menu items when clicking on hamburger.
 *
 */

document.addEventListener('DOMContentLoaded', function () {

	// Get all "navbar-burger" elements
	var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

	// Check if there are any navbar burgers
	if ($navbarBurgers.length > 0) {

		// Add a click event on each of them
		$navbarBurgers.forEach(function ($el) {
			$el.addEventListener('click', function () {

				// Get the target from the "data-target" attribute
				var target = $el.dataset.target;
				var $target = document.getElementById(target);

				// Toggle the class on both the "navbar-burger" and the "navbar-menu"
				$el.classList.toggle('is-active');
				$target.classList.toggle('is-active');

			});
		});
	}

});
