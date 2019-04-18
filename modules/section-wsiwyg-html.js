jQuery(function ($) {
  $('.button.view-sample-report').click(function () {
    console.log('view smaple report clicked');
    var linkSampleReport = $(this).attr('data-sample-report-link');
    $(this)
      .closest('section') // Find .modal-open Parent
      .children('.modal') // Then to it's sibling .modal
      .addClass('is-active') // Then add class
      .css('z-index', '101')
      .find('img.attach-report')
      .attr('src', linkSampleReport);
      // .find('.modal-background');
  });
  $('.modal-close').click(function () {
    var modalSampleReport = $(this).closest('section').hasClass('view-sample-report');
    if(modalSampleReport) {
      console.log('modalSampleReport', modalSampleReport);
      $(this)
        .closest('.modal')
        .removeClass('is-active')
        .css('z-index', '')
        .find('img.attach-report')
        .removeAttr('src');
    }
  });
});
