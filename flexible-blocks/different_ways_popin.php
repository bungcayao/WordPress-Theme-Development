<?php
$title = get_sub_field( 'title' );
$image = get_sub_field( 'image' );
if ( $title || $image || have_rows( 'ways' )) : ?>
    <section class="holder text-center">
        <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
        <?php if ( $image || have_rows( 'ways' )) : ?>
            <div class="frame">
                <?php if ( $image ) : ?>
                    <div class="image-hold">
                        <?php retina_image( array( 
                            'image_id'   => $image, 
                            'large_size' => 'thumbnail_449x457', 
                            'small_size' => 'thumbnail_436x213' 
                        ) ); ?>
                    </div>
                <?php endif; ?>
                <?php if ( have_rows( 'ways' )) : ?>
                    <div class="text-holder">
                        <?php while ( have_rows( 'ways' )) : the_row(); ?>
                            <?php if ( $title = get_sub_field( 'title' )) echo '<h3>'. $title .'</h3>'; ?>
                            <?php if ( $desc  = get_sub_field( 'desc' )) echo apply_filters( 'the_content', $desc ); ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>