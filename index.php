<?php
	/*
  Template Name: Blog (Hybrid)
  */
	$number_posts = get_field('number_posts');
	if(!$number_posts) $number_posts = 12; //= 12;
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strcasecmp('XMLHttpRequest', $_SERVER['HTTP_X_REQUESTED_WITH']) === 0) {
		if(get_query_var('paged')) $paged = get_query_var('paged'); elseif(get_query_var('page')) $paged = get_query_var('page');
		else $paged = 1;
		$news_qry = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => $number_posts,
			'paged' => $paged
		));
		if(have_posts()) :
			while(have_posts()) : the_post();
				get_template_part('blocks/content', get_post_type());
			endwhile;
			$GLOBALS['wp_query']->max_num_pages = $news_qry->max_num_pages;
			next_posts_link(__('MORE ARTICLES', 'popin'));
		endif;
		wp_reset_postdata();
	} else {
		
        get_header();
        
	// open the WordPress loop
    if (have_posts()) : 
        
        $blog_page = get_option( 'page_for_posts' );
        
        if ( $blog_page != 0 ) : 
            
            $page_info = get_post( $blog_page );
            $bgImgUrl = 'none';
            ?>
            <!-- Header -->
            <section data-module="section-header"
                    class="section section-header-main"
                    style="background-image:<?php echo $bgImgUrl ?>;">
                <div class="section container content-container has-text-centered content">
                    <figure 
                        class="image is-96x96 is-centered button is-rounded is-borderless has-bg-image is-bg-contain"
                        style="background-image:url(<?php echo get_template_directory_uri() . '/dist/images/generic-placeholders/popin-chat-only-logo.svg' ?>)" 
                        tile="POPin Blog">
                    </figure>
                    <h1 class="title is-fontfamily-share has-text-white"><?php echo $page_info->post_title; ?></h1>
                    <h3 class="subtitle has-text-white has-text-weight-light"><?php if ( $content = $page_info->post_content ) echo apply_filters( 'the_content', $content ); ?></h3>
                </div>
                <!-- BG Overlay -->
                <div class="bg-overlay-container is-overlay has-background-hero-sloped-reverse"></div>
            </section>
			
        <?php endif; ?>
  
        <!-- Module -> Section-Resources -->
        <?php require get_template_directory() . '/modules/section-hybrid-blog.php' ?>
    
    <?php endif; ?>    
    
    <?php get_footer(); ?>

<?php } ?>