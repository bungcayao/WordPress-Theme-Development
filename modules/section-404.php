<?php
	/**
	 * Module part for displaying Hero Sections
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>

<!-- NEW Hero Section-->
<section data-module="componentize-me-daddy" 
	class="section-hero has-bg-image has-background-white"
	style="background-image:url(/wp-content/themes/popin/dist/images/generic-placeholders/lost.jpg)">
	<div class="video-container level has-text-centered is-flex-mobile" style="min-height:600px;">
		<div class="section container modal-open content" style="z-index:2;">

			<!-- Page Header Title -->
			<h1 class="title is-fontfamily-share has-text-white is-size-1">Ooopps! Your page has been lost...</h1>

			<!-- Page Header Description -->
			<h3 class="is-size-4 has-text-weight-normal has-text-white">... and here we are.</h3>

			<!-- Main CTA -->
			<a class="button is-danger has-text-weight-semibold event-code-join is-popin-blue-af" style="margin-bottom:3rem;" onclick="window.history.back();">Take Me Back</a>

			<!-- Main Call To Action Box -->
			<div data-module="component-main-cta-box" class="has-background-white columns is-hidden-mobile">
				<div class="column">
					<p><span class="has-text-weight-bold">RETURNING?</span> JOIN YOUR LIVE MEETING NOW!</p>
					<div class="columns event-code-join is-marginless-bottom">
					
						<div class="column field tag has-addons is-marginless">
							<div class="control is-hidden-mobile">
								<span class="button has-text-popin-blue-md is-static">POP#:</span>
							</div>
							<div class="control">
								<input class="input event-code-join is-marginless-bottom" type="email" placeholder="Enter event code" required="">
							</div>
							<p class="control">
									<a class="button is-success has-text-weight-semibold event-code-join is-popin-blue-af">JOIN</a>
							</p>
						</div>
					</div>
					<!-- <a class="is-size-7 is-underlined" href="#something">or find out more</a> -->
				</div>
				<div class="column auto-tenant-signup">
					<p><span class="has-text-weight-bold">NEW?</span> GET STARTED!</p>
					<div class="columns auto-tenant-signup is-marginless-bottom">
						<div class="column field tag has-addons is-marginless">
								<!-- <div class="control">
								<input class="input auto-tenant-signup" type="email" placeholder="Enter Your Work Email" required="">
							</div> -->
							<p class="control">
								<a href="//get.popinnow.com/get_started" class="button auto-tenant-signup auto-tenant-selector has-text-weight-semibold is-accent-teal-af" style="border-radius:4px;">SIGN UP FREE</a>
								<a class="button is-text has-text-weight-semibold is-underlined" href="//get.popinnow.com/what-is-popin">or request a demo</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- BG Overlay -->
		<div class="bg-overlay-container is-overlay has-background-black" style="opacity:0.8"></div>

		<!-- Kriss Kross Overlay  -->
		<div data-module="component-kriss-kross" class="kriss-kross top-overlay">
			<div class="kriss has-text-popin-blue-af right-to-bottom --back"
				style="background: linear-gradient(to right bottom, transparent 50%, currentColor 51%);"></div>
			<div class="kross has-text-popin-blue-md left-to-bottom --front"
				style="background: linear-gradient(to left bottom, transparent 50%, currentColor 51%);"></div>
		</div>

	</div>

</section>

<!-- Logo Wall -->
<section class="section has-background-popin-blue-md" data-module="section-basic">
	<h4 class="has-text-white has-text-centered is-size-5"
		style="margin-bottom:1rem;">WONDERFUL COMPANIES TRUST POPin</h4>
	<div class="columns level">
		<div class="column"></div>
		<div class="column is-2 is-centered">
			<figure class="image dont-at-me-bro"><img src="/wp-content/themes/popin/dist/images/logos-company/logo-experian-w.png"></figure>
		</div>
		<div class="column is-2 is-centered">
			<figure class="image dont-at-me-bro"><img src="/wp-content/themes/popin/dist/images/logos-company/logo-sharp-w.png"></figure>
		</div>
		<div class="column is-2 is-centered">
			<figure class="image dont-at-me-bro"><img src="/wp-content/themes/popin/dist/images/logos-company/logo-sclhealth-w.png"></figure>
		</div>
		<div class="column is-2 is-centered">
			<figure class="image dont-at-me-bro"><img src="/wp-content/themes/popin/dist/images/logos-company/logo-corelogic-w.png"></figure>
		</div>
		<div class="column"></div>
	</div>
</section>

<!-- The McDaddy Make You Jump Jump -->
<section data-module="component-kriss-kross" class="kriss-kross bottom" style="position:relative; height: 150px; width: 100%; background:#fff;">
	<div class="left-to-top has-text-popin-blue-af --back" style="background: linear-gradient(to left top, transparent 50%, currentColor 51%); position:absolute; bottom: 0; height: 100%; width: 100%;"></div>
	<div class="right-to-top has-text-popin-blue-md --front" style="background: linear-gradient(to right top, transparent 50%, currentColor 51%); position:absolute; bottom: 0; height: 100%; width: 100%;"></div>
</section>