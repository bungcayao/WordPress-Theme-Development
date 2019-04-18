/**
 * POPin Form Validation
 * Usages for Form Input Field Patterns
 * 
 * @link http://html5pattern.com/
 * 
 **/

export function isEmailValid(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    console.log('isEmailValid:', pattern.test(emailAddress));
    return pattern.test(emailAddress);
}

export function isNameValid(name) {
  // var pattern = /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/i;
  var pattern = /.{1,20}$/i;
  console.log('isNameValid:', pattern.test(name));
  return pattern.test(name);
}

export function isPhoneValid(number) {
  var pattern = /^[0-9]{10,20}$/;  
  console.log('isPhoneValid:', pattern.test(number));              
  return pattern.test(number);
}

export function isPresentationCodeValid(code) {
  var pattern = /^[0-9A-Za-z]{1,20}$/; 
  console.log('isPresentatoinCodeValid:', pattern.test(code));
  return pattern.test(code);
}