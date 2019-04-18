<?php
$title             = get_sub_field( 'title' );
$sub_title         = get_sub_field( 'sub_title' );
$form              = get_sub_field( 'form' );
$companies_heading = get_sub_field( 'companies_heading' );
$image             = get_sub_field( 'image' );
$mp4_video         = get_sub_field( 'mp4_video' );
$webm_video        = get_sub_field( 'webm_video' );
$ogg_video         = get_sub_field( 'ogg_video' );
if ( $title || $sub_title || $form || $companies_heading || have_rows( 'companies' ) || $image || $mp4_video || $webm_video || $ogg_video ) : ?>
    <div class="intro-block">
        <?php if ( $title || $sub_title || $form || $companies_heading || have_rows( 'companies' )) : ?>
            <div class="text-section">
                <?php if ( $title ) echo '<h1>'. $title .'</h1>'; ?>
                <?php if ( $sub_title ) echo apply_filters( 'the_content', $sub_title ); ?>
                <?php echo $form; ?>
                <?php if ( $companies_heading ) echo '<strong class="title">'. $companies_heading .'</strong>'; ?>
                <?php if ( have_rows( 'companies' )) : ?>
                    <ul class="logos-list">
                        <?php while ( have_rows( 'companies' )) : the_row(); 
                            if ( $company_logo = get_sub_field( 'company_logo' )) : ?>
                                <li><?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $company_logo, 'thumbnail_171x58' )); ?></li>
                        <?php endif; endwhile; ?>
                    </ul>
                <?php endif; ?>
                <a href="#steps" class="anchor"><?php _e( 'anchor', 'base' ); ?></a>
            </div>
        <?php endif; ?>
        <?php if ( $image ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'thumbnail_1401x965' )); ?>
        <?php if ( $mp4_video || $webm_video || $ogg_video ) : ?>
            <div class="js-video-holder">
                <video <?php if ( $image ) echo 'poster="'. wp_get_attachment_url( $image ) .'"'; ?> preload="none">
                    <?php if ( $mp4_video ) { ?>
                        <source type="<?php echo $mp4_video['mime_type']; ?>" src="<?php echo $mp4_video['url']; ?>" />
                    <?php } ?>
                    <?php if ( $webm_video ) { ?>
                        <source type="<?php echo $webm_video['mime_type']; ?>" src="<?php echo $webm_video['url']; ?>" />
                    <?php } ?>
                    <?php if ( $ogg_video ) { ?>
                        <source type="<?php echo $ogg_video['mime_type']; ?>" src="<?php echo $ogg_video['url']; ?>" />
                    <?php } ?>
                </video>
            </div>
        <?php endif; ?>
        <span class="overlay" style="background:none;"></span>
    </div>
<?php endif; ?>