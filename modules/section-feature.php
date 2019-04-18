<?php
	/**
	 * Module part for displaying featured content
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link    https://www.advancedcustomfields.com/resources/
	 * @link    https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>
<?php
  // Background Options
  $sectionFeature = get_row('sectionFeature');
  
  // Title + Sub Title
  $title = $sectionFeature['title'];
  if (!$title) {
    $title = 'Enter Your Title Here';
  }
  $subtitle = $sectionFeature['subtitle'];
  if (!$subtitle) {
    $subtitle = 'Enter Your Title Here';
  }
  // Title + Font Options
  $fontFamily = $sectionFeature['fontFamily'];
  $fontColor = $sectionFeature['fontColor'];
  // BG Option
  $bgColor = $sectionFeature['bgColor'];
  $bgImg = $sectionFeature['bgImg'];
  $bgImgUrl = null;
  if( !$bgImg ) {
    $bgImgUrl = 'none';
  } else  {
    $bgImgUrl = 'url(' . $bgImg . ')';
  }
?>
<!-- Feature Section (4 Column) -->
<section data-module="section-feature" class="section section-feature is-position-relative has-bg-image"
  style="background-image:<?php echo $bgImgUrl ?>;">
  <div class="container content-container is-position-relative">
    <!-- Title + SubTitle Block -->
    <div class="has-text-centered is-paddingless-bottom">
    <h1 class="title <?php echo $fontFamily ?> <?php echo $fontColor ?>"><?php echo $title ?></h1>
    <h3 class="subtitle <?php echo $fontColor ?> has-text-weight-light"><?php echo $subtitle ?></h3>
  </div>
    <!-- Columns Block -->
    <div class="section columns is-paddingless-bottom">
			<?php
				if ( get_sub_field('columns') ) :
					$columns = get_sub_field('columns');        // Get Sub Field `Columns`
					$max = count($columns);                     // Find Array Length of Column
          for ($i = 0; $i < $max; $i++) :
            // Setup Section Column default
            $sectionColumn = $columns[$i];
            // Image Options
            $image = $sectionColumn['image'];
            if ( !$image  ) :
              $image = popin_images_dir() . '/generic-placeholders/popin-stacked-logo.svg';
            endif;
            $imageOption = $sectionColumn['imageOption'];
            $imageShape = $sectionColumn['imageShape'];
            $imageRatio = $sectionColumn['imageRatio'];
            $imageBorder = $sectionColumn['imageBorder'];
            // Animation Options
            $animateOption = $sectionColumn['animateOption'];
            if( $animateOption === 'none' ) :
              $animateOption = '';
            endif;
      ?>
              <!-- TODO: Add feature for Rounded or Square contianers, or NO outlines -->
              <div 
                data-animate="<?php echo $animateOption ?>" 
                class="column has-text-centered content animated">
                <figure
                  class="image <?php echo $imageRatio ?> <?php echo $imageShape ?> <?php echo $imageBorder ?> level is-centered has-bg-image <?php echo $imageOption ?>"
                  style="background-image:url(<?php echo $image ?>)"
                  title="<?php echo $sectionColumn['title'] ?>">
                </figure>
                <h4 class="<?php echo $fontFamily ?> <?php echo $fontColor ?>"><?php echo $sectionColumn['title'] ?></h4>
                <p><?php echo strip_tags($sectionColumn['description']) ?></p>
                <a href="<?php echo $sectionColumn['ctaLink'] ?>" data-feature-item-title="<?php echo $sectionColumn['title'] ?>" class="button is-popin-purp is-hovered feature-item-cta"><?php echo $sectionColumn['cta'] ?></a>
              </div>
      <?php
			    endfor;
        endif;
      ?>
    </div>
  </div>
  <!-- BG Overlay -->
  <div class="bg-overlay-container is-overlay<?php echo $bgColor ?>"></div>
</section>