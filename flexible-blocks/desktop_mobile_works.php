<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
$image   = get_sub_field( 'image' );
if ( $title || $content || $image || have_rows( 'works' )) : ?>
    <section class="holder text-center">
        <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
        <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
        <?php if ( $image ) : ?>
            <div class="image-holder">
            	<?php echo wp_get_attachment_image( $image, 'thumbnail_803x344' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( have_rows( 'works' )) : ?>
            <div class="apps-block">
            	<?php while ( have_rows( 'works' )) : the_row(); 
					$logo  = get_sub_field( 'logo' );
					$title = get_sub_field( 'title' );
					$link  = get_sub_field( 'link' );
					$desc  = get_sub_field( 'desc' ); 
					if ( $logo || $title || $desc ) : ?>
                        <div class="block">
                            <?php if ( $logo ) : ?>
                                <?php if ( $link ) echo '<a class="logo-app" href="'. esc_url( $link ) .'">'; ?>
                                    <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $logo, 'thumbnail_75x76' )); ?>
                                <?php if ( $link ) echo '</a>'; ?>
                            <?php endif; ?>
                            <?php if ( $title || $desc ) : ?>
                                <div class="text">
                                    <?php if ( $title ) : ?>
                                        <h3>
                                            <?php if ( $link ) echo '<a href="'. esc_url( $link ) .'">'; ?>
                                                <?php echo $title; ?>
                                            <?php if ( $link ) echo '</a>'; ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                <?php endif; endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>