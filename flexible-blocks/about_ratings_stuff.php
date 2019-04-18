<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
if ( $title || $content || have_rows( 'ratings_and_stuff' )) : ?>
    <section class="section-block alt">
        <div class="holder">
            <?php if ( $title || $content ) : ?>
                <div class="block-right">
                    <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
                    <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
                </div>
            <?php endif; ?>
            <?php if ( have_rows( 'ratings_and_stuff' )) : ?>
                <div class="thought-section">
                	<?php while ( have_rows( 'ratings_and_stuff' )) : the_row();
						$title   = get_sub_field( 'title' );
						$desc    = get_sub_field( 'desc' ); 
						$like    = get_sub_field( 'like' );
						$dislike = get_sub_field( 'dislike' );
						$comment = get_sub_field( 'comment' );
						if ( $title || $desc || $like || $dislike || $comment ) : ?>
                            <div class="thought-bubble-box <?php the_sub_field( 'color' ); ?>">
                                <?php if ( $title || $desc ) : ?>
                                    <div class="title">
                                        <?php if ( $title ) echo '<strong>'. $title .'</strong>'; ?>
                                        <?php if ( $desc ) echo '<span>'. $desc .'</span>'; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $like || $dislike || $comment ) : ?>
                                    <div class="hold">
                                        <?php if ( $like ) : ?>
                                            <div class="col">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-like.png" alt="image description">
                                                </div>
                                                <strong class="counter"><?php echo $like; ?></strong>
                                            </div>
                                        <?php endif;  ?>
                                        <?php if ( $dislike ) : ?>
                                            <div class="col">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-dislike.png" alt="image description">
                                                </div>
                                                <strong class="counter"><?php echo $dislike; ?></strong>
                                            </div>
                                        <?php endif;  ?>
                                        <?php if ( $comment ) : ?>
                                            <div class="col">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-comment.png" alt="image description">
                                                </div>
                                                <strong class="counter"><?php echo $comment; ?></strong>
                                            </div>
                                        <?php endif;  ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                    <?php endif; endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>