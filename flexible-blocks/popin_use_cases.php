<?php
$logo  = get_sub_field( 'logo' );
$title = get_sub_field( 'title' );
if ( $logo || $title || have_rows( 'benefits' ) ) : ?>
    <section class="holder text-center">
    	<?php if ( $logo ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $logo, 'thumbnail_55x60', '', array( 'class' => 'logo-icon' ) )); ?>
        <?php if ( $title ) echo '<h2 class="heading"><span>'. $title .'</span></h2>'; ?>
        <?php if ( have_rows( 'benefits' ) ) : ?>
            <ul class="benefits-list">
            	<?php while ( have_rows( 'benefits' ) ) : the_row(); 
					$image = get_sub_field( 'image' );
					$desc  = get_sub_field( 'desc' ); 
					if ( $image || $desc ) : ?>
                        <li>
                            <?php if ( $image ) : ?>
                                <div class="image">
                                    <?php echo wp_get_attachment_image( $image, 'thumbnail_50x50' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>
                        </li>
                <?php endif; endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>
<?php endif; ?>