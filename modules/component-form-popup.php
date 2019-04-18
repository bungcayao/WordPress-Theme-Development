<?php
	/**
	 * Component: Form Pop Up
	 */
	$modalTitle = 'Gain Access to Stories';
	$formData = array(
		array('labels' => 'First Name', 'name' => 'firstname', 'type' => 'text', 'required' => 'required'),
		array('labels' => 'Last Name', 'name' => 'lastname', 'type' => 'text', 'required' => 'required'),
		array('labels' => 'E-Mail', 'name' => 'email', 'type' => 'email', 'required' => 'required'),
		array('labels' => 'Company', 'name' => 'company', 'type' => 'text', 'required' => 'required'),
		array('labels' => 'Phone (Optional)', 'name' => 'phone', 'type' => 'text', 'required' => '')
	);
	$length = count($formData);
	$submitCTA = 'Submit';
	$cancelCTA = 'Cancel';
	$formAction = 'https://go.pardot.com/l/142331/2018-09-18/5j14mv';
	$formValidate = 'novalidate';

	if ($WP_ENV !== 'production') {
		console_log($formData, '$formData');
	}
?>
<!-- modal -->
<div data-module="component-form-popup" class="modal component-form-popup">
	<form id="" class="customer-stories" action="<?php echo $formAction ?>" <?php echo $formValidate ?>>	
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<?php echo $modalTitle ?>                
			</header>

			<section class="modal-card-body">

				<?php 
					for ($i = 0; $i < $length; $i++) : 
				?>
					<div class="field">
						<label class="label"><?php echo $formData[$i][labels] ?></label>
						<div class="control">
							<input name="<?php echo $formData[$i][name] ?>" class="input pop-validation" type="<?php echo $formData[$i][type] ?>" placeholder="" <?php echo $formData[$i][required] ?>>
							<p class="help is-success"><?php echo $formData[$i][labels]  ?> is valid</p>
							<p class="help is-danger"><?php echo $formData[$i][labels] ?> is invalid</p>
						</div>
					</div>
				<?php endfor; ?>	

			</section>
			<footer class="modal-card-foot">
				<div class="field is-grouped">
					<div class="control">
						<button class="button is-link submit-form set-cookie" type="submit"><?php echo $submitCTA ?></button>
					</div>
					<div class="control">
						<button class="button is-text cancel-form"><?php echo $cancelCTA ?></button>
					</div>
				</div>           
			</footer>
		</div>
		<button class="modal-close" aria-label="close"></button>
	</form>
</div>
<!-- Notification Message -->
<div class="notification is-popin-blue">
  <button class="delete"></button>
	<span class="has-text-weight-bold">Access Granted</span><br>
	<span class="has-text-weight-light">You can now read Customer Stories.</span>
</div>