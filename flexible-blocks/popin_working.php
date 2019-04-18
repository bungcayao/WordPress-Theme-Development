<?php
$bg_image = get_sub_field( 'bg_image' );
$video    = get_sub_field( 'video' );
$content  = get_sub_field( 'content' );
if ( $bg_image || $video || $content ) : ?>
    <section class="video-section" <?php if ( $bg_image ) echo 'style="background: url('. $bg_image .') no-repeat;background-size: cover;"'; ?>>
    	<?php if ( $video || $content ) : ?>
            <div class="holder text-center">
                <?php if ( $video ) { ?>
                    <a class="play lightbox fancybox.iframe" href="<?php echo $video; ?>"></a>
                <?php } ?>
                <?php if ( $content ) echo '<h2>'. $content .'</h2>'; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>