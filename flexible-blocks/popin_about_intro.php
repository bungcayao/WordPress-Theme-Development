<?php
$quotes      = get_sub_field( 'quotes' );
$name        = get_sub_field( 'name' );
$designation = get_sub_field( 'designation' );
$video       = get_sub_field( 'video' );
$bg_image    = get_sub_field( 'bg_image' );
if ( $quotes || $name || $designation || $video || $bg_image ) : ?>
    <div class="visual-block video-block">
        <?php if ( $quotes || $name || $designation || $video ) : ?>
            <div class="text-section">
                <?php if ( $quotes || $name || $designation ) : ?>
                    <blockquote>
                        <?php if ( $quotes ) echo apply_filters( 'the_content', $quotes ); ?>
                        <?php if ( $name || $designation ) : ?>
                            <cite>
                                <?php if ( $name ) echo '<strong>'. $name .'</strong>'; ?> 
                                <?php echo $designation; ?>
                            </cite>
                        <?php endif; ?>
                    </blockquote>
                <?php endif; ?>
                <?php if ( $video ) : ?>
                	<a class="play lightbox fancybox.iframe" href="<?php echo $video; ?>"></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ( $bg_image ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $bg_image, 'thumbnail_1401x718' )); ?>
        <span class="overlay"></span>
    </div>
<?php endif; ?>