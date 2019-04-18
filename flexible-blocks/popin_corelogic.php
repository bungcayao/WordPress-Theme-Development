<?php
$bg_image   = get_sub_field( 'bg_image' );
$video      = get_sub_field( 'video' );
$title      = get_sub_field( 'title' );
$sub_title  = get_sub_field( 'sub_title' );
$logo       = get_sub_field( 'logo' );
if ( $bg_image || $video || $title || $sub_title || $logo ) : ?>
    <section class="video-section alt" <?php if ( $bg_image ) echo 'style="background: url('. $bg_image .') no-repeat;background-size: cover;"'; ?>>
        <?php if ( $video || $title || $sub_title || $logo ) : ?>
            <div class="holder text-center">
                <?php if ( $video ) { ?>
                    <a class="play lightbox fancybox.iframe" href="<?php echo $video; ?>"></a>
                <?php } ?>
                <?php if ( $title ) { ?>
                    <strong class="sub-head"><?php echo $title; ?></strong>
                <?php } ?>
                <?php if ( $sub_title ) echo '<h2>'. $sub_title .'</h2>'; ?>
                <?php if( $logo) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $logo, 'thumbnail_168x135', '', array( 'class' => 'logo-core-logic' ))); ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>