/**
 * File seo-verificationjs
 *
 * This script will insert our SEO Verification Codes on our
 * landing pages. We need to do this to make sure our landing
 * pages get crawled on.
 *
 * <meta name="{{seo-name}}" content="{{seo-content}}" />
 * 
 */

const metaElement = document.querySelectorAll('meta[name]').getAttribute('name');

const isMetaSeo = [
	{ engine: 'bing', name: 'msvalidate.01', content: 'C550357DFFE423695B25F5C83CA70367' },
	{ engine: 'google', name: 'google-site-verification', content: 'iyqUy5h8lxgW7_T9I1dPMp_smxkJfTt4IAiolsiYiEM' },
	{ engine: 'yandex', name: 'yandex-verification', content: 'f94106b3401d3e6b' },
];

// Inserts Meta Element with Meta Name and Meta Content
// Insert after <link rel="canonical" ... > element.
function insertMetaSeo(metaSeoEngine,metaSeoName, metaSeoContent) {
	$('<meta name="'+metaSeoName+'" content="'+metaSeoContent+'" />').insertAfter('link[rel=canonical]');
}

// Check to see if Meta SEO
function checkMetaElement(metaSeoName) {
	$('meta[name]').filter(function(){
		if (metaElement ===  metaSeoName) {
			return true;
		} else {
			return false;
		}
	});
}

jQuery(function($) {
	// Loop through our Meta Seo Object Array
	for(i=0; i<isMetaSeo.length; i++) {
		// checkMetaElement(isMetaSeo[i].name);
		if( !checkMetaElement(isMetaSeo[i].name) ) {
			insertMetaSeo(isMetaSeo[i].engine, isMetaSeo[i].name, isMetaSeo[i].content);
		} else {
			return false;
		}
  }
  // Cookie Policy Notification
	let cookiePolicyNotificationHTML = 
	'<!-- Cookie Policy Message -->'+
	'<div data-module="component-notifications" data-session-storage="cookiePolicyConsent" class="component-notifications gdpr-enabled notifications-bottom-dock has-background-popin-purp">'+
	'	<div class="section columns level">'+
	'		<div class="docked-start">'+
	'			<p class="has-text-weight-light has-text-white">We use cookies to offer you a better browsing experience, analyze'+
	'				site traffic and personalize content. Read about how we use cookies and how you can control them in our <a href="/cookie-policy/"'+
	'				 target="_blank" class="has-text-popin">Cookie Policy</a>. If you continue to use this site, you consent to our'+
	'				use of cookies.</p>'+
	'		</div>'+
	'		<div class="docked-end">'+
	'			<a data-onclick="accept_cookie_policy" href="" class="button notifications-cta has-text-weight-bold is-popin is-outlined">'+
	'				Got It </a>'+
	'		</div>'+
	'	</div>'+
	'</div>';
	// $(cookiePolicyNotificationHTML).insertBefore('footer');
});

// Change Site URL Links based on location.hostname
$('a[href]').filter(function(){
  // Capture HREF of links
  var linkHostname = $(this).attr('href');
  // Replace 'www.popinnow.com' links with
  var replace = linkHostname.replace('www.popinnow.com', location.hostname);
  // Change HREF's with the replaced links
  $(this).attr('href', replace);
});

/*
*  Component: Notifications
*  - You can setup a notification globally to show up on all pages
*    or have a notification to be page specific.
*/
// Setting an Item in a Session
setSession = function(key, value) {
  // console.log('setSession:', window.sessionStorage.getItem(key));
  window.sessionStorage.setItem(key, value);
};


// Getting an Item in a Session
getSession = function(key) {
  // console.log('getSession:', window.sessionStorage.getItem(key));
  return window.sessionStorage.getItem(key);
};

// Desired name (through ACF) for our sessionStorage is applied to a data-session-storage attribute
// on our notifications component.
const globalSessionStorageName = 'cookiePolicyConsent' //$('.component-notifications').attr('data-session-storage');
// console.log('globalSessionStorageName:',globalSessionStorageName);
// Setup Variable to get value of our set sessonStorage.
const hasSession = getSession(globalSessionStorageName);
// console.log('hasSession:',hasSession);
hasSession;

/**
 * Init Session Setup 
 * This Init() starts everytime the page loads. It will try to pass our setSession(). 
 * It will detect if a session has been previously set.
 * Returned value will always be getSession()
 */
const initSessionSetup = function(hasSession) {
  const isSessionSetup = hasSession || false;
  // console.log ('isSessionSetup:', isSessionSetup);
  const dataOnClick = $('.notifications-cta').attr('data-onclick');
  // console.log ('dataOnClick:', dataOnClick);

  if (!isSessionSetup) {
    // console.log('IF !isSessionSetup');
    setSession(globalSessionStorageName, '!'+dataOnClick);
    // console.log('RETURN getSession()');
    return getSession(globalSessionStorageName);
  } else {
    // console.log('ELSE isSessionSetup');
    return getSession(globalSessionStorageName);
  }
};

// console.log('INIT Session Setup');
initSessionSetup(hasSession);

jQuery(function($) {

  /** Setup (and Checks) for Notifications Session Storage */
  $('.notifications-cta').filter(function(){
  
    let currentSession = initSessionSetup(hasSession);

    // Desired name (through ACF) for our sessionStorage is applied to a data-session-storage attribute
    // on our notifications component.
    let sessionStorageName = $(this).closest('.component-notifications').attr('data-session-storage');
    // If entered on (through ACF), check for value of CTA OnClick name through data-onclick attribute of our notifications-cta.
    let dataOnClick = $(this).attr('data-onclick');

    
    // Setup for our sessionStorage: 
    // sessionStorage.setItem(globalSessionStorageName, dataOnClick)
    // then notification is set active and visible

    // If our set session doesn't match our data onclick value
    if (currentSession === '!'+dataOnClick) {
      // console.log('currentSession === !dataOnClick');
      $(this).closest('.component-notifications').fadeIn().addClass('is-active');
    } 
    // If our session matches our data onclick value
    // then it means user clicked on cta to disable notification
    // Notification is set to inactive and invisible
    else if (currentSession === dataOnClick) {
      // console.log('currentSession === dataOnClick');
      $(this).closest('.component-notifications').removeClass('is-active');
    }
    // Else, we'll assume no session has been set
    // and we set our session here to let us know user hasn't clicked anything yet.
    else {
      // console.log('setSession');
      setSession(sessionStorageName, '!'+dataOnClick);
    }
  });

  /** Click Event Handler: Sets Session as `user accepted` and hides notification. */
  $('.notifications-cta').click(function(){
    let btnHref = $(this).attr('href');
    let dataOnClick = $(this).attr('data-onclick');
    let sessionStorageName = $(this).closest('.component-notifications').attr('data-session-storage');
    
    // If there is no href value, but an onclick value
    if ( (btnHref === '') ) {    
      $(this).closest('.component-notifications').fadeOut().removeClass('is-active');
      setSession(sessionStorageName, dataOnClick);
      return false;
    } 
    // If there is a href value of `#closeNotification`
    else if ( (btnHref === '#closeNotification') ) {

      $(this).closest('.component-notifications').fadeOut().removeClass('is-active');
      return false;
    } 
    // If the href value is a normal url
    else {
      return false;
    }
  });
  
  /** Click Event Handler: Close Notification `X` Button  */
  $('.delete').click(function(){
    $(this).closest('.component-notifications').fadeOut().removeClass('is-active');
  });
});


function getUrlParameter(sParam) {
	var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

	for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
	}
};

/**
 * Detect AutoTenant Parameters on get.popinnow.com/get_started link
 * and pass off to auto-tenant link
 * @param url 
 */
jQuery(function($) {
  const getCallToActionSource = getUrlParameter('callToAction', false);
  console.log('getCallToActionSource', getCallToActionSource);
  const getPageSource = getUrlParameter('source', false);
  console.log('getPageSource', getPageSource);
	$('a[href*="popinnow.com/#/tenant/setup?"]').filter(function(){    
    let setAutoTenantURL = $(this).attr('href') + '&source=' + getPageSource + '&callToAction=' + getCallToActionSource;
    console.log('setAutoTenantURL',setAutoTenantURL);
		return $(this).attr('href', setAutoTenantURL);
	});
});