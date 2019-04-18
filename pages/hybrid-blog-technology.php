<?php
	/*
  Template Name: Blog Technology (Hybrid)
  */
	$number_posts = get_field('number_posts');
	if(!$number_posts) $number_posts = 12;
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strcasecmp('XMLHttpRequest', $_SERVER['HTTP_X_REQUESTED_WITH']) === 0) {
		if(get_query_var('paged')) $paged = get_query_var('paged'); elseif(get_query_var('page')) $paged = get_query_var('page');
		else $paged = 1;
		$blogTechnologyQuery = new WP_Query(array(
			'post_type' => 'blog-technology',
			'page_id' => get_queried_object_id(),
			'posts_per_page' => $number_posts,
			'paged' => $paged
		));
		if($blogTechnologyQuery->have_posts()) :
			while($blogTechnologyQuery->have_posts()) : $blogTechnologyQuery->the_post();
				get_template_part('blocks/content', 'hybrid-blog-technology');
			endwhile;
			$GLOBALS['wp_query']->max_num_pages = $blogTechnologyQuery->max_num_pages;
			next_posts_link(__('MORE ARTICLES', 'popin'));
		endif;
		wp_reset_postdata();
	} else {
		
		get_header(); ?>
	
<?php 
	if (get_post_thumbnail_id()) :
		$hero_id = get_post_thumbnail_id();
		$hero_url_array = wp_get_attachment_image_src($hero_id, 'thumbnail_1100x657', true);
		$hero_feature_image = $hero_url_array[0];
	else :
		$hero_feature_image = get_template_directory_uri() . '/images/popin-five-oh/hero-blog-technology.jpg';
	endif;
?>
<section data-module="section-header-blog-technology" class="padding-navbar hero-feature-image bg-cover bg-center-center row middle-xs" style="background-image:url(<?php echo $hero_feature_image ?>);">
	<div class="row container-content middle-xs center-xs">
		<div class="col-xs-12 col-md-6 center-xs middle-xs my-30">
			<h4 class="reg c-white"><?php the_title(); ?></h4>
			<h6>
				<div class="divider divider-teal"></div>
			</h6>
			<p class="c-white"><?php the_content(); ?></p>
		</div>
	</div>
</section>

  <!-- Module -> Section-Resources -->
  <?php require get_template_directory() . '/modules/section-hybrid-blog-technology.php' ?>
	
  <?php get_footer(); ?>
<?php } ?>