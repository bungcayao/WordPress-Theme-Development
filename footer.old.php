<?php 

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package popin
 */


/** ///////////////// @popin version 6 ///////////////// */
if (is_page_template('pages/modules.php') ||
	is_page_template('pages/hybrid-resources.php') ||
	is_page_template('pages/hybrid-news.php') ||
	is_page_template('pages/hybrid-blog-technology.php') ||
	is_page_template('pages/hybrid-generic.php') ||
	is_page_template('pages/hybrid-blog.php') ||
	is_page_template('pages/custom-usecase.php') ||
	is_home('index.php') ||
	is_404('404.php') ||
	is_singular('post')) :
?>
	
	</div><!-- #content -->

  <footer data-module="footer" id="colophon" class="footer has-background-white is-paddingless-left-right">
		<!-- Social Media Icons -->
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
		<?php 
	$iconTwitter = get_template_directory() . '/dist/images/social-media-icon/twitter.svg';
	$iconFacebook = get_template_directory() . '/dist/images/social-media-icon/facebook.svg';
	$iconLinkedin = get_template_directory() . '/dist/images/social-media-icon/linkedin.svg';
	$iconInstagram = get_template_directory() . '/dist/images/social-media-icon/instagram.svg';
	$iconYoutube = get_template_directory() . '/dist/images/social-media-icon/youtube.svg';

	$linkTwitter = 'https://twitter.com/popin';
	$linkFacebook = 'https://www.facebook.com/POPin.Today/';
	$linkLinkedin = 'https://www.linkedin.com/company/popinnow';
	$linkInstagram = 'https://www.instagram.com/popin.now';
	$linkYoutube = 'https://www.youtube.com/channel/UCjZIKx2GlesA8n_aCRPdvnA';
	?>
    <div class="columns is-centered is-mobile social-media" style="margin-bottom:2.5rem;">
			<a href="<?php echo $linkTwitter ?>" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media" title="Twitter">
				<figure class="image is-icon is-32x32 is-pulled-left has-gap">
					<?php echo file_get_contents($iconTwitter) ?>
				</figure>
			</a>
			<a href="<?php echo $linkFacebook ?>" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media" title="FaceBook">
				<figure class="image is-icon is-32x32 is-pulled-left has-gap">
					<?php echo file_get_contents($iconFacebook) ?>
				</figure>
			</a>
			<a href="<?php echo $linkLinkedin ?>" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media" title="LinkedIn">
				<figure class="image is-icon is-32x32 is-pulled-left has-gap">
					<?php echo file_get_contents($iconLinkedin) ?>
				</figure>
			</a>
			<a href="<?php echo $linkInstagram ?>" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media" title="Instagram">
				<figure class="image is-icon is-32x32 is-pulled-left has-gap">
					<?php echo file_get_contents($iconInstagram) ?>
				</figure>
			</a>
			<a href="<?php echo $linkYoutube ?>" target="_blank" rel="noopener noreferrer" class="is-hoverable has-gap social-media" title="YouTube">
				<figure class="image is-icon is-32x32 is-pulled-left has-gap">
					<?php echo file_get_contents($iconYoutube) ?>
				</figure>
		  </a>
    </div>
    <!--
			Footer Styling and Structure is based off of `components/menu.sass`
				- https://bulma.io/documentation/components/menu/
		-->
    <div class="section sitemap container is-centered has-border-top">
      <div class="level is-vertical-top">
				
				<?php
			wp_nav_menu(array(
				'items_wrap' => '%3$s',
				'walker' => new popin_footer_navwalker(),
				'container' => false,
				'menu_class' => '',
				'theme_location' => 'primary-footer-left',
				'fallback_cb' => false
			));
			?>
				
				<?php
			wp_nav_menu(array(
				'items_wrap' => '%3$s',
				'walker' => new popin_footer_navwalker(),
				'container' => false,
				'menu_class' => '',
				'theme_location' => 'primary-footer-right',
				'fallback_cb' => false
			));
			?>
      </div>
    </div>
    <div class="section container content is-small has-text-centered has-text-mono-gray-5 has-border-top">
      <p>&copy; <?php _e('2013', 'popin'); ?>-<?php echo date('Y'); ?> <?php _e('POP, Inc. All rights reserved.', 'popin'); ?></p>
      <p>
				<a href="/security-policy/" class="has-text-mono-gray-5"><?php _e('Security Policy', 'popin'); ?></a> | 
				<a href="/terms-of-service/" class="has-text-mono-gray-5"><?php _e('Terms Of Service', 'popin'); ?></a> | 
				<a href="/privacy-policy/" class="has-text-mono-gray-5"><?php _e('Privacy Policy', 'popin'); ?></a> | 
				<a href="/gdpr/" class="has-text-mono-gray-5"><?php _e('GDPR', 'popin'); ?></a>
			</p>
    </div>
    <!-- Show Template Name, Only if logged in as an admin -->
		<?php if (current_user_can('manage_options')) : ?>
      <div class="columns is-centered" style="background-color:#eaeaea;">
        <div class="column is-one-third has-text-centered">
          <p class="copy white my-50">
            Template: <?php global $template; echo basename($template); ?>
          </p>
          <p>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
					printf(esc_html__('Theme: %1$s by %2$s.', 'popin'), 'popin', '<a href="https://github.com/POPInNow/POPin-WordPress-Theme" class="has-text-mono-gray-5">The POPin Dev Team</a>');
					?>
          </p>
        </div>
      </div>
		<?php endif; ?>

		</div>
		
  </footer><!-- #colophon -->

  </div><!-- #page -->
	
	<?php wp_footer(); ?>

	<!-- LinkedIn Tag -->
	<script type="text/javascript">_linkedin_data_partner_id = "436332";</script>
	<!-- Google Code for Home Page | Try Now Button Conversion Page -->
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 956689638;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "DoPbCJnN-HMQ5tmXyAM";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>

	<!-- Google Tag Manager helper -->
    <script>
      if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
      }
    </script>

	<!-- NoScripts -->
	<noscript>
		<!-- Alexa Certify -->
		<img height="1" width="1" style="display:none;" alt="" src="https://certify.alexametrics.com/atrk.gif?account=u1Ghr1SZw320l9" />
		<!-- LinkedIn Tag -->
		<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=377412&fmt=gif" />
		<!-- Google AdServices -->
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/956689638/?label=DoPbCJnN-HMQ5tmXyAM&amp;guid=ON&amp;script=0"/>
	</noscript>
	<!-- /NoScripts -->


  </body>
	</html>
	
	
<?php

/** ///////////////// REDIRECT PAGE ONLY ///////////////// */
elseif (is_page_template('pages/redirect.php')) :
?>

		</div><!-- #content -->
  </div><!-- #page -->
	<?php wp_footer(); ?>

	<!-- LinkedIn Tag -->
	<script type="text/javascript">_linkedin_data_partner_id = "436332";</script>
	<!-- Google Code for Home Page | Try Now Button Conversion Page -->
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 956689638;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "DoPbCJnN-HMQ5tmXyAM";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>

	<!-- Google Tag Manager helper -->
    <script>
      if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
      }
    </script>

	<!-- NoScripts -->
	<noscript>
		<!-- Alexa Certify -->
		<img height="1" width="1" style="display:none;" alt="" src="https://certify.alexametrics.com/atrk.gif?account=u1Ghr1SZw320l9" />
		<!-- LinkedIn Tag -->
		<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=377412&fmt=gif" />
		<!-- Google AdServices -->
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/956689638/?label=DoPbCJnN-HMQ5tmXyAM&amp;guid=ON&amp;script=0"/>
	</noscript>
	<!-- /NoScripts -->


  </body>
  </html>

<?php

/** ///////////////// @popin version 5 (LEGACY) ///////////////// */
else :
?>
		</main>
		<footer data-module="footer" id="footer" class="pt-0">

			<div class="flex flex-row flex-wrap flex-middle social-media pb-0 bg-white">
			  <ul class="flex flex-row">
			    <li class="flex flex-col flex-middle"><span>Follow Us:</span></li>
			    <li class="icon flex flex-col flex-middle"><a class="facebook" href="https://www.facebook.com/POPin.Today/"><!--facebook--></a></li>
			    <li class="icon flex flex-col flex-middle"><a class="linkedin" href="https://www.linkedin.com/company/popinnow"><!--LinkedIn--></a></li>
			    <li class="icon flex flex-col flex-middle"><a class="twitter" href="https://twitter.com/popin"><!--Twitter--></a></li>
			  </ul>
			</div><!-- /.container-max -->

			<div class="footer-hold pt-50">
            	<?php if (has_nav_menu('footer_nav'))
													wp_nav_menu(array(
													'container' => false,
													'theme_location' => 'footer_nav',
													'menu_class' => 'nav',
													'items_wrap' => '<ul class="%2$s">%3$s</ul>'
												)); ?>
			</div>
			<div class="footer-frame">
            	<?php if ($heading = get_field('heading', 'option')) : ?>
					<strong class="heading"><?php echo $heading; ?></strong>
                <?php endif; ?>
                <?php if (have_rows('contacts', 'option')) : ?>
                    <div class="contacts">
                    	<?php while (have_rows('contacts', 'option')) : the_row();
																				$layout = get_row_layout();
																				if ($layout == 'phone') {
																					if ($phone = get_sub_field('phone')) : ?>
                                    <span>
                                        <a href="tel:<?php echo clean_phone($phone); ?>"><i class="icon icon-<?php echo $layout; ?>"></i><?php echo $phone; ?></a>
                                    </span>
                                <?php endif; ?>
							<?php 
					} else {
						$title = get_sub_field('title');
						$email = get_sub_field('email');
						if ($title && $title) { ?>
                                    <span>
                                        <a href="<?php echo antispambot($email); ?>" target="_blank"><i class="icon icon-<?php echo $layout; ?>"></i><?php echo $title; ?> </a>
                                    </span>
                                <?php 
																														} ?>
							<?php 
					} ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
				<p class="copy white">&copy; <?php _e('2013', 'popin'); ?>-<?php echo date('Y'); ?> <?php _e('POPin. All rights reserved.', 'popin'); ?></p>
				<p class="copy white" style="margin-top:6px;"><a href="/terms-of-service"><?php _e('Terms Of Service', 'popin'); ?></a> | <a href="/privacy-policy"><?php _e('Privacy Policy', 'popin'); ?></a></p>
				<?php if ($logo = get_field('logo', 'option')) : ?>
                    <div class="app-block">
                    	<?php $logo_link = get_field('logo_link', 'option'); ?>
                        <?php if ($logo_link) echo '<a href="' . esc_url($logo_link) . '" class="logo-app-store">'; ?>
                        	<?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image($logo, 'thumbnail_172x51')); ?>
                        <?php if ($logo_link) echo '</a>'; ?>
                    </div>
                <?php endif; ?>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>

	<!-- LinkedIn Tag Script -->
	<script type="text/javascript">_linkedin_data_partner_id = "436332";</script>

<script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>

<!-- Google Code for Home Page | Try Now Button Conversion Page -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 956689638;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "DoPbCJnN-HMQ5tmXyAM";
	var google_remarketing_only = false;
	/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>

<!-- Google Tag Manager helper -->
<script>
  if (!Element.prototype.matches) {
    Element.prototype.matches =
        Element.prototype.matchesSelector ||
        Element.prototype.mozMatchesSelector ||
        Element.prototype.msMatchesSelector ||
        Element.prototype.oMatchesSelector ||
        Element.prototype.webkitMatchesSelector ||
        function(s) {
            var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                i = matches.length;
            while (--i >= 0 && matches.item(i) !== this) {}
            return i > -1;
        };
  }
</script>

<!-- NoScripts -->
<noscript>
	<!-- Alexa Certify -->
	<img height="1" width="1" style="display:none;" alt="" src="https://certify.alexametrics.com/atrk.gif?account=u1Ghr1SZw320l9" />
	<!-- LinkedIn Tag -->
	<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=377412&fmt=gif" />
	<!-- Google AdServices -->
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/956689638/?label=DoPbCJnN-HMQ5tmXyAM&amp;guid=ON&amp;script=0"/>
</noscript>
<!-- /NoScripts -->

</body>
</html>
<?php
endif;
?>