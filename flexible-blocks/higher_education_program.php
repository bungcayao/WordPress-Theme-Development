<?php
$title      = get_sub_field( 'title' );
$sub_title  = get_sub_field( 'sub_title' );
$left_image = get_sub_field( 'left_image' );
if ( $title || $sub_title || have_rows( 'programs' ) || $left_image ) : ?>
    <section class="holder">
        <?php if ( $title || $sub_title || have_rows( 'programs' )) : ?>
        <div class="text-holder">
        	<?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
            <?php if ( $sub_title ) echo '<h3>'. $sub_title .'</h3>'; ?>
            <?php if ( have_rows( 'programs' )) : ?>
                <ul>
                	<?php while ( have_rows( 'programs' )) : the_row(); 
						if ( $title = get_sub_field( 'title' )) : ?>
                    		<li><?php echo $title; ?></li>
                    <?php endif; endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if ( $left_image ) : ?>
            <div class="image-hold">
            	<?php retina_image( array( 
					'image_id'   => $left_image, 
					'large_size' => 'thumbnail_449x457', 
					'small_size' => 'thumbnail_436x213' 
				) ); ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>