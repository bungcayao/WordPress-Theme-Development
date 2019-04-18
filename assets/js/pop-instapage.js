var SiteDeps = `
<link rel="stylesheet" id="style-css" href="https://www.popinnow.com/wp-content/themes/popin/dist/style.instapage.css" type="text/css" media="all">
<style>
    .navbar > .container {
        padding-right: 0;
    }
    .navbar-brand {
        /* padding-left:0;
        padding-right:0; */
        /* width: 100%; */
    }
    .navbar-item:first-child {
        padding:0;
    }
    .navbar { margin-bottom:0px; }
    input[type=email],
    input[type=text] {
    background: unset;
    font-size: 1em;
    font-family: inherit;
    height: inherit;
    line-height: 1.5;
    padding: calc(.375em - 1px) calc(.625em - 1px);
        margin-bottom: 0;
    }
</style>
<script data-cfasync="false" type="text/javascript" defer="defer" src="https://www.popinnow.com/wp-content/themes/popin/dist/header.instapage.js"><\/script>
<script data-cfasync="false" type="text/javascript" defer="defer" src="https://www.popinnow.com/wp-content/themes/popin/dist/bundle.instapage.js"><\/script>
`;

var SiteHeader = `
<header>
  <nav data-module="navbar" class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-brand"> <a class="navbar-item" href="https://www.popinnow.com/" rel="home" title="Bringing people and ideas into focus to make your initiatives succeed">
          <img class="is-hidden-mobile" src="https://www.popinnow.com/wp-content/themes/popin/dist/images/global-header/logo.svg"
            width="134" height="28" alt="POPin"> <img class="is-hidden-tablet" src="https://www.popinnow.com/wp-content/themes/popin/dist/images/global-header/logo-icon-only.svg"
            width="40" height="28" alt="POPin"> </a>
        <div class="navbar-item is-hidden-desktop">
          <div class="field tag has-addons">
            <div class="control is-hidden-mobile"> <span class="button has-text-popin-blue-md is-static">POP#:</span></div>
            <div class="control"> <input class="input event-code-join" type="email" placeholder="Enter POPin Code"
                required=""></div>
            <p class="control"> <a class="button is-success has-text-weight-semibold event-code-join is-popin-blue-md">JOIN</a></p>
          </div>
        </div>
        <div class="navbar-burger" data-target="navMenu"> <span></span> <span></span> <span></span></div>
      </div>
      <div id="navMenu" class="navbar-menu navbar-start">
        <li id="menu-item-27921" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children navbar-item menu-item-27921 has-dropdown is-hoverable"><a
            class="navbar-link" href="/platform/" data-toggle="dropdown" aria-haspopup="true">How It Works</a>
          <ul class="navbar-dropdown">
            <li id="menu-item-27922" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27922"><a
                class="navbar-link" href="/platform/" data-ga-location="Main Navbar">Platform</a></li>
            <li id="menu-item-27923" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27923"><a
                class="navbar-link" href="/integrations/" data-ga-location="Main Navbar">Integrations</a></li>
          </ul>
        </li>
        <li id="menu-item-27924" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children navbar-item menu-item-27924 has-dropdown is-hoverable"><a
            class="navbar-link" href="/solutions/" data-toggle="dropdown" aria-haspopup="true">Solutions</a>
          <ul class="navbar-dropdown">
            <li id="menu-item-27878" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27878"><a
                class="navbar-link" href="/usecases/popin-live/" data-ga-location="Main Navbar">POPin Live</a></li>
            <li id="menu-item-27879" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27879"><a
                class="navbar-link" href="/usecases/popin-crowdsourcing/" data-ga-location="Main Navbar">Knowledge
                Sourcing</a></li>
            <li id="menu-item-27880" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27880"><a
                class="navbar-link" href="/usecases/popin-polling/" data-ga-location="Main Navbar">Polling</a></li>
            <li id="menu-item-27881" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27881"><a
                class="navbar-link" href="/usecases/popin-surveys/" data-ga-location="Main Navbar">Surveys</a></li>
          </ul>
        </li>
        <li id="menu-item-27925" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children navbar-item menu-item-27925 has-dropdown is-hoverable"><a
            class="navbar-link" href="//support.popinnow.com" data-toggle="dropdown" aria-haspopup="true" target="_blank">Resources</a>
          <ul class="navbar-dropdown">
            <li id="menu-item-27883" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27883"><a
                class="navbar-link" href="/customer-stories/" data-ga-location="Main Navbar">Customer Stories</a></li>
            <li id="menu-item-27927" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27927"><a
                class="navbar-link" href="/webinars/" data-ga-location="Main Navbar">Webinars</a></li>
            <li id="menu-item-27928" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27928"><a
                class="navbar-link" href="/videos/" data-ga-location="Main Navbar">Videos</a></li>
            <li id="menu-item-27929" class="menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27929"><a
                class="navbar-link" href="//support.popinnow.com" data-ga-location="Main Navbar" target="_blank">Support</a></li>
          </ul>
        </li>
        <li id="menu-item-27885" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children navbar-item menu-item-27885 has-dropdown is-hoverable"><a
            class="navbar-link" href="/our-mission/" data-toggle="dropdown" aria-haspopup="true">About</a>
          <ul class="navbar-dropdown">
            <li id="menu-item-27886" class="menu-item menu-item-type-post_type menu-item-object-page navbar-item menu-item-27886"><a
                class="navbar-link" href="https://www.popinnow.com/our-mission/" data-ga-location="Main Navbar">Mission</a></li>
            <li id="menu-item-27887" class="menu-item menu-item-type-post_type menu-item-object-page navbar-item menu-item-27887"><a
                class="navbar-link" href="https://www.popinnow.com/founders/" data-ga-location="Main Navbar">Team</a></li>
            <li id="menu-item-27889" class="menu-item menu-item-type-post_type menu-item-object-page navbar-item menu-item-27889"><a
                class="navbar-link" href="https://www.popinnow.com/news-and-press/" data-ga-location="Main Navbar">News
                &amp; Press</a></li>
          </ul>
        </li>
        <li id="menu-item-27891" class="is-margin-left-auto menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27891"><a
            class="navbar-link" href="//app.popinnow.com/#/signin" data-ga-location="Main Navbar" target="_blank">Log
            In</a></li>
        <li id="menu-item-27892" class="button is-hoverable is-white has-text-primary has-text-weight-bold menu-item menu-item-type-custom menu-item-object-custom navbar-item menu-item-27892"><a
            class="navbar-link" href="//app.popinnow.com/#/tenant/setup/?useCase=custom&amp;callToAction=Try_It_Free&amp;source=https://www.popinnow.com/"
            data-ga-location="Main Navbar" target="_blank">Try It Free</a></li>
      </div>
    </div>
  </nav>
</header>
`;

var SiteFooter = `
<footer data-module="footer" id="colophon" class="footer has-background-white is-paddingless-left-right">
<style>
    figure.is-icon {
        background: transparent;
    }
    figure.is-icon svg {
        width: 32px;
        height: 32px;
        fill: #fff;
    }
</style>
<div class="columns is-centered is-mobile social-media" style="margin-bottom:2.5rem;"> <a href="https://twitter.com/popin"
    target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media" title="Twitter">
    <figure class="image is-icon is-32x32 is-pulled-left has-gap"> <svg version="1.1" id="Twitter" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128"
        xml:space="preserve">
        <g>
          <circle id="twitter-back" fill="#262626" cx="64" cy="64" r="64"></circle>
          <path id="twitter-twitter" fill="#FFFFFF" d="M99.8398,41.7695c-2.6367,1.17-5.4707,1.96-8.4462,2.3155
  c3.0351-1.8204,5.3681-4.7022,6.4658-8.1363c-2.8408,1.6851-5.9883,2.9097-9.3379,3.5689
  c-2.6826-2.8584-6.5049-4.6436-10.7344-4.6436c-8.123,0-14.7065,6.584-14.7065,14.7051c0,1.1533,0.1303,2.2754,0.3808,3.3516
  c-12.2221-0.6133-23.0581-6.4678-30.311-15.3648c-1.2661,2.1714-1.9912,4.6978-1.9912,7.3931c0,5.1015,2.5962,9.6025,6.542,12.2397
  c-2.4107-0.0757-4.6783-0.7378-6.6607-1.8393c-0.0014,0.0615-0.0014,0.123-0.0014,0.1855c0,7.125,5.0693,13.0684,11.7968,14.4199
  c-1.2343,0.336-2.5337,0.5157-3.8745,0.5157c-0.9477,0-1.8691-0.0928-2.7671-0.2637c1.8716,5.8418,7.3023,10.0937,13.7378,10.2119
  c-5.0332,3.9453-11.374,6.2959-18.2646,6.2959c-1.187,0-2.357-0.0693-3.5073-0.2051c6.5083,4.1729,14.2377,6.6065,22.5429,6.6065
  c27.0498,0,41.8418-22.4082,41.8418-41.8418c0-0.6377-0.0146-1.2715-0.0429-1.9024C95.375,47.3086,97.8691,44.7188,99.8398,41.7695
  z"></path>
        </g>
      </svg></figure>
  </a> <a href="https://www.facebook.com/POPin.Today/" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media"
    title="FaceBook">
    <figure class="image is-icon is-32x32 is-pulled-left has-gap"> <svg version="1.1" id="Facebook" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128"
        xml:space="preserve">
        <g>
          <circle id="facebook-back" fill="#262626" cx="64" cy="64" r="64"></circle>
          <path id="facebook-facebook" fill="#FFFFFF" d="M95.1367,29H32.8638C30.7295,29,29,30.729,29,32.8638v62.2729
  C29,97.2705,30.7295,99,32.8638,99h33.5249V71.8926h-9.1221v-10.565h9.1221v-7.7905c0-9.0415,5.5224-13.9648,13.5888-13.9648
  c3.8623,0,7.1827,0.2876,8.1504,0.4165v9.4487l-5.5927,0.0024c-4.3877,0-5.2364,2.0845-5.2364,5.1431v6.7446h10.461l-1.3623,10.565
  h-9.0987V99h17.8379C97.2705,99,99,97.2705,99,95.1367V32.8638C99,30.729,97.2705,29,95.1367,29z"></path>
        </g>
      </svg></figure>
  </a> <a href="https://www.linkedin.com/company/popinnow" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media"
    title="LinkedIn">
    <figure class="image is-icon is-32x32 is-pulled-left has-gap"> <svg version="1.1" id="Linkedin" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128"
        xml:space="preserve">
        <g>
          <circle id="linkedin-back" fill="#262626" cx="64" cy="64" r="64"></circle>
          <g id="linkedin-linkedin">
            <path fill="#FFFFFF" d="M29.0752,51.7471h14.8686V99.54H29.0752V51.7471z M36.5137,27.9893c4.7514,0,8.6084,3.8593,8.6084,8.6137
  c0,4.7554-3.857,8.6143-8.6084,8.6143c-4.7705,0-8.6172-3.8589-8.6172-8.6143C27.8965,31.8486,31.7432,27.9893,36.5137,27.9893"></path>
            <path fill="#FFFFFF" d="M53.2622,51.7471H67.5v6.5337h0.2041c1.9805-3.7574,6.8272-7.7198,14.0537-7.7198
  c15.0391,0,17.8184,9.896,17.8184,22.7671V99.54H84.7246V76.2979c0-5.542-0.0957-12.6719-7.7187-12.6719
  c-7.7286,0-8.9082,6.04-8.9082,12.2754V99.54H53.2622V51.7471z"></path>
          </g>
        </g>
      </svg></figure>
  </a> <a href="https://www.instagram.com/popin.now" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media"
    title="Instagram">
    <figure class="image is-icon is-32x32 is-pulled-left has-gap"> <svg version="1.1" id="Instagram" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128"
        xml:space="preserve">
        <g>
          <circle id="instagram-back" fill="#262626" cx="64" cy="64" r="64"></circle>
          <path id="instagram-instagram" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M91.5713,58.4829h-6.2402
  c0.4541,1.7651,0.7236,3.6089,0.7236,5.5156c0,12.1831-9.875,22.0562-22.0552,22.0562c-12.1797,0-22.0542-9.8731-22.0542-22.0562
  c0-1.9067,0.2695-3.7505,0.7246-5.5156h-6.2407v30.3286c0,1.5205,1.2349,2.7549,2.7598,2.7549h49.6215
  c1.5254,0,2.7608-1.2344,2.7608-2.7549V58.4829z M91.5713,39.186c0-1.5219-1.2354-2.7568-2.7608-2.7568H80.542
  c-1.5225,0-2.7568,1.2349-2.7568,2.7568v8.272c0,1.522,1.2343,2.7568,2.7568,2.7568h8.2685c1.5254,0,2.7608-1.2348,2.7608-2.7568
  V39.186z M63.9995,50.2148c-7.6133,0-13.7847,6.1705-13.7847,13.7837c0,7.6128,6.1714,13.7867,13.7847,13.7867
  c7.6138,0,13.7857-6.1739,13.7857-13.7867C77.7852,56.3853,71.6133,50.2148,63.9995,50.2148 M91.5713,99.8398H36.4292
  c-4.5664,0-8.269-3.7041-8.269-8.2734V36.4292c0-4.5669,3.7026-8.269,8.269-8.269h55.1421c4.5674,0,8.2685,3.7021,8.2685,8.269
  v55.1372C99.8398,96.1357,96.1387,99.8398,91.5713,99.8398"></path>
        </g>
      </svg></figure>
  </a> <a href="https://www.youtube.com/channel/UCjZIKx2GlesA8n_aCRPdvnA" target="_blank" rel="noopener noreferrer"
    class="is-hoverable has-gap social-media" title="YouTube">
    <figure class="image is-icon is-32x32 is-pulled-left has-gap"> <svg version="1.1" id="YouTube" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128 128" enable-background="new 0 0 128 128"
        xml:space="preserve">
        <g>
          <circle id="youtube-back" fill="#262626" cx="64" cy="64" r="64"></circle>
          <path id="youtube-youtube" fill="#FFFFFF" d="M99.8398,78.3359c0,5.6309-4.6084,10.2403-10.2402,10.2403H38.3994
  c-5.6318,0-10.2392-4.6094-10.2392-10.2403V49.6641c0-5.6328,4.6074-10.2403,10.2392-10.2403h51.2002
  c5.6318,0,10.2402,4.6075,10.2402,10.2403V78.3359z M56.5967,72.793l19.3681-10.0352L56.5967,52.6523V72.793z"></path>
        </g>
      </svg></figure>
  </a></div>
<div class="section sitemap container is-centered has-border-top">
  <div class="level is-vertical-top">
    <li id="menu-item-27893" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children level-item sitemap-list has-dropdown is-hoverable"><a
        class="sitemap-link" href="/platform/" data-toggle="dropdown" aria-haspopup="true">How It Works</a>
      <ul class="sitemap-dropdown">
        <li id="menu-item-27931" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/platform/">Platform</a></li>
        <li id="menu-item-27932" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/integrations/">Integrations</a></li>
      </ul>
    </li>
    <li id="menu-item-27933" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children level-item sitemap-list has-dropdown is-hoverable"><a
        class="sitemap-link" href="/solutions/" data-toggle="dropdown" aria-haspopup="true">Solutions</a>
      <ul class="sitemap-dropdown">
        <li id="menu-item-27901" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/usecases/popin-live/">POPin Live</a></li>
        <li id="menu-item-27902" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/usecases/popin-crowdsourcing/">Knowledge Sourcing</a></li>
        <li id="menu-item-27903" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/usecases/popin-polling/">Polling</a></li>
        <li id="menu-item-27904" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/usecases/popin-surveys/">Surveys</a></li>
      </ul>
    </li>
    <li id="menu-item-27905" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children level-item sitemap-list has-dropdown is-hoverable"><a
        class="sitemap-link" href="//support.popinnow.com" data-toggle="dropdown" aria-haspopup="true" target="_blank">Resources</a>
      <ul class="sitemap-dropdown">
        <li id="menu-item-27906" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/customer-stories/">Customer Stories</a></li>
        <li id="menu-item-27934" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/webinars/">Webinars</a></li>
        <li id="menu-item-27935" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="/videos/">Videos</a></li>
        <li id="menu-item-27936" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="//support.popinnow.com" target="_blank">Support</a></li>
      </ul>
    </li>
    <li id="menu-item-27908" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children level-item sitemap-list has-dropdown is-hoverable"><a
        class="sitemap-link" href="/our-mission/" data-toggle="dropdown" aria-haspopup="true">About</a>
      <ul class="sitemap-dropdown">
        <li id="menu-item-27909" class="menu-item menu-item-type-post_type menu-item-object-page level-item sitemap-list"><a
            class="sitemap-link" href="https://www.popinnow.com/our-mission/">Mission</a></li>
        <li id="menu-item-27910" class="menu-item menu-item-type-post_type menu-item-object-page level-item sitemap-list"><a
            class="sitemap-link" href="https://www.popinnow.com/founders/">Team</a></li>
        <li id="menu-item-27912" class="menu-item menu-item-type-post_type menu-item-object-page level-item sitemap-list"><a
            class="sitemap-link" href="https://www.popinnow.com/news-and-press/">News &amp; Press</a></li>
        <li id="menu-item-27913" class="menu-item menu-item-type-post_type menu-item-object-page level-item sitemap-list"><a
            class="sitemap-link" href="https://www.popinnow.com/blog/">POPin Blog</a></li>
      </ul>
    </li>
    <li id="menu-item-27914" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children level-item sitemap-list has-dropdown is-hoverable"><a
        class="sitemap-link" data-toggle="dropdown" aria-haspopup="true">Contact Us</a>
      <ul class="sitemap-dropdown">
        <li id="menu-item-27915" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="mailto:info@popinnow.com">Sales</a></li>
        <li id="menu-item-27916" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="mailto:support@popinnow.com">Help &amp; Support</a></li>
        <li id="menu-item-27917" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="tel:9497486905">Call Us – 949-748-6905</a></li>
        <li id="menu-item-27918" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="//app.popinnow.com/#/signin" target="_blank">Log In</a></li>
        <li id="menu-item-27919" class="menu-item menu-item-type-custom menu-item-object-custom level-item sitemap-list"><a
            class="sitemap-link" href="//app.popinnow.com/#/tenant/setup/?useCase=custom&amp;callToAction=Try_It_Free&amp;source=https://www.popinnow.com/"
            target="_blank">Try It Free</a></li>
      </ul>
    </li>
  </div>
</div>
<div class="section container content is-small has-text-centered has-text-mono-gray-5 has-border-top">
  <p>© 2013-2019 POP, Inc. All rights reserved.</p>
  <p> <a href="/security-policy/" class="has-text-mono-gray-5">Security Policy</a> | <a href="/terms-of-service/" class="has-text-mono-gray-5">Terms
      Of Service</a> | <a href="/privacy-policy/" class="has-text-mono-gray-5">Privacy Policy</a> | <a href="/gdpr/"
      class="has-text-mono-gray-5">GDPR</a></p>
</div>
</footer>
`;

$(document).ready(function(){
  $('head').append($.trim(SiteDeps));
  $('body').prepend($.trim(SiteHeader));
  $('body').append($.trim(SiteFooter));
});