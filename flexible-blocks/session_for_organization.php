<?php
$title           = get_sub_field( 'title' );
$content         = get_sub_field( 'content' );
$learn_more_text = get_sub_field( 'learn_more_text' );
$learn_more_link = get_sub_field( 'learn_more_link' );
$bottom_image    = get_sub_field( 'bottom_image' );
if ( $title || $content || ($learn_more_text && $learn_more_link) || $bottom_image ) : ?>
    <section class="section-alt">
        <div class="holder text-center">
            <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
            <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
            <?php if ( $learn_more_text && $learn_more_link ) : ?>
            	<a href="<?php echo esc_url( $learn_more_link ); ?>" class="btn"><?php echo $learn_more_text; ?></a>
            <?php endif; ?>
            <?php if ( $bottom_image ) : ?>
                <div class="image-block-2">
                    <?php retina_image( array( 
                        'image_id'   => $bottom_image, 
                        'large_size' => 'thumbnail_1001x372', 
                        'small_size' => 'thumbnail_437x144' 
                    ) ); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>