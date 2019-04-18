<?php
	/**
	 * Template Name: Hybrid Blog -> Single
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
<!-- Featured Image -->
<?php 
  $hero_feature_image = get_template_directory_uri() . '/dist/images/generic-placeholders/audience-chairs-crowd-274.jpg'; 
  $textAlignment = get_field('textAlignment');  
?>
<!-- Hero Section -->
<section data-module="section-header"
         class="section section-header-sub"
         style="background-image:url(<?php echo $hero_feature_image ?>);">
  <div class="section container content-container has-text-centered content">
  <figure class="image is-96x96 is-centered button is-rounded is-borderless has-bg-image is-bg-contain" 
          style="background-image:url(<?php echo get_template_directory_uri().'/dist/images/generic-placeholders/popin-chat-only-logo.svg' ?>)" 
          tile="POPin Blog"> </figure>
    <h1 class="title is-fontfamily-share has-text-white">POPin Blog</h1>
  </div>
  <!-- BG Overlay -->
  <div class="bg-overlay-container is-overlay has-background-hero-sloped"></div>
</section>

<!-- Main Section -->
<section class="section container">
  <div class="columns">
    <div class="column"></div>
    <div class="column is-8 content">    
        <h1 class="<?php echo $textAlignment ?>"><?php the_title(); ?></h1>
        <!-- Post Content -->
        <?php the_content(); ?>
        <!-- Post Content -->
        <p><?php wp_link_pages(); ?></p>
    </div>
    <div class="column"></div>
  </div>
</section>

<!--
  TODO:
  template-technology-blog -> try to implement the navbar with Logo + Category Links
-->
 
  
    
	<?php endwhile; ?>

<?php get_footer(); ?>