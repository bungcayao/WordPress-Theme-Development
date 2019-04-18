<?php
	/**
	 * Component: Auto Tenant Use Case Selector & Auto Tenant Request Demo Form
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */

	$formData = array(
		array('labels' => 'First Name*', 'name' => 'firstname', 'type' => 'text', 'placeholder' => '', 'value' => '', 'required' => 'required'),
		array('labels' => 'Last Name*', 'name' => 'lastname', 'type' => 'text', 'placeholder' => '', 'value' => '', 'required' => 'required'),
		array('labels' => 'Work E-Mail*', 'name' => 'email', 'type' => 'email', 'placeholder' => '', 'value' => '', 'required' => 'required'),
		array('labels' => 'Organization*', 'name' => 'company', 'type' => 'text', 'placeholder' => '', 'value' => '', 'required' => 'required'),
		array('labels' => 'Phone (Optional)', 'name' => 'phone', 'type' => 'text', 'placeholder' => '', 'value' => '', 'required' => ''),
		array('labels' => '', 'name' => 'lead_source', 'type' => 'hidden', 'placeholder' => '', 'value' => 'marketing_site_mobile', 'required' => '')
	);
	$length = count($formData);
	$submitCTA = 'Submit';
	$cancelCTA = 'Cancel';
	$formAction = 'https://go.pardot.com/l/142331/2019-01-10/5y66y9';
	$formValidate = 'novalidate';
?>


<!-- Page Overlay: Auto Tenant Selector -->
<section data-module="component-auto-tenant"
	class="section auto-tenant-selector is-overlay has-background-popin-blue-af content is-marginless-bottom">
	<figure class="is-paddingless is-marginless">
			<img src="/wp-content/themes/popin/dist/images/global-header/logo-white.svg" style="margin:20px auto; width:auto; height:30px;">
		</figure>
	<h2 class="has-text-white has-text-centered has-text-weight-light is-size-2 is-marginless-top"
		style="margin-bottom:4rem;">
		<span class="is-hidden-mobile">Where do you want to start?</span>
		<span class="is-hidden-desktop">Request more info</span>
	</h2>
	<div class="auto-tenant-demo section has-background-white box is-hidden-desktop">
		<form id="autotenantDemoForm" name="autotenantDemoForm" action="<?php echo $formAction ?>" method="post" class="section" style="width:100%;" <?php echo $formValidate ?>>	
			<?php for ($i = 0; $i < $length; $i++) : ?>
				<div class="field">
					<label class="label"><?php echo $formData[$i][labels] ?></label>
					<div class="control">
						<input name="<?php echo $formData[$i][name] ?>" class="input pop-validation" type="<?php echo $formData[$i][type] ?>" placeholder="<?php echo $formData[$i][placeholder] ?>" value="<?php echo $formData[$i][value] ?>" <?php echo $formData[$i][required] ?>>
						<p class="help is-success"><?php echo $formData[$i][labels] ?> is valid</p>
						<p class="help is-danger"><?php echo $formData[$i][labels] ?> is invalid</p>
					</div>
				</div>
			<?php endfor; ?>
			<div class="field is-grouped section is-paddingless">
				<div class="control">
					<button class="button is-link auto-tenant-demo submit-form"><?php echo $submitCTA ?></button>
				</div>
				<div class="control">
					<button class="button is-text auto-tenant-demo cancel-form"><?php echo $cancelCTA ?></button>
				</div>
			</div>      
		</form>
	</div>
	<div class="columns auto-tenant-selector is-hidden-touch">
		<div class="column is-flex">
					<div class="has-text-centered content box is-flex"
							style="flex-direction: column">
					<h4 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-blue-af">Polling</h4>
					<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
						<img src="/wp-content/themes/popin/dist/images/popin-icon-set/icon_polling.svg" style="margin:20px auto; width:auto; height:60px;">
					</figure>
					<p style="margin-left: .5rem; margin-right: .5rem;">Launch a quick multiple choice, rating or scale (1-5) poll to get a quick consensus.</p>
					<a href="//stg.popinnow.com/#/account/create/?useCase=polling" class="button auto-tenant-selector-link has-text-weight-semibold is-popin-blue-af"
						style="margin-top:auto;">Launch Now</a>
				</div>
			</div>
			<div class="column is-flex">
						<div class="has-text-centered content box is-flex"
							style="flex-direction: column">
						<h4 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-blue-md">Survey</h4>
						<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
							<img src="/wp-content/themes/popin/dist/images/popin-icon-set/icon_survey.svg" style="margin:20px auto; width:auto; height:60px;">
						</figure>
						<p style="margin-left: .5rem; margin-right: .5rem;">Use POPin to ask multi-question surveys with robust reporting to drive employee engagement.</p>
						<a href="//stg.popinnow.com/#/account/create/?useCase=survey" class="button auto-tenant-selector-link has-text-weight-semibold is-popin-blue-md"
							style="margin-top:auto;">Launch Now</a>
					</div>
				</div>
				<div class="column is-flex">
						<div class="has-text-centered content box is-flex"
							style="flex-direction: column">
							<h4 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-yellow-af">Crowdsource</h4>
							<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
								<img src="/wp-content/themes/popin/dist/images/popin-icon-set/icon_crowdsourcing.svg" style="margin:20px auto; width:auto; height:60px;">
							</figure>
							<p style="margin-left: .5rem; margin-right: .5rem;">Have an honest conversation by allowing your participants to see, comment and vote on each other's answers to your question.</p>
							<a href="//stg.popinnow.com/#/account/create/?useCase=crowdsource" class="button auto-tenant-selector-link has-text-weight-semibold is-popin-yellow-af"
								style="margin-top:auto;">Launch Now</a>
						</div>
					</div>
					<div class="column is-flex">
						<div class="has-text-centered content box is-flex"
							style="flex-direction: column">
								<h4 class="is-fontfamily-serif has-text-weight-bold is-uppercase has-text-popin-orange-af">Live Event</h4>
								<figure style="border-radius: 50%; height: 100px; width: 100px; margin: 0 auto 0.5rem auto;" class="">
									<img src="/wp-content/themes/popin/dist/images/popin-icon-set/icon_live_event.svg" style="margin:20px auto; width:auto; height:60px;">
								</figure>
								<p style="margin-left: .5rem; margin-right: .5rem;">Engage your audience by presenting their ideas during your live meeting or event.</p>
								<a href="//stg.popinnow.com/#/account/create/?useCase=live_event" class="button auto-tenant-selector-link has-text-weight-semibold is-popin-orange-af"
									style="margin-top:auto;">Launch Now</a>
							</div>
						</div>
	</div>
	<div class="has-text-centered">
	<p class="has-text-white">Invited to join someone's POPin? Click the join link that was sent to you. <a href="https://support.popinnow.com/" title="Need Help? Contact Support" class="is-underlined has-text-white has-text-weight-bold" data-misc="Need Help CTA on AT-Selector Overlay">Need Help?</a></p>
	</div>
	<button class="modal-close is-large auto-tenant-selector" aria-label="close"></button>
</section>