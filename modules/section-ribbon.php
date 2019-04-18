<?php
	/**
	 * Modular Section Ribbon
	 * - Ribbon section that can be used as a section cta for a new feature, page, update, etc.
	 * 
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */

	if ( get_row('sectionRibbon') ) :
		$sectionRibbon = get_row('sectionRibbon');
		$bgColor = $sectionRibbon['bgColor'];
		if($bgColor == 'has-background-white') {
			$bgColor = '';
			$bgColorValue = $sectionRibbon['bgColorValue'];
		} else {
			return $bgColor;
			$bgColorValue = 'inherit';
		}
		$ribbonThumb = $sectionRibbon['ribbonThumb'];
		$ribbonAnnouncement = $sectionRibbon['ribbonAnnouncement'];
		$ctaMain = $sectionRibbon['ctaMain'];
		if ($ctaMain) {
			$ctaMainText = $sectionRibbon['ctaMainText'];
			$ctaMainTextColor = $sectionRibbon['ctaMainTextColor'];
			$ctaMainButtonColor = $sectionRibbon['ctaMainButtonColor'];
			$ctaMainButtonOutline = $sectioinRibbon['ctaMainButtonOutline'];
			$ctaMainUrl = $sectionRibbon['ctaMainUrl'];
		} else {
			return false;
		}
		$ctaAlt = $sectionRibbon['ctaAlt'];
		if ($ctaAlt) {
			$ctaAltText = $sectionRibbon['ctaAltText'];
			$ctaAltTextColor = $sectionRibbon['ctaAltTextColor'];
			$ctaAltButtonColor = $sectionRibbon['ctaAltButtonColor'];
			$ctaAltButtonOutline = $sectioinRibbon['ctaAltButtonOutline'];
			$ctaAltUrl = $sectionRibbon['ctaAltUrl'];
		} else {
			return false;
		}
?>
<!-- Ribbon -->
<section data-module="section-ribbon"
         class="section section-ribbon <?php echo $bgColor ?> is-active"
				 style="background-color:<?php echo $bgColorValue ?>;">
				 
	<div class="columns is-flex is-position-relative">
		<div class="column is-hidden-mobile"></div>
		<div class="is-centered">
			<img src="<?php echo $ribbonThumb ?>" alt="<?php strip_tags($ribbonAnnouncement) ?>" width="50" height="50" class="is-pulled-left ribbon-thumb" />
			<span class="has-text-centered has-text-white is-pulled-left ribbon-announcement"><?php echo $ribbonAnnouncement ?></span>
			<?php if ($ctaAlt) : ?>
				<a href="<?php echo $ctaAltUrl ?>" target="_blank" title="<?php echo $ctaAltText ?>" class="section-ribbon button <?php echo $ctaAltTextColor.' '.$ctaAltButtonColor.' '.$ctaAltButtonColor ?> is-pulled-left"><?php echo $ctaAltText ?></a>
			<?php endif; if ($ctaMain) : ?>
				<a href="<?php echo $ctaMainUrl ?>" target="_blank" title="<?php echo $ctaMainText ?>" class="section-ribbon button <?php echo $ctaMainTextColor.' '.$ctaMainButtonColor.' '.$ctaMainButtonColor ?> is-pulled-left"><?php echo $ctaMainText ?></a>
			<?php endif; ?>
		</div>
		<div class="column is-hidden-mobile"></div>
		<button class="delete is-medium" aria-label="close"></button>

	</div>


</section>

<?php endif; ?>
