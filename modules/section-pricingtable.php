<?php
	/**
	 * Module part for displaying pricing tables
	 * @package popin
	 */
?>
<?php
	// if (get_row('sectionContent')) {
	// 	$sectionContent = get_row('sectionContent');
				
	// 	$sectionRow = $sectionContent['row'];
	// 	$max = count($sectionRow);
		
	// 	for ($i = 0; $i < $max; $i++) {
	// 	  // Content
	// 		$blockContent = $sectionRow[$i]['content'];
	// 		if ( !$blockContent ) {
	// 			$blockContent = 'WAUR WAAUR WAR WAUR WAUUUR!';
  //     }
	// 		// Image
	// 		$imageOption = $sectionRow[$i]['imageOption'];
	// 		$blockImage = $sectionRow[$i]['image'];
  //     if (!$blockImage) {
  //       $imgBackground = popin_images_dir() . '/generic-placeholders/popin-stacked-logo.svg';
  //     } else {
  //       $imgBackground = $blockImage;
	// 		}
	// 		$bgImageSize = '';	// Init Value
	// 		if ( !$bgImageSize ) {
	// 			$bgImageSize = ' bg-contain';	// Default Value
	// 		} else {
	// 			$bgImageSize = ' ' . $bgImageSize;
	// 		}

  //     // Content Order
	// 		$blockOption = $sectionRow[$i]['option'];
	// 		$column_order = '';
	// 		$animateOption = '';
	// 		if ($blockOption != 'content') {
	// 			$column_order = ' column-end';
	// 			$animateOption = ' fadeInLeft';
	// 		} else {
	// 			$animateOption = ' fadeInRight';
	// 		}
			
	// 		$rowBackground = $sectionRow[$i]['background'];
			
	// 		if(!$rowBackground || $rowBackground == 'none' ) :
  //       $rowBackground = '';
	// 		else :
  //       $rowBackground = ' ' . $rowBackground;
	// 		endif;
			
	// 		$imgRatio = $sectionRow[$i]['imgRatio'];
	// 		if( $imgRatio ) :
  //       $imgRatio = ' ' . $imgRatio;
	// 		endif;
			
?>

<section data-module="section-pricetable" class="section">
			<div class="container">
			
				<div class="pricing-table is-comparative">
					<div class="pricing-plan is-features">
						<div class="plan-header">&nbsp;</div>
						<div class="plan-price">
							<p class="plan-price-amount">
								<span class="plan-price-currency">&nbsp;</span>&nbsp;
							</p>
							<p class="plan-price-currency">&nbsp;</p>	
						</div>
						<div class="plan-footer">
							<button class="button is-invisible"></button>
						</div>
						<div class="plan-items">
							<div class="plan-item" data-feature="Storage">Annual Org</div>
							<div class="plan-item" data-feature="Domains">One-Time</div>
							<div class="plan-item" data-feature="Bandwidth">-</div>
							<div class="plan-item" data-feature="Email Boxes">-</div>
						</div>
						<div class="plan-footer">
						</div>
					</div>
					
					<div class="pricing-plan is-mono-gray-3">
						<div class="plan-header">Trial</div>
						<div class="plan-price">
							<p class="plan-price-amount">
								<span class="plan-price-currency">$</span>0
							</p>
							<p class="plan-price-currency">per year</p>	
						</div>
						<div class="plan-footer">
							<button class="button">Try Now</button>
						</div>
						<div class="plan-items">
							<div class="plan-item" data-feature="Storage">20GB</div>
							<div class="plan-item" data-feature="Domains">100</div>
							<div class="plan-item" data-feature="Bandwidth">-</div>
							<div class="plan-item" data-feature="Email Boxes">-</div>
						</div>
						<div class="plan-footer">
						</div>
					</div>

					<div class="pricing-plan is-popin-blue-af">
						<div class="plan-header">Department</div>
						<div class="plan-price">
							<p class="plan-price-amount">
								<span class="plan-price-currency">$</span>0
							</p>
							<p class="plan-price-currency">per year</p>	
						</div>
						<div class="plan-footer">
							<button class="button">Choose</button>
						</div>
						<div class="plan-items">
							<div class="plan-item" data-feature="Storage">20GB</div>
							<div class="plan-item" data-feature="Domains">25</div>
							<div class="plan-item" data-feature="Bandwidth">1TB</div>
							<div class="plan-item" data-feature="Email Boxes">-</div>
						</div>
						<div class="plan-footer">
						</div>
					</div>

					<div class="pricing-plan is-success is-active">
						<div class="plan-header">Corporate</div>
						<div class="plan-price">
							<p class="plan-price-amount">
								<span class="plan-price-currency">$</span>0
							</p>
							<p class="plan-price-currency">per year</p>	
						</div>
						<div class="plan-footer">
							<button class="button">Choose</button>
						</div>
						<div class="plan-items">
							<div class="plan-item" data-feature="Storage">200GB</div>
							<div class="plan-item" data-feature="Domains">50</div>
							<div class="plan-item" data-feature="Bandwidth">1TB</div>
							<div class="plan-item" data-feature="Email Boxes">100</div>
						</div>
						<div class="plan-footer">
						</div>
					</div>

					<div class="pricing-plan is-popin-blue-md">
						<div class="plan-header">Enterprise</div>
						<div class="plan-price">
							<p class="plan-price-amount">
								<span class="plan-price-currency">$</span>0
							</p>
							<p class="plan-price-currency">per year</p>	
						</div>
						<div class="plan-footer">
							<button class="button">Choose</button>
						</div>
						<div class="plan-items">
							<div class="plan-item" data-feature="Storage">2TB</div>
							<div class="plan-item" data-feature="Domains">100</div>
							<div class="plan-item" data-feature="Bandwidth">1TB</div>
							<div class="plan-item" data-feature="Email Boxes">1000</div>
						</div>
						<div class="plan-footer">
						</div>
					</div>
				</div>

			
			</div>
		</section>