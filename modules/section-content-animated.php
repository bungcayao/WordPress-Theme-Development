<?php
	/**
	 * Module part for displaying content (2 columns)
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>
<?php
	if (get_row('sectionContent')) {
		$sectionContentAnimated = get_row('sectionContentAnimated');

		$sectionRow = $sectionContentAnimated['row'];


		$max = count($sectionRow);
		
		for ($i = 0; $i < $max; $i++) {
					
			$sectionOption = $sectionRow[$i]['sectionOption'];

		  //Content
			$blockContent = $sectionRow[$i]['content'];
			if ( !$blockContent ) {
				$blockContent = 'WAUR WAAUR WAR WAUR WAUUUR!';
			}
			
			// Video
			$blockVideo = $sectionRow[$i]['video'];
			$blockVideoWebm = $sectionRow[$i]['videoWebm'];
			$blockVideoStill = $sectionRow[$i]['videoStill'];

      // Content Order
			$blockOption = $sectionRow[$i]['option'];
			$column_order = '';
			$animateOption = '';
			if ($blockOption != 'content') {
				$column_order = ' column-end';
				$animateOption = ' fadeInLeft';
			} else {
				$animateOption = ' fadeInRight';
			}
			
			$rowBackground = $sectionRow[$i]['background'];
			if(!$rowBackground || $rowBackground == 'none' ) :
        $rowBackground = '';
			else :
        $rowBackground = ' ' . $rowBackground;
			endif;
			
			$videoRatio = $sectionRow[$i]['videoRatio'];
			if( !$videoRatio ) :
        $videoRatio = 'is-16by9';
			endif;
			
?>

<section data-module="section-content-animated" class="section section-content-animated <?php echo $rowBackground ?>">
  <div class="container">
    <div class="columns level">

		<?php if ($sectionOption == 'widescreen') : ?>

      <div class="column content">
				<?php echo $blockContent ?>
      </div>
			
		<?php else : ?>	
			
			<div class="column is-6 content<?php echo $column_order ?>">
				<?php echo $blockContent ?>
      </div>
      <div class="column is-6">
				<figure data-animate="<?php echo $animateOption ?>"
								class="video-container image <?php echo $videoRatio ?> animated has-bg-image is-bg-contain is-center-top">
					<div class="video">
						<video autoplay loop
			  					 style="background-image:url(<?php //echo $blockVideoStill ?>);">
							<source src="<?php echo $blockVideo ?>" type="video/mp4">
							<?php if ($blockVideoWebm) : ?>
								<source src="<?php echo $blockVideoWebm ?>" type="video/webm">
							<?php endif; ?>
							Bruh! Your browser does not support the video tag.
						</video>
					</div>
				</figure>  
			</div>

		<?php endif; ?>

    </div>
  </div>
</section>


<?php
		}
	}
?>