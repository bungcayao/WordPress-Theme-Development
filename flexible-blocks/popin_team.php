<?php
$title = get_sub_field( 'title' );
$desc  = get_sub_field( 'desc' );
if ( $title || $desc || have_rows( 'team_members' )) : ?>
    <section class="holder text-center">
        <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
        <?php if ( $desc ) echo apply_filters( 'the_content', $desc ); ?>
        <?php if ( have_rows( 'team_members' )) : ?>
            <ul class="team-list">
            	<?php while ( have_rows( 'team_members' )) : the_row(); 
				if( $image = get_sub_field( 'image' )) : ?>
                    <li>
                        <div class="box">
                        	<?php retina_image( array( 
								'image_id'   => $image, 
								'large_size' => 'thumbnail_189x189', 
								'small_size' => 'thumbnail_323x323' 
							) ); ?>
                            <?php
							$name = get_sub_field( 'name' );
							$designation = get_sub_field( 'designation' );
							if ( $name || $designation ) : ?>
                                <div class="text-box">
                                    <div class="hold">
                                    	<?php if ( $name ) echo '<h3>'. $name .'</h3>'; ?>
                                        <?php if ( $designation ) echo '<p>'. $designation .'</p>'; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; endwhile; ?>
            </ul>
        <?php endif; ?>
    </section>
<?php endif; ?>