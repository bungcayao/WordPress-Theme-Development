<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
$image   = get_sub_field( 'image' );
if ( $title || $content || $image || have_rows( 'reviews' )) : ?>
    <section class="holder text-center">
    	<?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
        <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
        <?php if ( $image ) : ?>
            <div class="image-holder">
            	<?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'thumbnail_803x270' )); ?>
            </div>
        <?php endif; ?>
        <?php if ( have_rows( 'reviews' )) : ?>
            <div class="reviews-block">
                <?php while ( have_rows( 'reviews' )) : the_row();
                    $author_image = get_sub_field( 'author_image' );
                    $quotes       = get_sub_field( 'quotes' ); 
                    $author       = get_sub_field( 'author' );
					$designation  = get_sub_field( 'designation' );
					if ( $author_image || $quotes || $author ||  $designation) : ?>
                        <div class="review">
                            <?php if( $author_image ) : ?>
                                <div class="avatar">
                                    <?php echo wp_get_attachment_image( $author_image, 'thumbnail_151x151' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( $quotes || $author ||  $designation) : ?>
                                <blockquote>
                                    <?php if ( $quotes ) echo apply_filters( 'the_content', $quotes ); ?>
                                    <?php if ( $author ||  $designation) : ?>
                                        <cite>
                                            <?php if ( $author ) echo '<strong>'. $author .'</strong> '; ?>
                                            <?php echo $designation; ?>
                                        </cite>
                                    <?php endif; ?>
                                </blockquote>
                            <?php endif; ?>
                        </div>
                <?php endif; endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>