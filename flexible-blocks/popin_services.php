<?php
$bottom_image = get_sub_field( 'bottom_image' );
if ( have_rows( 'services' ) || $bottom_image ) : ?>
    <section class="section-block">
        <div class="holder text-center">
        	<?php if ( have_rows( 'services' )) : ?>
                <div class="carousel">
                    <div class="mask">
                        <div class="slideset">
                        	<?php $i = 0; while ( have_rows( 'services' )) : the_row(); 
								$title = get_sub_field( 'title' );
								$content = get_sub_field( 'content' ); 
								if ( $title || $content ) : ?>
                                    <div class="slide">
                                        <?php if ( $title ) echo '<h3>'. $title .'</h3>'; ?>
                    					<?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
                                    </div>
                            <?php $i++; endif; endwhile; ?>
                        </div>
                    </div>
                    <?php if ( $i > 1 ) { ?>
                    	<a class="btn-prev" href="#"><?php _e( 'Previous', 'base' ); ?></a>
                		<a class="btn-next" href="#"><?php _e( 'Next', 'base' ); ?></a>
                    <?php } ?>
                </div>
            <?php endif; ?>
            <?php if ( $bottom_image ) : ?>
                <div class="image-block-2">
                    <?php retina_image( array( 
                        'image_id'   => $bottom_image, 
                        'large_size' => 'thumbnail_1001x406', 
                        'small_size' => 'thumbnail_421x166' 
                    ) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>