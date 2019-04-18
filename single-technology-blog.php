<?php
	/**
	 * Template Name: Technology Blog -> Single
	 *
	 * Post Type Templates
	 * https://codex.wordpress.org/Post_Type_Templates
	 *
	 * Custom Post Type Templates
	 * - pages/template-{post_type}.php
	 * - archive-{post_type}.php
	 * - single-{post_type}.php
   *
   * TODO (Josh)
   * Need to figure out how to grab "page_id" of blog landing page
   * Problem -> page can't be parent of posts. Not sure how to grab page_id
   * when outside of that object.
	 *
	 */
	get_header();
	
	while (have_posts()) : the_post();
?>

    <!-- Hero Section -->
    <section class="padding-navbar">

      <!-- Navbar: Technology Blog Logo | Category Links -->
      <div class="row container-content center-xs middle-xs py-20">
        <a class="row middle-xs" href="/technology-blog/">
          <div class="icon mr-10"
               style="background-repeat:no-repeat; background-position:50% 50%; background-size:contain; background-color:transparent; background-image:url(<?php echo get_template_directory_uri(); ?>/images/popin-five-oh/icon-blog-technology.png); height:50px; width:50px;">
          </div>
          <h5 class="m-0 semi-bold c-teal">Technology Blog</h5>
        </a>
	      <?php
					$terms = get_terms('technology-blog-taxonomy');
					if ($terms) { ?>
        <div class="row" style="margin-left:20px; padding-left:10px; border-left:1px solid #eaeaea;">
						<?php foreach ($terms as $term) { ?>
							<?php if ($term->slug != 'featured') : ?>
                <span class="normal txt-uppercase my-0 mx-10">
                  <a class="c-grey" href="/technology-blog/?category=<?php echo $term->slug; ?>">
										<?php echo $term->name; ?>
                  </a>
                </span>
							<?php endif; ?>
						<?php } ?>
        </div>
				<?php } ?>
      </div>
      
      <!-- Featured Image -->
		<?php if ( get_post_thumbnail_id() ) {
			$hero_id = get_post_thumbnail_id();
			$hero_url_array = wp_get_attachment_image_src($hero_id, 'thumbnail_1401x718', true);
			$hero_feature_image = $hero_url_array[0];
		} else {
			$hero_feature_image = get_template_directory_uri() . '/images/popin-five-oh/hero-blog-technology.jpg';
		}
		?>
      <div class="row center-xs bottom-xs hero-feature-image bg-cover bg-center-center" style="background-image:url(<?php echo $hero_feature_image ?>);">
        <!-- Post Author Signature/Timestamp -->
        <div class="box col-xs-12 start-md center-xs py-20" style="background-color:rgba(0,0,0,0.5);">
          <div class="row container-content start-md center-xs">
            <!-- Author Avatar -->
            <div class="box mr-20">
              <img
                src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>"
                alt="<?php echo get_the_author_meta('display_name'); ?>"
                class="blog-avatar">
            </div>
            <!-- Author Name && Category Name && Time Posted -->
            <!--
							TODO (Josh)
							Link and Filter by Author Name, Category Name, and Time
						-->
            <div class="box start-xs bottom-xs">
              <p class="my-5 c-white">
								<?php echo get_the_author_meta('display_name'); ?>
								<?php if ($terms = post_terms('name', 'technology-blog-taxonomy', '')) { ?>
                  | <?php echo wp_strip_all_tags($terms); ?>
								<?php } ?>
              </p>
              <p class="m-0" href="<?php the_permalink(); ?>">
                <time class="c-white">
									<?php the_time('F j'); ?>
                </time>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Content Section -->
    <section class="row container-content mt-30">
      <div class="col-xs-12 start-md center-xs">
        <!-- Post Title -->
        <h5 class="semi-bold">
					<?php the_title(); ?>
        </h5>
        <!-- Post Content -->
				<?php the_content(); ?>

        <!-- Post Content -->
				<p>
					<?php wp_link_pages(); ?>
        </p>
        
      </div>
    </section>
    
	<?php endwhile; ?>

<?php get_footer(); ?>