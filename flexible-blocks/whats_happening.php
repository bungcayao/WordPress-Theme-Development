<?php

$title         = get_sub_field( 'title' );

$related_posts = get_sub_field( 'related_posts' );

if ( $title || $related_posts || is_active_sidebar( 'twitter-sidebar' )) : ?>

    <section class="gray-section">

        <div class="holder text-center">

            <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>

            <?php if ( $related_posts || is_active_sidebar( 'twitter-sidebar' )) : ?>

                <div class="events-block">

                    <?php if ( $related_posts ) : ?>

                        <?php $rel_qry = new WP_Query( array(

                             'post_type'      => 'resources',

                             'post__in'       => $related_posts,

                             'orderby'        => 'post__in',

                             'posts_per_page' => -1,

                             )); ?>

                        <?php while( $rel_qry->have_posts()) : $rel_qry->the_post(); ?>

                        <?php

							$internal_extrenal_link = get_field( 'internalexternal_link' );

							$video_link = get_field( 'video_link' );

						?>

                            <article class="block">

                                <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>

                                	<?php if( $internal_extrenal_link ) : ?>

            							<a href="<?php echo $internal_extrenal_link; ?>" class="image">

                                    <?php elseif( $video_link ) : ?>

            							<a href="<?php echo $video_link; ?>" class="lightbox fancybox.iframe image">

                                    <?php endif; ?>       

                                        <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_436x241' )); ?>

                                    </a>

                                <?php endif; ?>

                                <?php if( $internal_extrenal_link ) : ?>

                                    <a href="<?php echo $internal_extrenal_link; ?>" class="date">

                                <?php elseif( $video_link ) : ?>

                                    <a href="<?php echo $video_link; ?>" class="lightbox fancybox.iframe date">

                                <?php endif; ?>

                                		<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F j, Y' ); ?></time>

                                    </a>

                                <h3>    

                                <?php if( $internal_extrenal_link ) : ?>

                                    <a href="<?php echo $internal_extrenal_link; ?>" rel="bookmark">

                                <?php elseif( $video_link ) : ?>

                                    <a href="<?php echo $video_link; ?>" class="lightbox fancybox.iframe" rel="bookmark">

                                <?php endif; ?>    

                                		<?php the_title(); ?>

                                	</a>

                                </h3>    

                                <?php //theme_the_excerpt(); ?>

                            </article>

                        <?php endwhile; ?>

                    <?php wp_reset_postdata(); endif; ?>

                    <?php $latest_qry = new WP_Query( array(

                             'post_type'      => 'post',

                             'posts_per_page' => 1,

                             'orderby'        => 'post_date',

                             'order'          => 'DESC',

							 'post_status'	  => 'publish',	

                             )); ?>

                        <?php while( $latest_qry->have_posts()) : $latest_qry->the_post(); ?>

                            <article class="block">

                                <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>

                                    <a href="<?php the_permalink(); ?>" class="image">

                                        <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_436x241' )); ?>

                                    </a>

                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" class="date"><time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F j, Y' ); ?></time></a>

                                <?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

                                <?php //theme_the_excerpt(); ?>

                            </article>

                        <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                    <?php dynamic_sidebar( 'twitter-sidebar' ); ?>

                </div>

            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>