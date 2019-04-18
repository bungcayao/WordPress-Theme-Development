<?php
	/*
  Template Name: News & Press (Hybrid)
  */
	$number_posts = get_field('number_posts');
	if(!$number_posts) $number_posts = 12;
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strcasecmp('XMLHttpRequest', $_SERVER['HTTP_X_REQUESTED_WITH']) === 0) {
		if(get_query_var('paged')) $paged = get_query_var('paged'); elseif(get_query_var('page')) $paged = get_query_var('page');
		else $paged = 1;
		$news_qry = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => $number_posts,
			'paged' => $paged
		));
		if($news_qry->have_posts()) :
			while($news_qry->have_posts()) : $news_qry->the_post();
				get_template_part('blocks/content', get_post_type());
			endwhile;
			$GLOBALS['wp_query']->max_num_pages = $news_qry->max_num_pages;
			next_posts_link(__('MORE ARTICLES', 'popin'));
		endif;
		wp_reset_postdata();
	} else {
		
		get_header(); ?>
	
<?php
	// open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();
		// are there any rows within within our flexible content?
		if( have_rows('moduleContent') ):
			// loop through all the rows of flexible content
			while ( have_rows('moduleContent') ) : the_row();
				// HEADER SECTION (MAIN || SUB)
				if (get_row_layout() == 'sectionHeader')
					get_template_part('modules/section', 'header');
			endwhile; // close the loop of flexible content
		endif; // close flexible content conditional
	endwhile; endif; // close the WordPress loop ?		
?>
  
  <!-- Module -> Section-Resources -->
  <?php require get_template_directory() . '/modules/section-hybrid-news.php' ?>
	
	<!-- TODO: Recreate these Flexible Footer Sectiosn -->
  <?php //if(have_rows('flexible_content')) :
    //while(have_rows('flexible_content')) : the_row();
      //get_template_part('flexible-blocks/' . get_row_layout());
    //endwhile;
	//endif;
	?>
	
  <?php get_footer(); ?>
<?php } ?>