/*
*  Component: Notifications
*  - You can setup a notification globally to show up on all pages
*    or have a notification to be page specific.
*/
// import {setSession, jeffSession, getSession} from '../assets/js/pop-cookies.js';

// // Desired name (through ACF) for our sessionStorage is applied to a data-session-storage attribute
// // on our notifications component.
// const globalSessionStorageName = $('.component-notifications').attr('data-session-storage');
// // Setup Variable to get value of our set sessonStorage.
// const hasSession = getSession(globalSessionStorageName);

// // Run this to check if we have a session setup from external pages.
// hasSession;

// /**
//  * Init Session Setup 
//  * This Init() starts everytime the page loads. It will try to pass our setSession(). 
//  * It will detect if a session has been previously set.
//  * Returned value will always be getSession()
//  */
// const initSessionSetup = function(hasSession) {
//   const isSessionSetup = hasSession || false;
//   console.log ('isSessionSetup:', isSessionSetup);
//   const dataOnClick = $('.notifications-cta').attr('data-onclick');
//   console.log ('dataOnClick:', dataOnClick);

//   if (!isSessionSetup) {
//     console.log('IF !isSessionSetup');
//     setSession(globalSessionStorageName, '!'+dataOnClick);
//     console.log('RETURN getSession()');
//     return getSession(globalSessionStorageName);
//   } else {
//     console.log('ELSE isSessionSetup');
//     return getSession(globalSessionStorageName);
//   }
// };

// console.log('INIT Session Setup');
// initSessionSetup(hasSession);

jQuery(function($) {

  // /** Setup (and Checks) for Notifications Session Storage */
  // $('.notifications-cta').filter(function(){
  
  //   let currentSession = initSessionSetup(hasSession);

  //   // Desired name (through ACF) for our sessionStorage is applied to a data-session-storage attribute
  //   // on our notifications component.
  //   let sessionStorageName = $(this).closest('.component-notifications').attr('data-session-storage');
  //   // If entered on (through ACF), check for value of CTA OnClick name through data-onclick attribute of our notifications-cta.
  //   let dataOnClick = $(this).attr('data-onclick');

    
  //   // Setup for our sessionStorage: 
  //   // sessionStorage.setItem(globalSessionStorageName, dataOnClick)
  //   // then notification is set active and visible

  //   // If our set session doesn't match our data onclick value
  //   if (currentSession === '!'+dataOnClick) {
  //     console.log('currentSession === !dataOnClick');
  //     $(this).closest('.component-notifications').addClass('is-active');
  //   } 
  //   // If our session matches our data onclick value
  //   // then it means user clicked on cta to disable notification
  //   // Notification is set to inactive and invisible
  //   else if (currentSession === dataOnClick) {
  //     console.log('currentSession === dataOnClick');
  //     $(this).closest('.component-notifications').removeClass('is-active');
  //   }
  //   // Else, we'll assume no session has been set
  //   // and we set our session here to let us know user hasn't clicked anything yet.
  //   else {
  //     console.log('setSession');
  //     setSession(sessionStorageName, '!'+dataOnClick);
  //   }
  // });

  // /** Click Event Handler: Sets Session as `user accepted` and hides notification. */
  // $('.notifications-cta').click(function(){
  //   let btnHref = $(this).attr('href');
  //   let dataOnClick = $(this).attr('data-onclick');
  //   let sessionStorageName = $(this).closest('.component-notifications').attr('data-session-storage');
    
  //   // If there is no href value, but an onclick value
  //   if ( (btnHref === '') ) {    
  //     $(this).closest('.component-notifications').fadeOut().removeClass('is-active');
  //     setSession(sessionStorageName, dataOnClick);
  //     return false;
  //   } 
  //   // If there is a href value of `#closeNotification`
  //   else if ( (btnHref === '#closeNotification') ) {

  //     $(this).closest('.component-notifications').fadeOut().removeClass('is-active');
  //     return false;
  //   } 
  //   // If the href value is a normal url
  //   else {
  //     return false;
  //   }
  // });
  
  //   /** Click Event Handler: Close Notification `X` Button  */
  $('.close-component-notifications').click(function(){
    console.log('click close-component-notifications');
    $(this).closest('.component-notifications').removeClass('is-active');
  });
});
