<li class="item <?php echo post_terms( 'slug', 'news-taxonomy' ); ?>">
    <div class="block">
        <?php if ( $terms = post_terms( 'name', 'news-taxonomy' ) ) { ?>
            <strong class="category">
                <?php echo $terms; ?>
            </strong>
        <?php } ?>
        <h2><a href="#" data-popup="popup<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
        <time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F j, Y' ); ?></time>
        <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
            <div class="logo-icon">
                <a href="#" data-popup="popup<?php the_ID(); ?>">
                    <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_211x69' )); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <article class="popup">
        <div class="popup-frame">
            <a href="#" class="close"><?php _e( 'close', 'popin' ); ?></a>
            <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
                <div class="logo-icon">
                    <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_211x69' )); ?>
                </div>
            <?php endif; ?>
            <h2><a href="#" data-popup="popup<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <?php if ( $read_more_link = get_field('read_more_link')) : ?>
            	<a href="<?php echo $read_more_link; ?>" target="_blank" rel="noopener noreferrer" class="btn"><?php _e( 'READ MORE', 'popin' ); ?></a>
            <?php endif; ?>    
        </div>
    </article>
</li>