<?php

$title       = get_sub_field( 'title', 'option' );

$content     = get_sub_field( 'content', 'option' );

$button_text = get_sub_field( 'button_text', 'option' );

$button_link = get_sub_field( 'button_link', 'option' );

$bg_image    = get_sub_field( 'bg_image', 'option' );

if ( $title || $content || ( $button_text && $button_link )) : ?>

	<?php if ( $bg_image ) echo '<section class="info-section" style="background: url('. $bg_image .') no-repeat;background-size: cover;">'; ?>

		<?php if ( !is_page_template( 'pages/template-success-stories.php' )) echo '<section class="holder text-center">'; ?>

            <?php if ( $title ) echo '<h2>'. $title .'</h2>'; ?>

            <?php if ( $content ) echo apply_filters( 'the_content', $content ); ?>

            <?php if ( $button_text && $button_link ) : ?>

                <a href="<?php echo esc_url( $button_link ); ?>" class="btn-success"><?php echo $button_text; ?></a>

            <?php endif; ?>

        <?php if ( !is_page_template( 'pages/template-success-stories.php' )) echo '</section>'; ?>

    <?php if ( $bg_image ) echo '</section>'; ?>

<?php endif; ?>