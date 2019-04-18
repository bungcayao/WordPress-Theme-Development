<?php
$title     = get_sub_field( 'title' );
$sub_title = get_sub_field( 'sub_title' );
$video     = get_sub_field( 'video' );
$bg_image  = get_sub_field( 'bg_image' );
if ( $title || $sub_title || $video || $bg_image || have_rows( 'launch_processes' )) : ?>
    <?php if ( $title || $sub_title || $video || $bg_image ) : ?>
        <div class="visual-block video-block">
            <div class="text-section">
                <?php if ( $title ) echo '<h1>'. $title .'</h1>'; ?>
                <?php if ( $sub_title ) echo apply_filters( 'the_content', $sub_title ); ?>
                <?php if ( $video ) { ?>
                    <a class="play lightbox fancybox.iframe" href="<?php echo $video; ?>"></a>
                <?php } ?>
            </div>
            <?php if( $bg_image ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $bg_image, 'thumbnail_1401x718' )); ?>
            <span class="overlay"></span>
        </div>
    <?php endif; ?>
    <?php if ( have_rows( 'launch_processes' )) : ?>
    	<?php $count = 1; while ( have_rows( 'launch_processes' )) : the_row(); 
			$title   = get_sub_field( 'title' );
			$content = get_sub_field( 'content' );
			$image   = get_sub_field( 'image' ); 
			if ( $title || $content || $image ) : ?>
                <section class="<?php if( $count%2 == 0 ) echo 'gray-section'; ?> alter">
                    <div class="holder">
                        <?php if ( $title || $content ) : ?>
                            <div class="column text">
                                <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
                                <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>	
                            </div>
                        <?php endif; ?>
                        <?php if ( $image ) : ?>
                            <div class="column">
                                <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'thumbnail_430x315' )); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
        <?php $count++; endif; endwhile; ?>
    <?php endif; ?>
<?php endif; ?>