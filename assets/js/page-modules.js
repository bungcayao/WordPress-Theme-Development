/**
 * Extract Page Module JS
 *
 * Find all elements with a data-module attribute and call the corresponding module, if it exists.
 * @link https://github.com/ScottPolhemus/modular
 *
 **/

function pageModules() {
	// Setup a search for `data-module` attribute in our page modules.
	const modules = document.querySelectorAll('[data-module]');
	// Here we want to loop through all modules containing a data-module attribute
	for (let i = 0; i < modules.length; i++) {
		// Let that element be data-module[0], data-module[1], data-module[2], etc.
		let elem = modules[i];
		// Let's grab the data-module name from those element attributes
		let name = elem.getAttribute('data-module');

		// Setup -> Let's apply the above to fetch us the js filename
		// Set them to be `required`
		try {
			// Let that element be data-module[0], data-module[1], data-module[2], etc.
			var moduleSection = require('../../modules/' + name + '.js');
		} catch (e) {
			var moduleSection = false;
		};
		// If we have a moduleSection
		if (moduleSection) {
			// Initialize the module
			// new moduleSection(elem);
			// This was implemented from the link above. This caused moduleSection to be an uncaught constructor error.
			// I removed `new moduleSection(elem)` and the conflict seems to be resolved. The module .js file gets required correctly.
		}
	};
};


// We need this function to run on our _bundle.js file
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

// Beautify Hash Anchor Tags
// function locationHashChanged() {
//     if (location.hash === "#english") {
//         window.location.replace("http://myothersite.com/collections/a-course-in-miracles-books");
//     }
// }

// window.onhashchange = locationHashChanged;

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

// Set Policy Tabs 'is-active'.

function policyTabHighlight() {
	let hasPolicyTabs = $('.buttons.has-addons').hasClass('policy-tabs');
	console.log('hasPolicyTabs', hasPolicyTabs);
	if (hasPolicyTabs) {
		let policyTab = $('.policy-tabs', this).children('a[href]');
		console.log('policyTab', policyTab);
		policyTab.filter(function(){
			let policyTabUrl = $(this).attr('href');
			console.log('policyTabUrl', policyTabUrl);
			let policyPage = location.pathname;
			console.log('policyPage', policyPage);
			if (policyPage === policyTabUrl) {
				$(this).addClass('is-active has-background-mono-gray-3 has-text-white is-borderless');
				console.log('true');
			} else if (policyPage !== policyTabUrl) {
				$(this).removeClass('is-active has-background-mono-gray-3 has-text-white is-borderless');
				console.log('false');
			} else {
				return 'NA';
			}
		});
		
	} else {
		return false;
	}
}
policyTabHighlight();
