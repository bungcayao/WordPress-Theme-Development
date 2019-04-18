<?php
	/**
	 * Module part for displaying Main Header
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
	$redirectUrl = get_field('redirectUrl');
	$eventAction = get_field('eventAction');
	$loadingTitle = get_field('loadingTitle');
	if (!$loadingTitle) { $loadingTitle = 'Redirecting...'; }
	$backgroundValue = get_field('backgroundValue');
	if (!$backgroundValue) { $backgroundValue = '#1dadb3;'; }
	// TODO (JOSH): Make ACF more flexible for analytics 
?>
<section data-module="redirect-url">
	<div class="pageloader is-active" style="background:<?php echo $backgroundValue ?>">
		<span class="title">
			<?php
				if(isset($_COOKIE['cookieconsent_status']) && $_COOKIE['cookieconsent_status']== "allow" ) {
					echo $loadingTitle;
				}
				else {
				 	echo 'Redirect/Download will start after consenting to our use of cookies.';
				}
			?>
		</span>
	</div>
</section>
<script>
	const redirectUrl = '<?php echo $redirectUrl; ?>' || false;
	const eventAction = '<?php echo $eventAction; ?>' || false;
</script>