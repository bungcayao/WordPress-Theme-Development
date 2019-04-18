/*
*  Component: Form Pop Up
*/
import {setCookie, trashCookie, getCookie} from '../assets/js/pop-cookies.js';
import {isEmailValid, isNameValid, isPhoneValid} from '../assets/js/pop-validation.js';

jQuery(function($) {

  // Submit Button Variables
  let disableSubmitButton =  $('.submit-form').attr('disabled', 'disabled');
  let enableSubmitButton =  $('.submit-form').removeAttr('disabled');
  disableSubmitButton;
  
  // Method: Input Key Up and Click Events
  $('input.pop-validation').bind("keyup click", function () {

    enableSubmitButton;
    console.log('enableSubmitButton:',enableSubmitButton);

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
          return true;
        } else if(!isNameValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-danger');
          $(this).siblings('.is-danger').addClass('is-active');
          return false;
        } else {
          return 'NA';
        }
        break;
      case 'email':
        if (isEmailValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-success');
          $(this).siblings('.is-danger').removeClass('is-active');
          return true;
        } else if(!isEmailValid(getValue) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-danger');
          $(this).siblings('.is-danger').addClass('is-active');
          return false;
        } else {
          return 'NA';
        }
        break;  
      case 'number':
        if (isPhoneValid(removeSpecialChars) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-success');
          $(this).siblings('.is-danger').removeClass('is-active');
          return true;
        } else if(!isPhoneValid(removeSpecialChars) && isRequired) {
          $(this).removeClass('is-danger is-success').addClass('is-danger');
          $(this).siblings('.is-danger').addClass('is-active');
          return false;
        } else {
          return 'NA';
        }
        break;  
      default:
        console.log('Not required, no validation.');
    }
  });

  let isFormValid, isFormSubmitted, setExpiration, setFormCookieName, callToAction, showNotification;
  setExpiration = 7; 
  setFormCookieName = 'form_submitted';
  isFormValid = false;
  isFormSubmitted = getCookie(setFormCookieName) || false;
  callToAction = $('.is-downloadable');
  showNotification = false;

  // Handler Customer Stories URL or Modal Form
  if (!isFormSubmitted) {
    console.log('isFormSubmitted:',isFormSubmitted);
    callToAction.attr('data-href', '');
    callToAction.click(function(){
      $(this).closest('section').siblings('.modal').addClass('is-active');
    });
    console.log('Clear data-href');
    console.log('Open Modal');
    showNotification = false;
  } else {
    console.log('isFormSubmitted:',isFormSubmitted);
    let pdfUrl = callToAction.attr('data-href');
    callToAction.attr({'href' : pdfUrl, 'target':'_blank'});
    console.log('Set a[data-href] -> a[href]');
    showNotification = true;
  }

  // Set Cookie Click Event
  $('.submit-form').click(function () {
    let isRequiredFields = $('input[required]').length; // Checks how many inputs have attr `required`
    let isRequiredFieldsValid = $('input[required].is-success').length; // Checks how many of the `required` inputs are valid
    let hasCookieRequest = $(this).hasClass('set-cookie'); // Checks if clicked button has a cookie request
    let submitForm = $(this).closest('form').submit(); // If button clicked, launch form.

    // Check if Form is Valid
    console.log('isReqiredFields: '+isRequiredFields+' | '+isRequiredFieldsValid+' :isRequiredFieldsValid');
    if (isRequiredFields === isRequiredFieldsValid) {
      isFormValid = true;
    } else {
      isFormValid = false;
    }
    
    // If Submission has a Cookie Requet and Form is Valid
    console.log('hasCookieRequest: '+hasCookieRequest+' | '+isFormValid+' :isFormValid');
    if (hasCookieRequest && isFormValid) {
      // Set Value to True 
      isFormSubmitted = true;
      console.log('isFormSubmitted:',isFormSubmitted);
      // Set Cookie for Form Submitted
      setCookie(setFormCookieName, isFormSubmitted, setExpiration);
      console.log('setCookie: ', setCookie(setFormCookieName, isFormSubmitted, setExpiration));
      // Submit Form to Form Action (Pardot)
      submitForm;
      console.log('Form has been submitted');
      // Hide Modal
      $(this).closest('.modal').removeClass('is-active');
      console.log('Hide modal.');
      // Reload Page
      location.reload();
      console.log('Reload page');
    } else {
      // Set Value to False
      // Prevents form from being submitted and page from being reloaded
      isFormSubmitted = false;
      console.log('isFormSubmitted:',isFormSubmitted);
    }
  });

  // Method: Cancel Form Button + Close Modal Event Listener
  $('button.cancel-form, button.modal-close').click(function(){
    // Hide Modal
    $(this).closest('.modal').removeClass('is-active');
    console.log('Hide Modal');
    // Reset Form
    $(this).closest('form').trigger('reset');
    console.log('Reset Modal');
  });

  console.log('showNotifcation:', showNotification);
  if (showNotification) {
    $('.notification').fadeIn().addClass('is-active').delay(3500).fadeOut();
    console.log('Show Notification');
  } else if (!showNotification) {
    $('.notification').fadeOut().removeClass('is-active');
    console.log('Hide Notification');
  }

  // Method: Close Notification Event Listener
  $('.delete').click(function(){
    $('.notification').fadeOut().removeClass('is-active');
    console.log('Hide Notification');
  });

  
});