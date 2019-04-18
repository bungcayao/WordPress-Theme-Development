<?php
$title       = get_sub_field( 'title' );
$content     = get_sub_field( 'content' );
$button_text = get_sub_field( 'button_text' );
$button_link = get_sub_field( 'button_link' );
$right_image = get_sub_field( 'right_image' );
$bg_image    = get_sub_field( 'bg_image' );
if ( $title || $content || ($button_text && $button_link) || $right_image || $bg_image ) : ?>
    <div class="visual-block alt">
        <div class="visual-block-holder">
            <?php if ( $title || $content || ($button_text && $button_link) ) : ?>
                <div class="text-section">
                    <?php if ( $title ) echo '<h1>'. $title .'</h1>'; ?>
                    <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
                    <?php if ( $button_text && $button_link ) : ?>
                        <a href="<?php echo esc_url( $button_link ); ?>" class="btn"><?php echo $button_text; ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ( $right_image ) : ?>
            	<div class="image-block"><?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $right_image, 'thumbnail_423x557' )); ?></div>
            <?php endif; ?>
        </div>
        <?php if ( $bg_image ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $bg_image, 'thumbnail_1401x582' )); ?>
        <span class="overlay"></span>
        <span class="decor"></span>
    </div>
<?php endif; ?>