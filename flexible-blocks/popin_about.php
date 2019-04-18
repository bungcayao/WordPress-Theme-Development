<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
if ( $title || $content) : ?>
    <section class="holder text-center">
        <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>
        <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
    </section>
<?php endif; ?>