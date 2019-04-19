import {getCookie} from '../assets/js/pop-cookies.js';
/*
*  Module: Redirect Url
*/

// TODO (JOSH): Make ACF more flexible for analytics 
// Grab Current URL from Browser
let currentUrl = window.location.href;  
let isCookieConsentAllowed = (getCookie('cookieconsent_status') === 'allow');

window.onload = function() {
  if (isCookieConsentAllowed) { 
    redirectOpenUrl(currentUrl);
    console.log('If TRUE, run redirectOpenUrl(currentUrl)');
  } else {
    console.log('If FALSE, don\'t run redirectOpenUrl(currentUrl)');
    return false;
  }
}

/**
 * Redirect URL to Download/Open File based on Querystring Value
 * @param getUrl -> we will be plugging in currentUrl 
 */
function redirectOpenUrl(getUrl) {
  // Check to see if URL is a `download` landing page created on the WordPress side.
  // @link www.popinnow.com/download/
  let redirectUrlExist = getUrl.indexOf(window.location.pathname+'?');
  let ifHimss19Exist = getUrl.indexOf(window.location.hostname+'/himss19/');
  console.log('redirect url exist:', redirectUrlExist);
  console.log('ifHimss19Exist url exist:', ifHimss19Exist);


  
  if (redirectUrlExist !== -1) {

    /**
     * Get the URL parameters
     * source: https://css-tricks.com/snippets/javascript/get-url-variables/
     * @param  {String} url The URL
     * @return {Object}     The URL parameters
     */
    var getParams = function (url) {
      var params = {};
      var parser = document.createElement('a');
      parser.href = url;
      var query = parser.search.substring(1);
      var vars = query.split('&');
      for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
      }
      return params;
    };

    let redirectParams = getParams(currentUrl);
    console.log('redirectParams', redirectParams);
    
    let qrySource = redirectParams['source'] || 'undefined';
    console.log('qrySource', qrySource);

    let qryTarget = redirectParams['t'] || 'undefined';
    console.log('qryTarget', qryTarget);

    let qryTargetId = redirectParams['tid'] || 'undefined';      
    console.log('qryTargetId', qryTargetId);


    // Track in MixPanel and GA
    mixpanel.track(eventAction+' Clicked', {
      'url': currentUrl,
      'source': qrySource,
      'target': qryTarget,
      'target_id': qryTargetId,
      'target_url': redirectUrl,
      'action_taken': eventAction
    });
    ga('send', {
        hitType: 'event',
        eventCategory: 'Interaction',
        eventAction: eventAction+' Clicked',
        eventLabel: 'Source: '+qrySource+' - Target: '+qryTarget+' - Target ID: '+qryTargetId+' - Target URL: '+ redirectUrl
    });

    console.log('Event Action:', eventAction);

    // Open File up in same browser window.
    setTimeout(function(){ 
      window.location.replace(redirectUrl);
      window.open(redirectUrl, '_blank');
      // Track in MixPanel and GA
      mixpanel.track(eventAction+' Redirected', {
        'url': currentUrl,
        'source': qrySource,
        'target': qryTarget,
        'target_id': qryTargetId,
        'target_url': redirectUrl,
        'action_taken': 'MS Teams Page Redirected'
      });
      ga('send', {
        hitType: 'event',
        eventCategory: 'Interaction',
        eventAction: eventAction+' Redirected',
        eventLabel: 'Source: '+qrySource+' - Target: '+qryTarget+' - Target ID: '+qryTargetId+' - Target URL: '+ redirectUrl
      });
      console.log('Event Action: Page Redirected');
    }, 100);     
    
  } else {
    return false;
  }
}
