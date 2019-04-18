<?php
$title        = get_sub_field( 'title' );
$content      = get_sub_field( 'content' );
$right_image  = get_sub_field( 'right_image' );
if ( $title || $content || have_rows( 'elements' ) || $right_image ) : ?>
    <section class="gray-section">
        <div class="holder text-center">
        	<?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
            <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
            <?php if ( have_rows( 'elements' )) : ?>
                <div class="text-section">
                    <div class="questions-gallery">
                        <div class="mask">
                            <div class="slideset">
                            	<?php $i = 0; while ( have_rows( 'elements' )) : the_row(); 
									$title = get_sub_field( 'title' );
									$desc  = get_sub_field( 'desc' ); 
									if ( $title || $desc ) : ?>
                                        <div class="slide">
                                            <?php if ( $title ) echo '<h3>'. $title .'</h3>'; ?>
        									<?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>
                                        </div>
                                <?php $i++; endif; endwhile; ?>
                            </div>
                        </div>
                        <?php if( $i > 1 ) { ?>
                        	<a class="btn-prev" href="#"><?php _e( 'Previous', 'base' ); ?></a>
                        	<a class="btn-next" href="#"><?php _e( 'Next', 'base' ); ?></a>
                        <?php } ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( $right_image ) : ?>
                <div class="image-block">
                    <?php retina_image( array( 
						'image_id'   => $right_image, 
						'large_size' => 'thumbnail_529x534', 
						'small_size' => 'thumbnail_371x320' 
					) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>