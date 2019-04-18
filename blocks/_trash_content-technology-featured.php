<?php
	/*
	 *
	 * Function Reference/the time
	 *
	 * @link https://codex.wordpress.org/Function_Reference/the_time
	 * the_time('F j');
	 *
	 * Get Featured Image URL
	 * @link https://css-tricks.com/snippets/wordpress/get-featured-image-url/
	 *
	 * To Add Support:
	 * add_theme_support('post-thumbnails');
	 *   - added in /inc/thumbnails.php
	 *   - also custom sizes are created on this php file.
	 *
	 * To Output an <img>:
	 * the_post_thumbnail();
	 *
	 * To Output only the URL:
	 * $thumb_id = get_post_thumbnail_id();
	 * $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-technology', true);
	 * $thumb_url = $thumb_url_array[0];
	 *
	 */
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail_362x225', true);
	$thumb_placeholder = get_template_directory_uri() . '/images/favicon/apple-icon-180x180.png';
	$thumb_url = $thumb_url_array[0];
	//console_log('$thumb_url: ', $thumb_url);
	
	// Get Categories from `Technology Blog Taxonomy`
	$get_categories = get_the_terms($post->ID, 'technology-blog-taxonomy');
	// console_log('$post->ID: ', $post->ID);
	
	if ($get_categories == false) {
		// If we have NO categories,
		// then setup the following variables to be:
		$category_name = null;
		$get_categories_slug = false;
		$is_category_featured = false;
		$is_category_empty = true;
	} else {
		// Else, we have categories
		// then we setup the following variables to be:
		$category_name = $get_categories[0]->name;
		$get_categories_slug = $get_categories[0]->slug;
		$is_category_featured = ($get_categories_slug == 'featured');
		$is_category_empty = false;
	}
	// console_log('$get_categories: ', $get_categories);
	// console_log('$is_category_featured: ', $is_category_featured);
	
	if ($is_category_featured && !$is_category_empty) : ?>
    <!-- FEATURED BLOG SECTION -->
    <div class="row container-content center-xs middle-md top-xs py-30">
      <div class="col-xs-12 col-sm-6 start-md center-xs middle-xs p-relative">
        <!-- Post Image -->
        <div class="box content-post-image mb-20">
					<?php if ($thumb_id = get_post_thumbnail_id()) : ?>

            <a href="<?php the_permalink(); ?>" class="blog-image"
               style="background-image:url(<?php echo $thumb_url; ?>)">
              <!-- Featured Post Image -->
            </a>
					<?php else : ?>
            <a href="<?php the_permalink(); ?>" class="blog-image-placeholder"
               style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png)">
              <!-- NO Featured Post Image -->
            </a>
					<?php endif; ?>

        </div>
      </div>
      <div class="col-xs-12 col-sm-6 center-xs start-md">
        <a href="<?php the_permalink(); ?>"><h5 class="bold my-5"><?php echo the_title() ?></h5></a>
        <p><?php echo get_the_excerpt(); ?></p>
        <!-- Post Author Signature/Timestamp -->
        <div class="box content-contributor row center-xs start-md mt-10">
          <!-- Author Avatar -->
          <img
            src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>"
            alt="<?php echo get_the_author_meta('display_name'); ?>"
            class="blog-avatar">
          <!-- Author Name && Category Name && Time Posted -->
          <div class="mx-10 start-xs">
            <p class="my-5 c-teal"><?php echo get_the_author_meta('display_name'); ?>
              | <?php echo $category_name; ?></p>
              <time class="c-grey">
								<?php the_time('F j'); ?>
              </time>
          </div>

        </div>
      </div>
    </div>
	
	<?php endif; ?>