/*
*  Module: Section Header
*/

import {beautifyMyHashTag} from '../assets/js/page-modules';

goToHash('privacy-policy','cookie-policy'); // privacy-policy/#cookie-policy


jQuery(function($) {

  // Grab Current URL from Browser
let currentUrl = window.location.href;  
redirectOpenFile(currentUrl);


  /**
   * Download URL Example:
   * http://local.popinnow.com/download?source=intercom&page=how_do_i_create_and_manage_a_popin&file=Quick_Reference_Guide&ext=pdf
   * https://www.staging1.popinnow.com/download?source=intercom&page=how_do_i_create_and_manage_a_popin&file=Quick_Reference_Guide&ext=pdf
   * https://www.popinnow.com/download?source=intercom&page=how_do_i_create_and_manage_a_popin&file=Quick_Reference_Guide&ext=pdf
   * - ?source: source where file is being linked from, e.g. intercom, emails, etc.
   * - &page: Name of Page/Email/Article/Section that link is being applied to.
   * - &file: Name of File -> This must match the filename exactly, and preferably NO SPACES.
   * - &ext: file extension type
   * 
   * File Download List
   * https://www.popinnow.com/download?source=intercom&page=How_Do_People_Use_POPin&file=POPin_Use_Case_Best_Practices&ext=pdf 
   * https://www.popinnow.com/download?source=intercom&page=How_Do_People_Use_POPin&file=Clayton_State_Class_Participation&ext=pdf 
   * https://www.popinnow.com/download?source=intercom&page=How_Do_People_Use_POPin&file=Jacobs_Engineering_Org_Health&ext=pdf 
   * https://www.popinnow.com/download?source=intercom&page=How_Do_People_Use_POPin&file=Luthern_MedCenter_Lean_Events&ext=pdf 
   * https://www.popinnow.com/download?source=intercom&page=Once_My_POPin_is_Completed_What_Should_I_Do&file=POPin_Analyze_Results&ext=pdf
   * https://www.popinnow.com/download?source=intercom&page=Can_I_Download_Templates_to_Help_Me_Communicate_with_My_Team&file=Custom_POPin&ext=docx 
   * https://www.popinnow.com/download?source=intercom&page=Can_I_Download_Templates_to_Help_Me_Communicate_with_My_Team&file=POPin_for_Improvement&ext=docx 
   * https://www.popinnow.com/download?source=intercom&page=Can_I_Download_Templates_to_Help_Me_Communicate_with_My_Team&file=POPin_for_Meetings&ext=docx 
   * https://www.popinnow.com/download?source=intercom&page=Can_I_Download_Templates_to_Help_Me_Communicate_with_My_Team&file=POPin_for_Surveys&ext=docx
   * https://www.popinnow.com/download?source=intercom&page=Can_I_Download_Templates_to_Help_Me_Communicate_with_My_Team&file=POPin_for_Town_Halls&ext=docx 
   * https://www.popinnow.com/download?source=intercom&page=How_Do_I_Create_and_Manage_a_POPin&file=Quick_Reference_Guide&ext=pdf 
   */ 

  /**
   * Redirect URL to Download/Open File based on Querystring Value
   * @param getUrl -> we will be plugging in currentUrl 
   */
  function redirectOpenFile(getUrl) {
    // Check to see if URL is a `download` landing page created on the WordPress side.
    // @link www.popinnow.com/download/
    let downloadUrlExist = getUrl.indexOf('/download/?');

    if (downloadUrlExist !== -1) {
      console.log('Your file download is being redirected.');
      // Setup Query Search Params
      let getUrlParams = new URLSearchParams(window.location.search);
      // Get Param Value of `source`
      let qrySource = getUrlParams.get('source');
      // Get Param Value of `page`
      let qryPage = getUrlParams.get('page');
      // Get Param Value of `file`
      let qryFile = getUrlParams.get('file');
      // Get Param Value of `ext`
      let qryExt = getUrlParams.get('ext');
      let eventAction = qryExt.toUpperCase() + ' Downloaded';
      // Let's setup our Download Folder Dir Path
      let wpthemeDir = "/wp-content/themes/popin/dist/downloads/";
      // Let's setup our Downloadable File URL
      const downloadFileUrl = window.location.protocol + "//" + window.location.host + wpthemeDir +qryFile + "." + qryExt;

      // Track in MixPanel and GA
      mixpanel.track(eventAction, {
        'current_page': qryPage,
        'link_title': qryFile,
        'url': currentUrl,
        'file_type': qryExt,
        'action_taken': 'downloaded',
        'source': qrySource,
      });
      // ga('send', {
      //     hitType: 'event',
      //     eventCategory: eventAction,
      //     eventAction: 'downloaded',
      //     eventLabel: qryExt + ' : ' + qrySource + '/' + qrySource + '/' + qryFile
      // });

      // Open File up in same browser window.
      //window.location.replace('https://media.giphy.com/media/pHMtogPBHC7Cg/giphy.gif');
      setTimeout(function(){ 
        window.location.replace(downloadFileUrl);
      }, 2000);
      
    } else {
      return false;
    };
  };

});
