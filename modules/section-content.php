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
		$sectionContent = get_row('sectionContent');
				
		$sectionRow = $sectionContent['row'];
		$max = count($sectionRow);
		
		for ($i = 0; $i < $max; $i++) {
		  // Content
			$blockContent = $sectionRow[$i]['content'];
			if ( !$blockContent ) {
				$blockContent = 'WAUR WAAUR WAR WAUR WAUUUR!';
      }
			// Image
			$imageOption = $sectionRow[$i]['imageOption'];
			$blockImage = $sectionRow[$i]['image'];
      if (!$blockImage) {
        $imgBackground = popin_images_dir() . '/generic-placeholders/popin-stacked-logo.svg';
      } else {
        $imgBackground = $blockImage;
			}
			$bgImageSize = '';	// Init Value
			if ( !$bgImageSize ) {
				$bgImageSize = ' bg-contain';	// Default Value
			} else {
				$bgImageSize = ' ' . $bgImageSize;
			}

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
			
			$imgRatio = $sectionRow[$i]['imgRatio'];
			if( $imgRatio ) :
        $imgRatio = ' ' . $imgRatio;
			endif;
			
?>

<section data-module="section-content" class="section section-content<?php echo $rowBackground ?>">
  <div class="container">
    <div class="columns level">
      <div class="column is-6 content<?php echo $column_order ?>">
        <?php echo $blockContent ?>
      </div>
      <div class="column is-6">
        <figure data-animate="<?php echo $animateOption ?>"
          class="image has-bg-image <?php echo $imageOption ?><?php echo $bgImageSize ?> animated<?php echo $imgRatio ?>"
          style="background-image:url(<?php echo $imgBackground ?>);"></figure>
      </div>
    </div>
  </div>
</section>


<?php
		}
		
	}
?>