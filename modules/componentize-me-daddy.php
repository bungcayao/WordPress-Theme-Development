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
<?php
	if (get_row('sectionHero')) :
		//init Section Hero
		$PopinLiveHomePage = get_row('PopinLiveHomePage');
		$UseMeDaddy = $PopinLiveHomePage['UseMeDaddy'] || false;

		if ($UseMeDaddy):
?>

<!-- NEW Hero Section-->
<section data-module="componentize-me-daddy" 
	class="section-hero has-bg-image has-background-white"
	style="background-image:url(/wp-content/themes/popin/dist/images/stock-images/leadership_hero_image.jpg)">
	<div class="video-container level has-text-centered is-flex-mobile">
		<div class="section container modal-open content" style="z-index:2;">

			<!-- Page Header Title -->
			<h1 class="title is-fontfamily-share has-text-white is-size-1">P.O.P.in for Knowledge</h1>

			<!-- Page Header Description -->
			<h3 class="is-size-4 has-text-weight-normal has-text-white">Knowledge-sourcing gives you prioritized insights, ideas, solutions and buy-in</h3>

			<!-- Video Call To Action -->
			<button data-video-link="//player.vimeo.com/video/281871144" class="button play-button is-outlined is-white is-medium" style="margin-top:3rem; margin-bottom:5rem;">
				<i class="material-icons" style="margin-right:10px;">play_circle_outline</i>
				Uncover Knowledge-Sourcing
			</button>

			<!-- Main Call To Action Box -->
			<div data-module="component-main-cta-box" class="has-background-white columns">
				<div class="column is-hidden-mobile">
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
								<a href="" class="button auto-tenant-signup auto-tenant-selector auto-tenant-get-started has-text-weight-semibold is-accent-teal-af" style="border-radius:4px;">Try It Free</a>
								<a class="button is-outlined is-accent-teal-af has-text-weight-semibold" href="//get.popinnow.com/request-a-demo">Request a Demo</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Video Modal -->
		<div class="modal video-section">
			<div class="modal-background"></div>
			<div class="modal-content">
				<div class="video-container is-16by9">
					<iframe class="video-section" width="640" height="360" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>
		<div class="bg-overlay-container is-overlay has-background-black" style="opacity:0.6"></div>

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

<?php
	$iconQuestion = '/wp-content/themes/popin/dist/images/popin-icon-set/icon_ask_question.svg';
	$iconConvos = '/wp-content/themes/popin/dist/images/popin-icon-set/icon_have_convos.svg';
	$iconAnswers = '/wp-content/themes/popin/dist/images/popin-icon-set/icon_get_answers.svg';
?>
<!-- Start Focused Convo's they said... -->
<section class="section">
	<div class="container content-container">
		<div class="has-text-centered has-text-mono-gray-6">
			<h2 class="title is-fontfamily-serif has-text-weight-normal has-text-mono-gray-5">Start Focused Conversations to Engage
				Employees</h2>
		</div>
		<div class="section columns">
			<div class="column has-text-centered content animated">
				<h6 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-blue-md">Ask a Question</h6>
				<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
					<img src="<?php echo $iconQuestion ?>" style="margin:20px; width:60px; height:60px;" />
				</figure>
				<p style="margin-left: .5rem; margin-right: .5rem;">Pose a question to your team to help uncover solutions to problems and ways to improve.</p>
			</div>
			<div class="column has-text-centered content animated">
				<h6 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-blue-md">Have a Conversation</h6>
					<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
					<img src="<?php echo $iconConvos ?>" style="margin:20px; width:60px; height:60px;" />
					</figure>
				<p style="margin-left: .5rem; margin-right: .5rem;">Your team responds anonymously to your question and interacts with each others answers through votes and comments.</p>
			</div>
			<div class="column has-text-centered content animated">
				<h6 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-blue-md">Get Answers</h6>
					<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
					<img src="<?php echo $iconAnswers ?>" style="margin:20px; width:60px; height:60px;" />
					</figure>
				<p style="margin-left: .5rem; margin-right: .5rem;">Easily get actionable, prioritized results with POPin’s customizable reports.</p>
			</div>
		</div>
	</div>
</section>
<!-- Sample Report and Template Links -->
<section data-module="section-wsiwyg-html" class="has-text-centered has-background-popin-blue-md view-sample-report" style="padding:.5rem;">
	<div class="has-text-centered">
		<a class="button is-white has-text-popin-blue-af view-sample-report has-text-weight-semibold" style="margin:10px;" data-sample-report-link="/wp-content/uploads/2018/10/sample-report-atm.marketing_site.png">View
			Sample Report</a>
		<!-- <a class="button is-text has-text-white has-text-weight-semibold is-hidden-mobile" style="margin: 10px;" href="https://app.popinnow.com/#/tenant/signup?useCase=custom&amp;source=marketing_critical_convo&amp;callToAction=view_more_templates"
		 target="_blank" rel="noopener">View More Templates</a> -->
	</div>
	<div class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head has-background-grey">
				<p class="modal-card-title is-capitalized has-text-white">Sample Report</p>
			</header>
			<section class="modal-card-body">
				<div class="content">
					<div class="logo-icon"><img class="attach-report" title="Sample Report" alt="Sample Report"></div>
					<p></p>
				</div>
			</section>
		</div>
		<button class="modal-close is-large" aria-label="close"></button>
	</div>
</section>
	
<!-- Case Study / Customer Support Feature -->
<section class="section is-paddingless has-bg-image" data-module="section-header"
	style="background-image:url(/wp-content/themes/popin/dist/images/stock-images/badB_hero_image@0,75x.jpg); position:relative; min-height:550px; overflow-x: hidden; overflow-y: auto;">
	<div class="section content columns level is-position-relative" style="padding-bottom:150px; padding-top:50px; margin-bottom: 0; z-index:2">
		<div class="column is-6"></div>
		<div class="column is-6 level-item" style="z-index:2;">
			<div class="has-background-accent-teal-af" stye="padding:0.5rem;">
				<h6 class="is-uppercase has-text-white is-marginless" style="padding:0.5rem;">Customer Stories</h6>
			</div>
			<figure class="image is-marginless"
				style="height: auto; width: 320px;">
				<img src="/wp-content/themes/popin/dist/images/logos-company/logo-sclhealth.png"
					style="margin-left:-124px;" title="SCL Health" alt="SCL Health">
			</figure>
			<p class="is-size-5 has-text-mono-gray-5 has-text-weight-light">SCL Projects $2 Million in ROI After Leveraging POPin for their Innovation Challenge</p>
			<div class="buttons">
				<a class="button is-accent-teal-af has-text-weight-semibold" href="//get.popinnow.com/SCL-Innovation-Programs">Read Case Study</a>
				<a class="button has-text-accent-teal-af has-text-weight-semibold" href="/customer-stories">View Customer Stories</a>
			</div>
		</div>
	</div>
	<div class="bg-overlay-container is-overlay has-background-mono-gray-1 is-hidden-touch-only is-hidden-desktop"></div>
</section>

<!-- Closing Statement -->
<section data-module="section-hero" class="section section-hero is-paddingless">
	<!-- Kriss Kross Overlay  -->
	<div data-module="component-kriss-kross" class="kriss-kross top-overlay" style="z-index:1; position:absolute; top:-150px; height: 150px; width: 100%;">
		<div class="left-to-bottom --top" style="background: linear-gradient(to left bottom, transparent 50%, #ede9e9 51%); position:absolute; bottom: 0; height: 100%; width: 100%;"></div>
		<div class="right-to-bottom --back" style="background: linear-gradient(to right bottom, transparent 50%, #1dadb3 51%); position:absolute; bottom: 0; height: 100%; width: 100%;"></div>
	</div>
	<div class="section container content-container has-text-centered content is-marginless-bottom" style="padding-bottom:150px;">
		<h2 class="has-text-white is-font-family-share">Convinced?</h2>
		<h4 class="is-fontfamily-serif has-text-weight-light is-size-5 has-text-white">
			Leaders want more than a survey score. They want to understand how to improve it. POPin quickly facilitates an
			honest conversation with any size team to deliver data driven guidance on how to improve. </h4>
		<a href="//get.popinnow.com/get_started" class="button is-white has-text-accent-teal-af is-uppercase has-text-weight-bold">Try It Free</a>
	</div>
	<div class="bg-overlay-container is-overlay has-background-accent-teal-af" style="opacity:1;"></div>
</section>
<?php
		else : 
			console_log($UseMeDaddy, '$UseMeDaddy');
		endif;
	endif;
?>