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
?>
	
		</div><!-- #content -->

		<?php if (!is_page_template('pages/redirect.php')) : ?>
			
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
						<?php endif; ?>
		
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