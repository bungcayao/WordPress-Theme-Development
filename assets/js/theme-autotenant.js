/**
 * Theme Auto Tenant
 * Usage: Validate Emails and Take User into Auto Tenant / Prouct
 *
 **/

import {domainLinkHandler} from './page-modules.js';
import {isEmailValid, isPresentationCodeValid} from './pop-validation.js';
import {getCookie} from './pop-cookies.js';

jQuery(function ($) {

    // Security Fix
    // Links with `target="_blank"` should have the attribute `rel="noopener noreferrer` 
    // @link https://www.jitbit.com/alexblog/256-targetblank---the-most-underestimated-vulnerability-ever/

    $('a[target=_blank]').filter(function(){
        let hasRelationships = $(this).attr('rel');
        let isRelationshipsValues = 'noopener noreferrer';
        let hasNoRelationship = $(this).attr('rel', isRelationshipsValues);

        if (!hasRelationships || (hasRelationships !== isRelationshipsValues)) {
            console.log('hasNoRelationship?', hasNoRelationship);
            hasNoRelationship;
        } else {
            console.log('hasrelationships', hasRelationships);
            console.log('<a href>', $(this).attr('href'));
            return false;
        }
    });


    const isConsented = getCookie('cookieconsent_status');
    console.log('isConsented', isConsented);

    // Setup Variables
    let getEmailValue = null;
    let setAutoTenantUrl = null;
    let locationPath = location.pathname;

    // Method: Email Input Field Keyup || Click
    $('input.auto-tenant-signup').on("input click", function () {
        
        console.log('isConsented', isConsented);

        // Call-To-Action Button
        let ctaButton = $(this).parent('.control').siblings('.control').children('.button.auto-tenant-signup');
        let isAutoTenantSelectorButton = $(this).parent('.control').siblings('.control').children('.button.auto-tenant-signup').hasClass('auto-tenant-selector');
        let autoTenantSelectorButton = $(this).parent('.control').siblings('.control').children('.button.auto-tenant-signup.auto-tenant-selector');
        console.log('isAutoTenantSelectorButton', isAutoTenantSelectorButton);
        console.log('autoTenantSelectorButton', autoTenantSelectorButton);
        // Get Call To Action Text
        let getCallToAction = ctaButton.text().replace(/ /g, '_');

        // Get Page Name
        let getPageName = wp_page_name.replace(/-/g, '_');

        // Get Section Title
        let getSectionTitle = ctaButton.closest('section').find('h1').text().replace(/ /g, '_');

        // Get Email Value
        function getEmailValue() {
            let emailValue = $(this).val();
            if (emailValue) {
                return '&email=' + emailValue;
            } else {
                return false;
            }
        }

        // Set Auto Tenant URL
        let setAutoTenantUrl = '//' + domainLinkHandler() + '.popinnow.com/#/tenant/setup?&callToAction=' + getCallToAction + '&source=mkt_' + getPageName + '_page&useCase=' + getUseCase + getEmailValue();

        // Get Email Value
        console.log('getEmailValue', getEmailValue);
        console.log('isValid', isEmailValid(getEmailValue));

        if (getEmailValue) {
            if (!isEmailValid(getEmailValue)) {
                // Form Field -> Remove Success class and Add Danger class
                $(this).removeClass('is-success').addClass('is-danger');

                if(!isAutoTenantSelectorButton) {
                    // Remove data-href attr
                    ctaButton.removeAttr('href');
                } 
                
            } else {
                // Value -> Make Button Hoverable + Clickble
                ctaButton
                    .removeAttr('style')
                // Form Field -> Remove Danger class and Add Success class
                $(this).removeClass('is-danger').addClass('is-success');

                if(!isAutoTenantSelectorButton) {
                    // Remove data-href attr
                    ctaButton.attr('href', setAutoTenantUrl);
                } else if (isAutoTenantSelectorButton) {
                    let AT_Selector = $('section.auto-tenant-selector');
                    let AT_SelectorClose = $('.modal-close.auto-tenant-selector');
                   
                    autoTenantSelectorButton.click(function(){
                        AT_Selector.addClass('is-active');
                        AT_SelectorClose.click(function(){
                            AT_Selector.removeClass('is-active');
                        });
                    });
                    
                    let AT_SelectorLinkButton = $('.button.auto-tenant-selector-link');
                    AT_SelectorLinkButton.filter(function(){
                        $(this).attr('href', setAutoTenantUrl);
                    });
                }  
            }
        }
        else {
            // No Value -> Make Button Non-Hoverable
            ctaButton
                .css({
                    'cursor': 'default'
                    // 'background-color': '#1dadbe'
                })
                .removeAttr('href');
            // Form Field -> Remove Success or Danger class
            $(this).removeAttr('href').removeClass('is-danger', 'is-success');
        }
    });

    // Method: Presentation Code Input Field Keyup || Click
    $('input.event-code-join').bind("input keydown click", function (event) {
        console.log('input event-code-join keyup click');

        // Call-To-Action Button
        let ctaButton = $(this).parent('.control').siblings('.control').children('.button.event-code-join');
        console.log('ctaButton', ctaButton);

        // Get Call To Action Text
        let getCallToAction = ctaButton.text().replace(/ /g, '_');

        let getModule = $(this).closest('*[data-module]').attr('data-module');
        console.log('getModule', getModule);
            
        // Get Email Value
        let getPresentationCodeValue = $(this).val();
        console.log('getPresentationCodeValue', getPresentationCodeValue);

        // Set Auto Tenant URL
        let setPresentationCodeUrl = '//' + domainLinkHandler() + '.popinnow.com/#/signin?eventCode='+getPresentationCodeValue;


        if (!getPresentationCodeValue) {
            console.log('!getPresentationCodeValue');
            // No Value -> Make Button Non-Hoverable
            ctaButton
                .css({
                    'cursor': 'default',
                    // 'background-color': '#1dadbe'
                })
                .removeAttr('href');
            // Form Field -> Remove Success or Danger class
            $(this).removeClass('is-danger').removeClass('is-success');
        } 
        else if (!isPresentationCodeValid(getPresentationCodeValue)) {
            console.log('!isPresentationCodeValid(getPresentationCodeValue)');
            // Remove data-href attr
            ctaButton.removeAttr('href');
            // Form Field -> Remove Success class and Add Danger class
            $(this).removeClass('is-success').addClass('is-danger');
        } 
        else {
            console.log('else:', setPresentationCodeUrl);
            // Value -> Make Button Hoverable + Clickble
            ctaButton
                .removeAttr('style')
                .attr('href', setPresentationCodeUrl);
            // Form Field -> Remove Danger class and Add Success class
            $(this).removeClass('is-danger').addClass('is-success');
            
            // Triggering a Click when Keypressing 'Enter'
            let hitEnter = (event.keyCode ? event.keyCode : event.which);
            console.log('event', hitEnter);

            if (hitEnter == 13) {
                location.assign(setPresentationCodeUrl);
                console.log('hitEnter');
                return false;
            }
        }

    });

    // Method: Handle Presentation Code
    // Method: Submit Button Click
    $('.button.event-code-join').click(function () {

        // Call-To-Action Button:  Email Form Field's relationship with CTA
        let presentationCodeFormField = $(this).parent('.control').siblings('.control').children('input.event-code-join');

        // Get Email Value
        let setPresentationCodeUrl = $(this).attr('href');
        
        if (!setPresentationCodeUrl) {
            presentationCodeFormField.removeClass('is-success').addClass('is-danger');
        } else {
            presentationCodeFormField.removeAttr('href').removeClass('is-danger', 'is-success');
            //window.open(setPresentationCodeUrl, '_blank');
            //window.location.href(setPresentationCodeUrl);
        }

    });

});