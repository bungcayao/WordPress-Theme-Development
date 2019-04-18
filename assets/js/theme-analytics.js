/**
 * POPin Analytics Event Tracking
 * Requirements: jQuery, MixPanel, and Google Analytics 
 *  
 * GOOGLE EVENT TRACKING SETUP
 * ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);
 *  eventCategory -> text -> required -> Typically the object that was interacted with (e.g. 'Video')
 *  eventAction -> text -> required ->The type of interaction (e.g. 'play')
 *  eventLabel -> text -> not req -> Useful for categorizing events (e.g. 'Fall Campaign')
 *  eventValue -> integer -> not req -> A numeric value associated with the event (e.g. 42)
 *
 **/

// function setDataBlockSection() {
//     let currentPageBlock = 0;
//     $('.page-block').each(function(){
//         $(this).attr('data-block-section', 'Page Block ' + currentPageBlock);
//       currentPageBlock++;
//     });		
// }
// setDataBlockSection();

 // Analytics: Section Order
function setDataSection() {
    let currentSection = 0;
    $('section').each(function(){
        $(this).attr('data-section', currentSection++);
    });
}
setDataSection();

jQuery(function($) {

    // MixPanel Properties
    let currentPage, actionTaken, linkTitle, linkUrl, ctaType, moduleSection;
    
    // Action/Behavior Checks
    // Checking to see if an Action/Behavior happened.
    let isImage, isButton, isNavbar, isNavbarDropdown, isSitemap, isMailto, isTel, isOutbound, isDownload, isModalOpen, isModalClosed, isVideoOpen, isVideoClosed;

    // Set Initial Value
    actionTaken = linkTitle = currentPage = linkUrl = ctaType = moduleSection = isImage = isButton = isNavbar = isNavbarDropdown = isSitemap = isMailto = isTel = isOutbound = isDownload = isModalOpen = isModalClosed = isVideoOpen = isVideoClosed = null;

    /**
     * Detect AutoTenant Use Case
     * @param url 
     */
    const useCase = function(url) {
        if (!url) {
            return 'NA';
        } else {
            let useCaseCustom = url.indexOf('?useCase=custom');
            let useCasePolling = url.indexOf('?useCase=polling');
            let useCaseSurvey = url.indexOf('?useCase=survey');
            let useCaseCrowdsource = url.indexOf('?useCase=crowdsource');
            let useCaseLiveEvent = url.indexOf('?useCase=liveevent');
            // let useCaseImprovment = url.indexOf('?useCase=improvement');
            // let useCaseMeeting = url.indexOf('?useCase=meeting');
            // let useCaseTownhall = url.indexOf('?useCase=townhall');
            
            if (useCaseCustom != -1) {
                return 'custom';
            } else if (useCasePolling != -1) {
                return 'polling';
            } else if (useCaseSurvey != -1) {
                return 'survey';
            } else if (useCaseCrowdsource != -1) {
                return 'crowdsource';
            } else if (useCaseLiveEvent != -1) {
                return 'live_event';
            } else {
                return 'none';
            }
        }
        return 'NA';
    };

    /**
     * Detect Link Type
     * @param url 
     */
    const linkType = function(url) {
        if (!url) {
            return 'NA';
        } else {
            let isOutbound = ( url.indexOf(window.location.hostname) == -1 );
            let isInbound = ( url.indexOf(window.location.hostname) != -1 );
            let isMailto = ( url.indexOf('mailto:') != -1 );
            let isTel = ( url.indexOf('tel:') != -1 );
            
            if (isMailto) {
                return 'email';
            } else if (isTel) {
                return 'telephone';
            } else if (isOutbound) {
                return 'outbound';
            } else if (isInbound) {
                return 'inbound';
            } else {
                return 'other';
            }
        }
    }

    /**
     * Ability to View Console Logs on Local Env Only
     * @param wp_env -> This paramenter is already setup globally
     */
    const viewConsoleLogs = function(wp_env) {
        if (wp_env == 'local') {
            console.log('actionTaken:', actionTaken);
            console.log('currentPage:', currentPage);
            console.log('linkTitle:', linkTitle);
            console.log('linkUrl:', linkUrl);
            console.log('linkType:', linkType(linkUrl));
            console.log('ctaType:', ctaType);
            console.log('moduleSection:', moduleSection);
            console.log(' ');
        } else {
            return 'NA';
        }
        return 'NA';
    };

    const eventTracked = function (eventName) {
        mixpanel.track(eventName, {
            'current_page': currentPage,
            'link_title': linkTitle,
            'url': linkUrl,
            'link_type': linkType(linkUrl),
            'action_taken': actionTaken,
            'cta_type': ctaType,
            'module': moduleSection,
            'use_case': useCase(linkUrl),
        });
        // ga('send', {
        //     hitType: 'event',
        //     eventCategory: eventName,
        //     eventAction: actionTaken,
        //     eventLabel: ctaType + ' : ' + linkTitle
        // });
    };

    
 
    // section-update-feed, tile - webinars
    $('article[data-resource-link]').click(function(){
        // Tracking Properties
        actionTaken = 'clicked';
        linkTitle = $(this).text().trim();
        currentPage = document.title;
        linkUrl = $(this).attr('data-resource-link');
        ctaType = 'tile';
        moduleSection = $(this).closest('*[data-module]').attr('data-module');
        viewConsoleLogs(wp_env);
        eventTracked('Link Clicked');
        isVideoOpen = $(this).siblings().is('.modal.is-active');
        if (isVideoOpen) {
            actionTaken = 'opened';
            linkUrl = $(this).attr('data-resource-link');
            viewConsoleLogs(wp_env);
            eventTracked('Modal Opened');
            $('.modal-close').click(function(){
                actionTaken = 'closed';
                viewConsoleLogs(wp_env);
                eventTracked('Modal Closed');
            });
        } else {
            console.error('!isVideoOpen');
        };
    });

    // section-update-feed, tile - news
    $('article[data-news-link]').click(function(){
        actionTaken = 'clicked';
        linkTitle = $(this).text().trim();
        currentPage = document.title;
        linkUrl = null;
        ctaType = 'tile';
        moduleSection = $(this).closest('*[data-module]').attr('data-module');
        viewConsoleLogs(wp_env);
        eventTracked('Link Clicked');
        isModalOpen = $(this).siblings().is('.modal.is-active');
        if (isModalOpen) {
            // Modal Opened
            actionTaken = 'opened';
            linkUrl = $(this).siblings().find('footer a').attr('href');
            viewConsoleLogs(wp_env);
            eventTracked('Modal Opened');
            // Modal Closed
            $('.modal-close').click(function(){
                actionTaken = 'closed';
                viewConsoleLogs(wp_env);
                eventTracked('Modal Closed');
            });
        } else {
            console.error('!isModalOpen');
        }
    });
    
    // section-tile && section-update-feed, tile - resources && tile - blog
    $('article[onclick]').click(function(){
        actionTaken = 'clicked';
        linkTitle = $(this).text().trim();
        currentPage = document.title;
        linkUrl = $(this).attr('onclick').replace("window.open('//", "").replace("')", "");
        ctaType = 'tile';
        moduleSection = $(this).closest('*[data-module]').attr('data-module');
        viewConsoleLogs(wp_env);
        eventTracked('Link Clicked');
    });

    // video button - general
    $('a[data-video-link]').click(function(){
        actionTaken = 'clicked';
        linkTitle = $(this).text();
        currentPage = document.title;
        linkUrl = $('a[data-video-link]').attr('data-video-link').replace("//", "");
        ctaType = 'button';
        moduleSection = $(this).closest('*[data-module]').attr('data-module');
        viewConsoleLogs(wp_env);
        eventTracked('Link Clicked');
        isVideoOpen = $(this).parents().siblings().is('.modal.is-active');
        if (isVideoOpen) {
            // Modal Opened
            actionTaken = 'opened';
            viewConsoleLogs(wp_env);
            eventTracked('Video Opened');
            // Modal Closed
            $('.modal-close').click(function(){
                actionTaken = 'closed';
                viewConsoleLogs(wp_env);
                eventTracked('Video Closed');
            });
        } else {
            console.error('!isVideoOpen');
        }
    });

    // video button - play icon
    $('i[data-video-link]').click(function(){
        actionTaken = 'clicked';
        linkTitle = $(this).parent().text();
        currentPage = document.title;
        linkUrl = $('i[data-video-link]').attr('data-video-link').replace("//", "");
        ctaType = 'button';
        moduleSection = $(this).closest('*[data-module]').attr('data-module');
        viewConsoleLogs(wp_env);
        eventTracked('Link Clicked');
        isVideoOpen = $(this).closest('.modal-open').siblings().is('.modal.is-active');
        if (isVideoOpen) {
            // Modal Opened
            actionTaken = 'opened';
            viewConsoleLogs(wp_env);
            eventTracked('Video Opened');
            // Modal Closed
            $('.modal-close').click(function(){
                actionTaken = 'closed';
                viewConsoleLogs(wp_env);
                eventTracked('Video Closed');
            });
        } else {
            console.log('isVideoOpen?');
        }

    });

    /** General Event Tracking **/
    //Track PDF Downloads
    $('a[href*=".pdf"], *[onclick*=".pdf"]')
        .attr('target', '_blank') //open in new tab
        .click(function () {
            actionTaken = 'downloaded';
            linkTitle = $(this).text().trim();
            currentPage = document.title;
            linkUrl = $(this).attr('href') || $(this).attr('onclick').replace("window.open(\'"," ").replace("')", " ");
            ctaType = 'tile';
            moduleSection = $(this).closest('*[data-module]').attr('data-module');
            viewConsoleLogs(wp_env);
            eventTracked('PDF Downloaded');
        });
    
    // Outbound Links
    $('a[href], *[onclick]').filter(function () {
        if ($(this).is('*[onclick]')) {
            let onclickUrl = $(this).attr('onclick').split('/')[2];
            if (onclickUrl && onclickUrl !== window.location.hostname) {
                $(this).attr('target', '_blank')
                    .click(function(){
                        actionTaken = 'clicked';
                        linkTitle = $(this).text().trim();
                        currentPage = document.title;
                        linkUrl = onclickUrl;
                        moduleSection = $(this).closest('*[data-module]').attr('data-module');
                        viewConsoleLogs(wp_env);
                        eventTracked('Outbound Clicked');
                    });
            }
        } else {
            if (this.hostname && this.hostname !== window.location.hostname) {
                $(this).attr('target', '_blank')
                    .click(function(){
                        actionTaken = 'clicked';
                        linkTitle = $(this).text().trim();
                        currentPage = document.title;
                        linkUrl = $(this).attr('href');
                        moduleSection = $(this).closest('*[data-module]').attr('data-module');
                        viewConsoleLogs(wp_env);
                        eventTracked('Outbound Clicked');
                    });
            }
        }
    });

    // general, links with href
	$('a[href]').click(function(){
        // Tracking Properties
        actionTaken = 'clicked';
        linkTitle = $(this).text();
        currentPage = document.title;
        linkUrl = $(this).attr('href');
        ctaType = null;
        moduleSection = $(this).closest('*[data-module]').attr('data-module');
        // Tracking Checks
        isImage = $(this).children().is('img') || $(this).children().is('figure');
        isButton = $(this).hasClass('button');
        isNavbar = $(this).parents().hasClass('.navbar');
        isNavbarDropdown = $(this).parents().hasClass('.navbar-dropdown');
        isSitemap = $(this).parents().hasClass('.footer');

        if (isImage) {
            ctaType = 'image';
            viewConsoleLogs(wp_env);
            eventTracked('Link Clicked');
        } else if (isButton) {
            ctaType = 'button';
            viewConsoleLogs(wp_env);
            eventTracked('Link Clicked');
        } else if (isNavbar) {
            ctaType = 'navbar';
            viewConsoleLogs(wp_env);
            eventTracked('Link Clicked');
        } else if (isNavbarDropdown) {
            ctaType = 'navbar dropdown';
            viewConsoleLogs(wp_env);
            eventTracked('Link Clicked');
        } else if (isSitemap) {
            ctaType = 'sitemap';
            viewConsoleLogs(wp_env);
            eventTracked('Link Clicked');
        } else if (isMailto) {
            ctaType = 'text';
            viewConsoleLogs(wp_env);
            eventTracked('Contact Link Clicked');
        } else if (isTel) {
            ctaType = 'text';
            viewConsoleLogs(wp_env);
            eventTracked('Contact Link Clicked');
        } else {
            ctaType = 'text';
            viewConsoleLogs(wp_env);
            eventTracked('Link Clicked');
        };
    });

});



if(is_page) {
    mixpanel.track('Page Viewed', {
        'Page Title' : document.title,
        'Page Type':'Page',
    });
} else if(is_single) {
    mixpanel.track('Page Viewed', {
        'Page Title' : document.title,
        'Page Type':'Post',
    });
} else if(is_blog) {
    mixpanel.track('Page Viewed', {
        'Page Title' : document.title,
        'Page Type':'Blog',
    });
} else if(is_category) {
    mixpanel.track('Page Viewed', {
        'Page Title' : document.title,
        'Page Type':'Category Archive',
    });
} else if(is_tag) {
    mixpanel.track('Page Viewed', {
        'Page Title' : document.title,
        'Page Type':'Tag Archive',
    });
} else  {
    mixpanel.track('Page Viewed', {
        'Page Title' : document.title,
        'Page Type':'Other',
    });
}

