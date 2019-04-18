/*
 *  POPin Cookies
 * @link https://howchoo.com/g/mme4owq2m2j/how-to-manage-cookies-in-javascript
 */


// Setting a Cookie
export const setCookie = function(name, value, exp) {
  let days, expiration;
  // set `x` amount of days for cookie to expire
  exp = exp || 1;
  // set new date
  days = new Date();
  // convert new days to UTC
  days.setTime(days.getTime() + (exp * 24 * 60 * 60 * 1000));
  // convert UTC to Readable String
  expiration = 'expires=' + days.toUTCString() + ';';
  // set cookie
  document.cookie = name+'='+value+';'+expiration;
};

// Trashing a Cookie
export const trashCookie = function(name) {
  setCookie(name, ' ', -1);
};

// Getting a Cookie
export const getCookie = function(name) {
  var cookies, crumbs;
  cookies = document.cookie.split('; ');
  for (var i = 0; i < cookies.length; i++) {
    crumbs = cookies[i].split('=');
    if ( (crumbs[0] == name) ) {
      return crumbs[1];
    }
  }
  return false;
};

// Setting an Item in a Session
export const setSession = function(key, value) {
  console.log('setSession:', window.sessionStorage.getItem(key));
  window.sessionStorage.setItem(key, value);
};

// Recusing an Item from a Session
export const jeffSession = function(key) {
  console.log('jeffSession:', window.sessionStorage.getItem(key));
  window.sessionStorage.removeItem(key);
};

// Getting an Item in a Session
export const getSession = function(key) {
  console.log('getSession:', window.sessionStorage.getItem(key));
  return window.sessionStorage.getItem(key);
};