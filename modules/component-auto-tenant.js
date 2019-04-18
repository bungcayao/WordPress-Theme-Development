/*
 *  Module: Component Auto Tenant
 */
import {isEmailValid, isNameValid, isPhoneValid} from '../assets/js/pop-validation.js';
import {getUrlParameter, domainLinkHandler} from '../assets/js/page-modules.js';


jQuery(function ($) {

  // Variables - Auto Tenant Use Case Selector
  let autoTenantSelectorComponent = $('section[data-module=component-auto-tenant]');
  let autoTenantButtonSource = $('a[href*="get.popinnow.com/get_started"], a[href*="www.popinnow.com/get-started"], .auto-tenant-get-started');

  // Auto Tenant Use Case Selector
  autoTenantButtonSource.filter(function () {
    // Setup Params
    let getCallToAction = $(this).text().replace(/ /g, '_');
    let getPageSource = location.href;
    let setAutoTenantUrlParams = '&callToAction='+ getCallToAction + '&source=' + getPageSource;
    let atDomainName = '//' + domainLinkHandler() + '.popinnow.com/';
    let atLinkTenantSetup = '#/tenant/setup/?useCase=custom';
    let atLinkAccountCreate = '#/account/create/?useCase=custom';
    let NewAtSelectorLink = $(this).attr('href', atDomainName+atLinkAccountCreate+setAutoTenantUrlParams);
    console.log('NewAtSelectorLink', NewAtSelectorLink);
    NewAtSelectorLink;
  

    // When button source is clicked...
    // $(this).click(function (e) {
    //   // Prevent Default HREF Clicks
    //   // e.preventDefault();
    //   // Instead do the following...
    //   // $('body').css('overflow-y','hidden');
    //   // Show Modal Take Over
    //   // autoTenantSelectorComponent
    //   //   .removeClass('is-active')
    //   //   .addClass('is-active')
    //   //   .css('overflow-y', 'auto');
    //   // Setup Modal Take Over Links with Correct Params
    //   // $('.auto-tenant-selector-link').each(function () {
    //   //   let atHardCodedLink = $(this).attr('href');
    //   //   let atDomainName = '//' + domainLinkHandler() + '.popinnow.com/';
    //   //   let atUseCaseParam = getUrlParameter('useCase', atHardCodedLink);
    //   //   console.log('atUseCaseParam', atUseCaseParam);
    //   //   let atLinkTenantSetup = '/#/tenant/setup/?useCase='+atUseCaseParam;
    //   //   let atLinkAccountCreate = '/#/account/create/?useCase='+atUseCaseParam;
    //   //   let NewAtSelectorLink = $(this).attr('href', atDomainName+atLinkTenantSetup+setAutoTenantUrlParams);
    //   //   return NewAtSelectorLink;
    //   // });
    // });
  });


  // Method: Input Key Up and Click Events
  $('input.pop-validation').on('input click', function () {

    // Variable Setup
    let getValue = $(this).val();
    let removeSpecialChars = $(this).val().replace(/[\s()-]/gi,'');
    let inputName = $(this).attr('name');

    // Validation for Input Field Types
    let validationType = null;
      if (inputName === 'phone') {
        validationType = 'number';
      } else if (inputName === 'email') {
        validationType = 'email';
      } else {
        validationType = 'text';
      }
    console.log('validationType:',validationType);
    
    // Reqiuired Input Field Rules
    let checkRequired = $(this).attr('required') || 'optional';
    let isRequired = null;
    

    if (checkRequired === 'required') {
      isRequired = true;
    } else {
      isRequired = false;
    }
    console.log('checkRequired:',checkRequired);

    // Switch/Case Method based on
    // Validation Type and if Required
    switch (validationType) {
      case 'text':
        if (isNameValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-success');
          $(this).siblings('.is-danger').removeClass('is-active');
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': true,
            'inputRequired': true
          });
          return true;
        } else if(!isNameValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-danger');
          $(this).siblings('.is-danger').addClass('is-active');
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': false,
            'inputRequired': true
          });
          return false;
        } else {
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': 'NA',
            'inputRequired': false
          });
          return 'NA';
        }
        break;
      case 'email':
        if (isEmailValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-success');
          $(this).siblings('.is-danger').removeClass('is-active');
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': true,
            'inputRequired': true
          });
          return true;
        } else if(!isEmailValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-danger');
          $(this).siblings('.is-danger').addClass('is-active');
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': false,
            'inputRequired': true
          });
          return false;
        } else {
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': 'NA',
            'inputRequired': false
          });
          return 'NA';
        }
        break;  
      case 'number':
        if (isPhoneValid(removeSpecialChars) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-success');
          $(this).siblings('.is-danger').removeClass('is-active');
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': true,
            'inputRequired': true
          });
          return true;
        } else if(!isPhoneValid(removeSpecialChars) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-danger');
          $(this).siblings('.is-danger').addClass('is-active');
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': false,
            'inputRequired': true
          });
          return false;
        } else {
          dataLayer.push({
            'event': 'inputEntered',
            'inputValid': 'NA',
            'inputRequired': false
          });
          return 'NA';
        }
        break;  
      default:
        console.log('Not required, no validation.');
    }  

  });

  let isFormValid = false;

  // Set Submit Form Click Event
  $('.auto-tenant-demo.submit-form').click(function() {
    dataLayer.push({
      'event': 'formEvent',
      'formAction': 'submit',
      'formResult': 'init'
    });   
    console.log('you clicked the submission button');

    let isRequiredFields = $('input.pop-validation[required]').length; // Checks how many inputs have attr `required`
    let isRequiredFieldsValid = $('input.pop-validation[required].is-success').length; // Checks how many of the `required` inputs are valid  
    console.log('isReqiredFields ('+isRequiredFields+') / isRequiredFieldsValid ('+isRequiredFieldsValid+')');

    // Check if Form is Valid
    if (isRequiredFields === isRequiredFieldsValid) {
      isFormValid = true;
      dataLayer.push({
        'event': 'formEvent',
        'formAction': 'validating',
        'formResult': 'valid'
      });
    } else {
      isFormValid = false;
      dataLayer.push({
        'event': 'formEvent',
        'formAction': 'validating',
        'formResult': 'invalid'
      });
    }
    console.log('isFormValid', isFormValid);

    $('form#autotenantDemoForm').submit(function(e){ 
      if (!isFormValid) { 
        // Let's get LIT!
        $('input.pop-validation[required]').filter(function(){
          let hasSuccess = $(this).hasClass('is-success');
          let hasFailure = $(this).hasClass('is-danger');
          if (!hasSuccess || !hasFailure) {
            $(this).addClass('is-danger');
            console.log('Required Fields not filled');
          }
        });
        dataLayer.push({
          'event': 'formEvent',
          'formAction': 'submitting',
          'formResult': 'fail'
        });   
        console.log('Form has failed');
        e.preventDefault();
      } else if (isFormValid) {
        // Submit
        dataLayer.push({
          'event': 'formEvent',
          'formAction': 'submitting',
          'formResult': 'success'
        });   
        console.log('Form has been submitted');
      }
    }); 
    
  });

  // Close Modal - Auto Tenant Overlay
  $('.modal-close.auto-tenant-selector, .auto-tenant-demo.cancel-form').click(function () {
    $('body').css('overflow-y','');
    autoTenantSelectorComponent.removeClass('is-active').css('overflow-y', '');
  });


});
