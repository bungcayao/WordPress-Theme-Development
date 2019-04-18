/*
 *  Module: Section Resources (Hybrid)
 */

jQuery(function($) {
	$('.modal-open').click(function() {
		var videoLink = $(this).attr('data-video-link');
		// console.log(videoLink);
		$(this)
			.parent()								// Find .modal-open Parent
			.siblings('.modal')			// Then to it's sibling .modal
			.addClass('is-active')	// Then add class
			.find('iframe.video')
			.attr('src', videoLink);

	});

	// TODO
	// LOOK UP DETACH and INSERTAFTER
	$('.modal').ready(function(){
		$('.modal-close').click(function() {
			// console.log('modalClose.click');
			$(this)
				.parent()
				.removeClass('is-active')
				.find('iframe.video')
				.removeAttr('src');
		});
	});
});

// Filtering Items init

function initFilteringItems() {

	var activeClass = 'is-active';

	var disabledClass = 'disabled';

	var largeClass = 'large';

	var subLargeClass = 'sub-large';



	jQuery('.filters-block').each(function () {

		var holder = jQuery(this);
		var items = holder.find('.templates-list .item, .results-list .item, .use-cases-list .item');
		var filtersLinks = holder.find('.filters-list a');



		function filtering() {

			var filteredItems = jQuery();



			filtersLinks.each(function () {

				var link = jQuery(this);

				var categoryName = link.data('filter');



				if (link.parent().hasClass(activeClass)) {

					if (categoryName === '*') {

						filteredItems = items;

					} else {

						filteredItems = filteredItems.add(items.filter('.' + link.data('filter')));

					}



					filteredItems.each(function () {

						var item = jQuery(this);



						if (item.hasClass(largeClass) && categoryName !== '*') {

							item.removeClass(largeClass).addClass(subLargeClass);

						} else if (item.hasClass(subLargeClass) && categoryName === '*') {

							item.addClass(largeClass).removeClass(subLargeClass);

						}

					});

				}



				items.addClass(disabledClass);

				filteredItems.removeClass(disabledClass);

			});

		}



		filtering();

		filtersLinks.on('click', function (e) {

			e.preventDefault();

			var link = jQuery(this);

			filtersLinks.parent().removeClass(activeClass);

			link.parent().addClass(activeClass);

			filtering();

		});



		holder.on('append', function (e, obj) {

			items = items.add(obj.items);

			filtering();

		});

	});

};

initFilteringItems();
