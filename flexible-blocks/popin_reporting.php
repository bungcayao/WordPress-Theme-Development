<?php

$title     = get_sub_field( 'title' );

$sub_title = get_sub_field( 'sub_title' );

if ( $title || $sub_title || have_rows( 'schedule' ) || have_rows( 'benefits' ) || have_rows( 'reporting_list' )) : ?>

    <section class="holder">

    	<?php if ( $title || $sub_title || have_rows( 'schedule' ) || have_rows( 'benefits' )) : ?>

            <div class="frame-section">

                <div class="text-holder">

                    <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>

                    <?php if ( $sub_title ) echo '<h3>'. $sub_title .'</h3>'; ?>

                    <?php if ( have_rows( 'benefits' )) : ?>

                        <ul>

                            <?php while ( have_rows( 'benefits' )) : the_row(); 

                                if ( $title = get_sub_field( 'title' )) : ?>

                                    <li><?php echo $title; ?></li>

                            <?php endif; endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>

                <?php if ( have_rows( 'schedule' )) : ?>

                    <div class="schedule">

                        <?php while ( have_rows( 'schedule' )) : the_row(); 

                        if ( $image = get_sub_field( 'image' )) : ?>

                            <div class="col">

                                <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $image, 'full' )); ?>

                            </div>

                        <?php endif; endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>

        <?php endif; ?>

        <?php if ( have_rows( 'reporting_list' )) : ?>

            <ul class="list">

            	<?php while ( have_rows( 'reporting_list' )) : the_row(); 

					$title = get_sub_field( 'title' );

					$desc  = get_sub_field( 'desc' ); 

					if ( $title || $desc ) : ?>

						<li>

                            <?php if ( $title ) echo '<h3>'. $title .'</h3>'; ?>

                            <?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>

                        </li>

				<?php endif; endwhile; ?>

            </ul>

        <?php endif; ?>

    </section>

<?php endif; ?>







