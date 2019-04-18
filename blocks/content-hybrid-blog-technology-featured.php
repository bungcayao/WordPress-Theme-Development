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
	$get_categories = get_the_terms($post->ID, 'blog-technology-taxonomy');
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
  
<div class="column card is-one-quarter item <?php echo post_terms('slug', 'blog-technology-taxonomy'); ?>">
  <!-- TODO: Make entire Card CLICKABLE rather then just thumb, title, and description -->
  <div class="card-image has-background-white-ter">

      <!-- Post Image -->
      <?php if($thumb_id = get_post_thumbnail_id()) : ?>

        <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
          <figure class="image is-4by3" style="background-image:url(<?php echo $thumb_url ?>);"> </figure>
        </a>

        <?php else : ?>
          <a href="<?php the_permalink(); ?>" class="blog-image-placeholder"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-icon-72x72.png)">
            <!-- NO Featured Post Image -->
          </a>
				<?php endif; ?>

  </div>

      <!-- Post Excerpt -->
  <div class="card-content">
    <!-- Post Excerpt -->
    <div class="container">
      <h6>
        <a class="has-text-grey has-text-weight-semi-bold" href="<?php echo get_permalink(); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a>
      </h6>
      <p><?php echo get_the_excerpt(); ?></p>
    </div>
     <!-- Post Author Signature/Timestamp -->
    <div class="container">
      <figure class="image is-64x64 button is-rounded">
        <img
          src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>"
          alt="<?php echo get_the_author_meta('display_name'); ?>">
      </figure>  
    </div>
    <!-- Author Name && Category Name && Time Posted -->
    <!--
      TODO (Josh)
      Link and Filter by Author Name, Category Name, and Time
    -->
    <div class="container">
      <p>
      <?php echo get_the_author_meta('display_name'); ?>
        <?php if ($terms = post_terms('name', 'blog-technology-taxonomy', '')) { ?>
        | <?php echo wp_strip_all_tags($terms); ?>
      <?php } ?>
      </p>
      <time class="has-text-grey">
        <?php the_time('F j'); ?>
      </time>
    </div>
  </div>
  
</div>
<?php endif; ?>