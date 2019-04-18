<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
if ( $title || $content || have_rows( 'brands' ) ) : ?>
    <section class="holder text-center">
        <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
		<?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
        <?php if ( have_rows( 'brands' )) : ?>
            <div class="blockquote-slideshow">
                <div class="slideset">
                	<?php $i = 0; while ( have_rows( 'brands' )) : the_row(); 
						$quotes = get_sub_field( 'quotes' );
						$logo   = get_sub_field( 'logo' );
						$author = get_sub_field( 'author' );
						$name   = get_sub_field( 'name' ); 
						if ( $quotes || $logo || $author || $name ) : ?>
                            <div class="box">
                                <blockquote>
                                    <?php if ( $quotes ) echo '<q>'. $quotes .'</q>'; ?>
                                    <?php if ( $logo ) : ?>
                                        <div class="logo-image">
                                        	<?php echo wp_get_attachment_image( $logo, 'thumbnail_137x37' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ( $author || $name ) : ?>
                                    	<cite>
                                        	<?php echo $author; ?>
                                        	<?php if ( $name ) echo '<span>'. $name .'</span>'; ?> 
                                        </cite>
                                    <?php endif; ?>
                                </blockquote>
                            </div>
                    <?php $i++; endif; endwhile; ?>
                </div>
                <?php if ( $i > 1 ) { ?>
                	<a class="btn-prev" href="#"><?php _e( 'Previous', 'base' ); ?></a>
                	<a class="btn-next" href="#"><?php _e( 'Next', 'base' ); ?></a>
                <?php } ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>