<?php
	/**
	 * Module part for displaying caoursel content
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>
<!--
  TODO (Josh)
  - Setup Nav Dots to correspond to the images.
    - @link https://codepen.io/AMKohn/pen/EKJHf
-->
<section data-module="section-carousel" class="section section-carousel-content has-background-white-ter">
<?php
	if (get_row('sectionCarouselContent')) :
		$sectionCarouselContent = get_row('sectionCarouselContent');
	  $title = $sectionCarouselContent['sectionTitle']; // Section Title
		$slider = $sectionCarouselContent['slider'];      // Slider Array
		$max = count($slider);                            // Slider Length
?>
		<div class="container carousel carousel-animated carousel-animate-slide" data-autoplay="false" data-delay="8000">

			<div class="content has-text-centered is-marginless-bottom is-paddingless-bottom">
				<h2><?php echo $title ?></h2>
				<!--
					need a little more space 
					between title and carousel card 
				-->
				<p>&nbsp;</p>
			</div>	
      <div class="carousel-container">
<?php
		for ($i = 0; $i < $max; $i++) :
			$imgBgOption = $slider[$i]['imageOption'];
			$image = $slider[$i]['image'];           // image url path
			$copy = $slider[$i]['copy'];             // string for quote
			$cta = $slider[$i]['cta'];               // string for cta
			$ctaLink = $slider[$i]['ctaLink'];       // cta url link
			$subText = $slider[$i]['subText'];       // Section Sub Text   
?>
      <!-- Carousel Slide -->
      <div data-slide-order="<?php echo $i ?>" class="carousel-item has-background-white" style="padding-top:30px; padding-bottom:30px;">
				<div class="columns is-desktop is-centered is-vcentered">
					<div class="column content has-text-centered">
						<figure class="image is-centered is-96x96 is-borderless has-bg-image <?php echo $imgBgOption ?>"
							style="background-image:url(<?php echo $image ?>)">
							<img class="is-hidden" src="<?php echo $image ?>" alt="<?php echo $subText ?>" />
						</figure>
						<h4 class="has-text-grey-light is-italic is-size-5 has-text-weight-normal has-broken-words"><?php echo $copy ?></h4>
						<p class="has-text-weight-semibold has-broken-words"><?php echo $subText ?></p>
						<a href="<?php echo $ctaLink ?>" class="carousel-testimonial-cta button is-popin-purp is-hoverable" title=""><?php echo $cta ?></a>
					</div>
				</div>
      </div>
        
          
<?php
		endfor;
?>
		  </div>
      <div class="carousel-navigation is-overlay">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left material-icons" aria-hidden="true">chevron_left</i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right material-icons" aria-hidden="true">chevron_right</i>
        </div>
      </div>
    </div>
<?php
	endif;
?>
</section>