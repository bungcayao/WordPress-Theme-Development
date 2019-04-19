/*
*  Module: Section Ribbon
*/

jQuery(function($) {
  // Hide Section Ribbon when clicking on close button
  $('button.delete').click(function(){
    $(this).closest('.section-ribbon').removeClass('is-active');
  });
});
