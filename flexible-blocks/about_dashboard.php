<?php
$title             = get_sub_field( 'title' );
$content           = get_sub_field( 'content' );
$button_text       = get_sub_field( 'button_text' );
$button_link       = get_sub_field( 'button_link' );
$dashboard_image_1 = get_sub_field( 'dashboard_image_1' );
$dashboard_image_2 = get_sub_field( 'dashboard_image_2' );
$dashboard_image_3 = get_sub_field( 'dashboard_image_3' );
if ( $title || $content || ( $button_text && $button_link ) || $dashboard_image_1 || $dashboard_image_2 || $dashboard_image_3 ) : ?>
    <section class="section-block alt">
        <div class="holder">
        	<?php if ( $title || $content || ( $button_text && $button_link )) : ?>
                <div class="block-right">
                    <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
                    <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
                    <?php if ( $button_text && $button_link ) : ?>
                        <a href="<?php echo esc_url( $button_link ); ?>" class="btn hidden-mobile"><?php echo $button_text; ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ( $dashboard_image_1 || $dashboard_image_2 || $dashboard_image_3 ) : ?>
                <div class="dashboard-section">
                	<?php if ( $dashboard_image_1 ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $dashboard_image_1, 'thumbnail_416x522', '', array( 'class' => 'dashboard-1' ))); ?>
                    <?php if ( $dashboard_image_2 ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $dashboard_image_2, 'thumbnail_342x424', '', array( 'class' => 'dashboard-2' ))); ?>
                    <?php if ( $dashboard_image_3 ) echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $dashboard_image_3, 'thumbnail_270x331', '', array( 'class' => 'dashboard-3' ))); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>