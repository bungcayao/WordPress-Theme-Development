<li>
	<?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
        <a href="<?php the_permalink(); ?>" class="image">
            <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_436x241' )); ?>
        </a>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>" class="date"><time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F j, Y' ); ?></time></a>
    <?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
    <div class="text">
        <?php theme_the_excerpt(); ?>
        <?php wp_link_pages(); ?>
    </div>
</li>