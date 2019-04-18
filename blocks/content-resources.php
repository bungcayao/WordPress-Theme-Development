<?php 

$style = get_field( 'style' ); 

$internal_extrenal_link = get_field( 'internalexternal_link' );

$video_link = get_field( 'video_link' );

?>

<li class="<?php echo $style; ?> item <?php echo post_terms( 'slug', 'resources-taxonomy' ); ?>">

	<div class="block">

		<?php if ( $thumb_id = get_post_thumbnail_id()) : ?>

        	<?php if( $internal_extrenal_link ) : ?>

            	<a href="<?php echo $internal_extrenal_link; ?>" class="image">

					<?php if ( $style == 'large' ) $img_size = 'thumbnail_382x240'; else $img_size = 'thumbnail_278x170'; ?>

					<?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, $img_size )); ?>

				</a>

            <?php elseif( $video_link ) : ?>

            	<a href="<?php echo $video_link; ?>" class="lightbox fancybox.iframe image">

					<?php if ( $style == 'large' ) $img_size = 'thumbnail_382x240'; else $img_size = 'thumbnail_278x170'; ?>

					<?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, $img_size )); ?>

				</a>

            <?php endif; ?>

			

		<?php endif; ?>

		<div class="text-box">

			<?php if ( $terms = post_terms( 'name', 'resources-taxonomy' ) ) { ?>

				<strong class="category">

					<?php echo $terms; ?>

				</strong>

			<?php } ?>

            <?php if( $internal_extrenal_link ) : ?>

				<h2><a href="<?php echo $internal_extrenal_link; ?>"><?php the_title(); ?></a></h2>

            <?php elseif( $video_link ) : ?>

            	<h2><a href="<?php echo $video_link; ?>" class="lightbox fancybox.iframe"><?php the_title(); ?></a></h2>

            <?php endif; ?>

		</div>

	</div>

</li>