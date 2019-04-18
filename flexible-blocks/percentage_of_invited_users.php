<?php
$title     = get_sub_field( 'title' );
$content   = get_sub_field( 'content' );
$map_image = get_sub_field( 'map_image' );
if ( $title || $content || $map_image || have_rows( 'list' )) : ?>
    <section class="holder text-center">
        <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
        <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
        <?php if ( $map_image ) : ?>
            <div class="map">
            	<?php echo wp_get_attachment_image( $map_image, 'thumbnail_1100x657'); ?>
                <?php if ( have_rows( 'markers' )) : ?>
                	<?php while ( have_rows( 'markers' )) : the_row(); 
						$m_class = $style = '';
						$marker_style = get_sub_field( 'marker_style' );
						$class        = get_sub_field( 'class' );
						$top          = get_sub_field( 'top' );
						$right        = get_sub_field( 'right' );
						$bottom       = get_sub_field( 'bottom' );
						$left         = get_sub_field( 'left' ); 
						if ( $marker_style == 'class' && $class ) { 
							$m_class = $class;
						}elseif( $marker_style == 'manually' && ($top || $right || $bottom || $left) ){
							if ( $top )    $style .= 'top: '.$top.'%;';
							if ( $right )  $style .= 'right: '.$right.'%;';
							if ( $bottom ) $style .= 'bottom: '.$bottom.'%;';
							if ( $left )   $style .= 'left: '.$left.'%;';
						}
						if ( $m_class || $style ) : ?>
                            <div class="marker <?php echo $m_class; ?>" <?php if( $style) echo 'style="'. $style .'"'; ?>>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/marker.png" alt="image description">
                            </div>
                    <?php endif; endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ( have_rows( 'list' )) : ?>
            <ul class="list">
            	<?php while ( have_rows( 'list' )) : the_row(); 
					$title = get_sub_field( 'title' );
					$desc  = get_sub_field( 'desc' ); 
					if ( $title || $desc ) : ?>
						<li>
                            <?php if ( $title ) echo '<h3>'. $title .'</h3>'; ?>
                            <?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>
                        </li>
				<?php endif; endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>
<?php endif; ?>