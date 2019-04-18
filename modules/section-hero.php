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
		$sectionHero = get_row('sectionHero');
		$bgColor = $sectionHero['bgColor'];
		$bgImg = $sectionHero['bgImg'];
		$bgImgUrl = null;
		if( !$bgImg ) {
			$bgImgUrl = 'background-image:none;';
			// $bgProperties = '';
	  } else  {
			$bgImgUrl = 'background-image:url('.$bgImg.');';
			$bgImgRepeat = 'no-repeat';
			$bgImgPosition = $sectionHero['bgImgPosition'];
			$bgImgSize = $sectionHero['bgImgSize'];
			$bgImgAttachment = $sectionHero['bgImgAttachment'];
			$bgImgRepeat = 'no-repeat';
			$bgProperties = ' background-repeat:'.$bgImgRepeat.'; background-position:'.$bgImgPosition.'; background-size:'.$bgImgSize.'; background-attachment:'.$bgImgAttachment.';'; 
		}
?>

<!-- Header -->
<section data-module="section-hero"
         class="section section-hero"
         style="<?php echo $bgImgUrl ?><?php echo $bgProperties ?>">
  <div class="section container content-container has-text-centered content">
		<?php
			// Section Hero > Title
			$heroTitle = $sectionHero['heroTitle'];
			$titleFontFamily = $sectionHero['titleFontFamily'];
			$titleFontWeight = $sectionHero['titleFontWeight'];
			$titleFontSize = $sectionHero['titleFontSize'];
			$titleFontColor = $sectionHero['titleFontColor'];
		?>
		<?php if ($heroTitle) : ?>
		<h1 class="<?php echo $titleFontFamily.' '.$titleFontWeight.' '.$titleFontSize.' '.$titleFontColor ?>">
			<?php echo $heroTitle ?>
		</h1>
		<?php endif; ?>
		<?php
			// Section Hero > Tagline
			$heroTagline = $sectionHero['heroTagline'];
			$taglineFontWeight = $sectionHero['taglineFontWeight'];
			$taglineFontSize = $sectionHero['taglineFontSize'];
			$taglineFontColor = $sectionHero['taglineFontColor'];
		?>
		<?php if ($heroTagline) : ?>
		<h3 class="<?php echo $taglineFontSize.' '.$taglineFontWeight.' '.$taglineFontColor ?>">
			<?php echo $heroTagline ?>
		</h3>
		<?php endif; ?>
		<?php
			// Section Hero > Call To Action
			$ctaType = $sectionHero['ctaType']; // none || button || form
			$taglineFontSize = $sectionHero['taglineFontSize']; // has-text-weight-light
			$taglineFontColor = $sectionHero['taglineFontColor'];
		?>
		<?php if( $ctaType == 'button' ) : 
			$ctaButtons = $sectionHero['ctaButtons'];
			$max = count($ctaButtons);
				for ($i=0; $i<$max; $i++) :
					$buttonTextColor = $ctaButtons[$i]['buttonText'];
					$buttonText = $ctaButtons[$i]['buttonText'];
					$buttonLink = $ctaButtons[$i]['buttonLink'];
					$buttonColor = $ctaButtons[$i]['buttonColor'];
		?>
   		<a href="<?php echo $buttonLink ?>" class="button <?php echo $buttonColor ?>"><?php echo $buttonText ?></a>
		<?php 
				endfor;
			elseif( $ctaType == 'form' ) :
				$ctaInputType = $sectionHero['ctaInputType'];
				$ctaInputPlaceholder = $sectionHero['ctaInputPlaceholder'];
				$ctaTextColor = $sectionHero['ctaTextColor'];
				$ctaButtonText = $sectionHero['ctaButtonText'];
				$ctaButtonColor = $sectionHero['ctaButtonColor'];
		?>
				<div class="columns auto-tenant-signup" style="margin-top:1.333em">
						<div class="column"></div>
						<div class="column is-6 field is-grouped">
							<div class="control is-expanded">
								<input 
									class="input auto-tenant-signup" 
									type="<?php echo $ctaInputType ?>" 
									placeholder="<?php echo $ctaInputPlaceholder ?>"
									required>
							</div>
							
							<p class="control">
								<a class="button auto-tenant-signup <?php echo $ctaButtonColor ?>">
									<?php echo $ctaButtonText ?>
								</a>
							</p>
						</div>
						<div class="column"></div>
				</div>
		<?php endif; ?>
	</div>
		<!-- BG Overlay -->
		<div class="bg-overlay-container is-overlay <?php echo $bgColor ?>"></div>
</section>
<?php
	endif;
?>