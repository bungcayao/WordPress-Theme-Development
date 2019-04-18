<?php if ( $content = get_sub_field( 'content' )) : ?>
    <div class="holder text-center">
        <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>
    </div>
<?php endif; ?>