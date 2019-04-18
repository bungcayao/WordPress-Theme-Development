<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<div class="holder text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo9.png" alt="image description" class="logo-icon">
            <h2 class="heading"><span><?php printf( __( 'Search Results for: %s', 'popin' ), '&lsquo;' . get_search_query() . '&rsquo;'); ?></span></h2>
            <div class="search"><?php get_search_form(); ?></div>
        </div>
        <div class="twocolumns">
            <div id="content">
                <ul class="blog-posts">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'blocks/content', get_post_type() ); ?>
                    <?php endwhile; ?>
                </ul>
                <?php get_template_part( 'blocks/pager' ); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    <?php else : ?>
		<?php get_template_part( 'blocks/not_found' ); ?>
    <?php endif; ?>
<?php get_footer(); ?>