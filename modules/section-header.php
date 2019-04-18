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
?>
<?php
	if (get_row('sectionHeader')) :
		$sectionHeader = get_row('sectionHeader');
		$anchorTag = $sectionHeader['anchorTag'];
		$headerOption = $sectionHeader['headerOption'];	
		// Font Options
		$fontFamily = $sectionHeader['fontFamily'];
		$fontColor = $sectionHeader['fontColor'];
		// Title Options
		$title = $sectionHeader['title'];
  	$subtitle = $sectionHeader['subtitle'];
		//Button/CTA Options
		$ctaOption = $sectionHeader['ctaOption'];
		$cta = $sectionHeader['cta'];
		if (!$cta) {
			$cta = 'Call To Action Here';
		}
		$ctaLink = $sectionHeader['ctaLink'];
		if (!$ctaLink) {
			$ctaLink = '#cta-link-goes-here';
		}
		// Background Options
		$bgOption = $sectionHeader['bgOption'];
		$bgColor = $sectionHeader['bgColor'];
		$bgImg = $sectionHeader['bgImg'];
		$bgImgUrl = null;
		if( !$bgImg ) {
  		$bgImgUrl = 'none';
	  } else  {
			$bgImgUrl = 'url(' . $bgImg . ')';
    }
?>

<!-- Header -->
<section id="<?php echo $anchorTag ?>"
	data-module="section-header"
	class="section section-header-<?php echo $headerOption ?>"
	style="background-image:<?php echo $bgImgUrl ?>;">
  <div class="<?php if ($headerOption !== 'sub') { echo 'section'; } ?> container content-container has-text-centered content">
	<?php if ($headerOption !== 'sub') : ?>
    <h1 class="<?php echo $fontFamily ?> <?php echo $fontColor ?>"><?php echo $title ?></h1>
	<?php else : ?>
		<h2 class="<?php echo $fontFamily ?> <?php echo $fontColor ?>"><?php echo $title ?></h2>
	<?php endif ?>
		<h4 class="subtitle <?php echo $fontColor ?> has-text-weight-light"><?php echo $subtitle ?></h4>
	  <?php if( $ctaOption ) : ?>
    <a href="<?php echo $ctaLink ?>" class="button is-popin"><?php echo $cta ?></a>
	  <?php endif; ?>
  </div>
  <!-- BG Overlay -->
  <div class="bg-overlay-container is-overlay <?php echo $bgColor ?>"></div>
</section>
<?php
	endif;
?>