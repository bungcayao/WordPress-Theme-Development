<?php

$title     = get_sub_field( 'title' );

$content   = get_sub_field( 'content' );

$more_link = get_sub_field( 'more_link' );

if ( $title || $content || have_rows( 'steps' ) || $more_link ) : ?>

    <section class="holder text-center" id="steps">

    	<?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>

        <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>

        <?php if ( have_rows( 'steps' )) : ?>

            <ul class="steps">

            	<?php $i = 1; while ( have_rows( 'steps' )) : the_row(); 

					$image = get_sub_field( 'image' );

					$title = get_sub_field( 'title' );

					$desc  = get_sub_field( 'desc' ); 

					if ( $image || $title|| $desc ) : ?>

                        <li>

                            <?php if ( $image ) : ?>

                                <div class="image">

                                    <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'thumbnail_256x224' )); ?>

                                </div>

                            <?php endif; ?>

                            <?php if ( $title ) echo '<h3>'. $i.'. '. $title .'</h3>'; ?>

                            <?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>

                        </li>

                <?php $i++; endif; endwhile; ?>

            </ul>

        <?php endif; ?>

        <?php if ( $more_link ) : ?>

        	<a href="<?php echo esc_url( $more_link ); ?>" class="btn"><?php _e( 'LEARN MORE', 'base' ); ?></a>

        <?php endif; ?>

    </section>

<?php endif; ?>