<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
if ( $title || $content) : ?>
    <section class="gray-section">
        <div class="holder">
        	<?php if ( $title ) : ?>
                <div class="heading-block">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php endif; ?>
            <?php  if ( $content ) : ?>
                <div class="text-freme">
                    <?php echo apply_filters( 'the_content', $content ); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>