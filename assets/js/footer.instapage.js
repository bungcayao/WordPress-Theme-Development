/** Intercom */
(function () {
	const w = window;
	let ic = w.Intercom;
	if (typeof ic === 'function') {
		ic('reattach_activator');
		ic('update', intercomSettings);
	} else {
		const d = document;
		const i = function () {
			i.c(arguments);
		};
		i.q = [];
		i.c = function (args) {
			i.q.push(args);
		};
		w.Intercom = i;

		function l() {
			const s = d.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = 'https://widget.intercom.io/widget/inv79zck';
			const x = d.getElementsByTagName('script')[0];
			x.parentNode.insertBefore(s, x);
		}

		if (w.attachEvent) {
			w.attachEvent('onload', l);
		} else {
			w.addEventListener('load', l, false);
		}
	}
})();

/** LinkedIn Tag */
(function() {
	var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";
	b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);
})();

/** Alexa */
(function () {
	var as = document.createElement('script');
	as.type = 'text/javascript';
	as.async = true;
	as.src = "https://certify-js.alexametrics.com/atrk.js";
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(as, s);
})();

// CUSTOM SCRIPTS //

/**
 * Get Parameters By Name
 */
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

// Give the URL parameters variable names
var gclid = getParameterByName('gclid');

/**
 * Set GCLID value in form
 */
$(document).ready(function () {
	
	let setInputGclid = $('input[value=GCLID]').attr({value: gclid, size: "30", maxlength: "130" });
	setInputGclid;

	// Get Link Canonical HREF
	var getSourcePath = window.location.pathname;
	var isSource = getSourcePath.replace(/^\//, '').replace(/\//g, '-');
		
	/**
	 * Set GCLID value in hidden field
	 */
	$('a[href]').filter(function () {
		// Get Value from our HREF's
		let getHrefValue = $(this).attr('href');
		let isHrefValue = null;
		// Links that go to our Marketing Site
		if (getHrefValue == 'https://www.popinnow.com/') {
			// Add New QueryParams
			let isHrefValue = $(this).attr('href', getHrefValue + '?source=' + isSource + '&gclid=' + gclid);
			isHrefValue;
		}
	});

	/**
	 * Set Data Block Section
	 * This code helps put incremental value on `.page-blocks`
	 * This is primarly used for Google Tag Manger
	 */
	 // Analytics: Section Order
	 
	let currentPageBlock = 0;
	$('.page-block').each(function () {
		$(this).attr('data-block-section', currentPageBlock++);
	});

});