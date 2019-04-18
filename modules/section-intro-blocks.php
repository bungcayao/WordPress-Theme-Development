<?php
	/**
	 * Module part for Intro Blocks (2 Column Section)
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
		* @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>
<?php
	if (get_row('sectionIntroBlocks')) :
		// init Module Setup
		$sectionIntroBlocks = get_row('sectionIntroBlocks');
	
		// Section BG Props
		$bgColor = $sectionIntroBlocks['bgColor'];
		$bgImg = null; // '//placebear.com/1200/800';
		if( !$bgImg ) {
			$bgImgUrl = 'background-image:none;';
	  } else  {
			$bgImgUrl = 'background-image:url('.$bgImg.');';
			$bgImgRepeat = 'no-repeat';
			$bgImgPosition = $sectionIntroBlocks['bgImgPosition'];
			$bgImgSize = $sectionIntroBlocks['bgImgSize'];
			$bgImgAttachment = $sectionIntroBlocks['bgImgAttachment'];
			$bgImgRepeat = 'no-repeat';
			$bgProperties = ' background-repeat:'.$bgImgRepeat.'; background-position:'.$bgImgPosition.'; background-size:'.$bgImgSize.'; background-attachment:'.$bgImgAttachment.';'; 
		}
	?>
	<section 
		data-module="section-intro-blocks" 
		class="section section-intro-blocks"
		style="<?php echo $bgImgUrl ?><?php echo $bgProperties ?>">
		<div class="container" style="z-index:2">
			<div class="columns level">
				<?php
					// Column Order Props
					$mobileColumnOrder = $sectionIntroBlocks['mobileColumnOrder'];
					$columnOrder = $sectionIntroBlocks['columnOrder'];
					$columnProps = $mobileColumnOrder.' '.$columnOrder;
				?>
				<div data-content="markup" class="column is-6 content <?php echo $columnProps ?>">
					<article class="content has-text-centered">
						<?php 
							$hasThumbnail = $sectionIntroBlocks['hasThumbnail'];
							if($hasThumbnail) : 
								$thumbSize = $sectionIntroBlocks['hasThumbnail']; // is-16x16 || is-24x24 || is-32x32 || is-48x48 || is-64x64 || is-96x96 || is-128x128
								$thumbAlign = $sectionIntroBlocks['thumbAlign']; // is-centered || is-pulled-left || is-pulled-right
								$thumbBgSize = $sectionIntroBlocks['thumbBgSize']; // is-bg-auto || is-bg-contain || is-bg-cover
								$isRounded = $sectionIntroBlocks['isRounded'];
								if ($isRounded) {
									return 'button is-borderless is-rounded';
								} else {
									return false;
								}
								$thumbProps = 'image has-bg-image '.$thumbSize.' '.$thumbAlign.' '.$thumbBgSize.' '.$isRounded;
						
								$thumbImg = $sectionIntroBlocks['thumbImg'];
								if (!bgImg) {
									return '//popinnow.com/wp-content/themes/popin/dist/images/generic-placeholders/popin-chat-only-logo.svg';
								} else {
									return $thumbImg;
								}
						?>
							<figure 
								class="<?php echo $thumbProps ?>" 
								style="background-image: url(<?php echo $thumbImg ?>);">
							</figure>
						<?php endif; 
							$markupTitle = $sectionIntroBlocks['markupTitle'];
							$markupFontSize = $sectionIntroBlocks['markupFontSize'];
							$markupFontColor = $sectionIntroBlocks['markupFontColor']; // too many to list
							$markupFontAlign = $sectionIntroBlocks['markupFontAlign']; // has-text-centered || has-text-justified || has-text-left || has-text-right
							$markupFontTrans = $sectionIntroBlocks['markupFontTrans']; // is-capitalized || is-lowercase || is-uppercase || is-italic
							$markupFontWeight = $sectionIntroBlocks['markupFontWeight']; // has-text-weight-light || has-text-weight-normal || has-text-weight-semibold || has-text-weight-bold
							$markupFontProps = $markupFontSize.' '.$markupFontColor.' '.$markupFontAlign.' '.$markupFontTrans.' '.$markupFontWeight;
						?>
						<h2 class="<?php echo $markupFontProps ?>">
							<?php echo $markupTitle ?>
						</h2>
						<hr class="divider has-background-popin is-centered" style="height:.15rem; width:15%;" />
						<?php
							$pFontSize = $sectionIntroBlocks['pFontSize']; // is-size-1 || is-size-2 || is-size-3 || is-size-4 || is-size-5 || is-size-6 || is-size-7
							$pFontColor = $sectionIntroBlocks['pFontColor']; // too many to list
							$pFontAlign = $sectionIntroBlocks['pFontAlign']; // has-text-centered || has-text-justified || has-text-left || has-text-right
							$pFontProps = $pfontSize.' '.$pfontColor.' '.$pfontAlign;
							$pContent = $sectionIntroBlocks['pContent'];
						?>
						<p class="is-size-6 has-text-grey">
							<?php echo $pContent ?>
						</p>
						<?php
							$hasCtaButtons = $sectionIntroBlocks['hasCtaButtons'];
							if($hasCtaButtons) :
								$buttonColor = $sectionIntroBlocks['buttonColor'];
								$buttonTxtColor = $sectionIntroBlocks['buttonTxtColor'];
								$buttonUrl = $sectionIntroBlocks['buttonUrl'];
								$buttonTxt = $sectionIntroBlocks['buttonTxt'];
						?>
						<p> 
							<a class="button <?php echo $buttonColor.' '.$buttonTxtColor ?>" href="<?php echo $buttonUrl ?>"><?php echo $buttonTxt ?></a>
						</p>
						<?php endif; ?>
					</article>
				</div>
				<div class="column"><!--flex column --></div>
				<?php
					$multimediaType = $sectionIntroBlocks['multimediaType'];
					$multimediaSource = $sectionIntroBlocks['multimediaSource'];
				?>
				<div data-content="<?php echo $multimediaType ?>" class="column is-6 content is-<?php echo $multimediaType ?>">
				<?php
					if($multimediaType == 'video') :
				?>
					<iframe 
						src="<?php echo $multimediaSource ?>" 
						data-src="<?php echo $multimediaSource ?>"
						width="100%"
						height="390"
						frameborder="0"
						webkitallowfullscreen=""
						mozallowfullscreen=""
						allowfullscreen="">
					</iframe>
				<?php 
					elseif($multimediaType == 'image') :
						$isResponsive = $sectionIntroBlocks['isResponsive'];
						$imgAlign = $sectionIntroBlocks['imgAlign']; // is-centered || is-pulled-left || is-pulled-right
						$imgSize = $sectionIntroBlocks['imgSize']; // is-16x16 || is-24x24 || is-32x32 || is-48x48 || is-64x64 || is-96x96 || is-128x128
						$imgResponsiveSize = $sectionIntroBlocks['imgResponsiveSize']; // is-1by1|| is-5by4 || is-4by3 || is-3by2 || is-5by3 || is-16by9 || is-2by1 || is-3by1 || is-4by5 || is-3by4 || is-2by3 || is-3by5 || is-9by16 || is-1by2 || is-1by3
						if(!$isResponsive) {
							return $imgAlign && $imgSize; 
						} else {
							return $imgResponsiveSize;
						}
				?>
					<figure class="<?php echo $multimediaType.' '.$imgSize.' '.$imgAlign ?>">
						<img src="<?php echo $multimediaSource ?>">
					</figure>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- BG Overlay -->
		<div class="bg-overlay-container is-overlay <?php echo $bgColor ?>"></div>
	</section>


<?php		
	endif;
?>