<?php
	/**
	 * Module part for displaying video content
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
   *
	 * Responsive Video (16:9 Aspect Ratio)
	 * @link https://gist.github.com/jaicab/8799764
	 *
	 * @package popin
	 */

?>
<?php
	if (get_row('sectionVideo')) :
		$sectionVideo = get_row('sectionVideo');

		// Title Opions
		$title = get_sub_field('title');
		$fontFamily = $sectionVideo['fontFamily'];
		$fontColor = $sectionVideo['fontColor'];

		$video = get_sub_field('video');
		$bgImg = get_sub_field('bgImg');
		if (!$bgImg) {
		  $bgImg = popin_images_dir() . '/generic-placeholders/audience-chairs-crowd-274.jpg';
		}
		$bgColor = $sectionVideo['bgColor'];
		// if (($bgColor) == 'none') {
		// 	$bgColor = ' has-background-white';
		// }
?>

<!-- Video Section -->
<section data-module="section-video" class="section-video" style="background-image:url(<?php echo $bgImg ?>);">
	<div class="video-container is-overlay level has-text-centered is-flex-mobile">
    <div class="container modal-open">
			<h1 class="title <?php echo $fontFamily ?> <?php echo $fontColor ?>"><?php echo $title ?></h1>
      <i data-video-link="<?php echo $video ?>" class="play-button material-icons <?php echo $fontColor ?> is-hoverable">play_circle_filled</i>
      <p class="<?php echo $fontColor ?> is-size-7 has-text-weight-bold">PLAY VIDEO</p>
		</div>
		<!-- Modal -->
		<?php if($video) : ?>  
		<div class="modal video-section">
			<div class="modal-background"></div>
			<div class="modal-content">
				<div class="video-container is-16by9">
					<iframe class="video-section" width="640" height="360" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>
		<?php endif; ?>
  <!-- BG Overlay -->
  <div class="bg-overlay-container is-overlay <?php echo $bgColor ?>"></div>
</section>
<?php endif; ?>