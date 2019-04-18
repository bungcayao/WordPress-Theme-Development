<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
if ( $title || $content || have_rows( 'session_ideas' )) : ?>
    <?php if ( $title || $content ) : ?>
        <section class="holder text-center">
            <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
            <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
        </section>
    <?php endif; ?>
    <?php if ( have_rows( 'session_ideas' )) : ?>
        <div class="tabs-hold">
            <ul class="tabset">
            	<?php $i = 1;  while ( have_rows( 'session_ideas' )) : the_row(); 
					if ( $heading = get_sub_field( 'heading' )) : ?>
						<li class="<?php the_sub_field( 'icon_class' ); ?>"><a <?php if ( $i == 1 ) echo 'class="active"'; ?> href="#tab<?php echo $i; ?>"><span><?php echo $heading; ?></span></a></li>
                <?php $i++; endif; endwhile; ?>
            </ul>
        </div>
        <div class="tab-content">
        	<?php $i = 1;  while ( have_rows( 'session_ideas' )) : the_row(); 
				if ( $heading = get_sub_field( 'heading' )) :
					$sub_heading = get_sub_field( 'sub_heading' );
					$title       = get_sub_field( 'title' );
					$desc        = get_sub_field( 'desc' );
					if ( $sub_heading || $title || $desc || have_rows( 'slideshow' )) : ?>
                        <div id="tab<?php echo $i; ?>">
                            <div class="holder">
                                <?php if ( $sub_heading ) echo '<strong class="sub-head">'. $sub_heading .'</strong>'; ?>
                                <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
            					<?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>
                                <?php if ( have_rows( 'slideshow' )) : ?>
                                    <div class="dg-container">
                                        <div class="dg-wrapper">
                                        	<?php $K = 0; while ( have_rows( 'slideshow' )) : the_row(); 
												$image = get_sub_field( 'image' );
												$video = get_sub_field( 'video' );
												$title = get_sub_field( 'title' ); ?>
                                                <div class="slide">
                                                	<?php if ( $video && $image ) : ?>
                                                        <a class="video lightbox fancybox.iframe" href="<?php echo $video; ?>">
                                                            <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'thumbnail_497x384' )); ?>
                                                            <span class="play"><?php _e( 'play', 'base' ); ?></span>
                                                        </a>
                                                    <?php elseif( $image ): ?>
                                                    	<?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'thumbnail_497x384' )); ?>
                                                    <?php endif; ?>
                                                    <?php if ( $title ) echo '<strong class="title">'. $title .'</strong>'; ?>
                                                </div>
                                            <?php $K++; endwhile; ?>
                                        </div>
                                        <?PHP if ( $K > 1 ){ ?>
                                            <nav class="arrows">
                                                <span class="dg-prev">&lt;</span>
                                                <span class="dg-next">&gt;</span>
                                            </nav>
                                        <?php } ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
            		<?php endif; ?>
			<?php $i++; endif; endwhile; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>