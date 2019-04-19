/***************************
 * 
 * Bundle JavaScript File
 * 
 ***************************/

// Analytics Libraries
require('./theme-google-analytics.js');
require('./theme-mixpanel.js');

// Theme Analytics: 
// Page Views, Events, Downloads, Videos, etc.
require('./theme-analytics.js');

// Auto-Tenant
// Validate Email Addresses & Join Event Code
// Sends valid inputs to the server
require('./theme-autotenant.js');

// Page Modules
// This WordPress theme is built with reusable modules/components.
// This JavaScript file allows these modules/components to live/die in it's own component/module.
require('./page-modules.js');

// Theme Cookies and Sessions
// Set, Get, Trash Cookies and Sessions
// How to Use in other JS Files:
// import {isEmailValid, isNameValid, isPhoneValid, isPresentationCodeValid} from './theme-cookies.js';

// Theme Validations
// Validation Patterns for Email, Name, Phone, and Presentation Code
// Exported Functions that can be Imported into other JS files
// How to Use in other JS Files:
// import {setCookie, trashCookie, getCookie, setSession, trashSession, getSession} from './theme-validation.js';