<?php
	/**
	 * Module part for displaying Resource grid
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>
<section data-module="section-hybrid-resources" class="section section-blog-technology holder filters-block container is-paddingless-ltr">

  <!-- Category Tabs -->
  <?php $terms = get_terms('blog-technology-taxonomy'); ?>
  <?php if($terms) : ?>
  
    <div class="tabs filters">
      <ul class="filters-list">
        <!-- `Categories` -->
        <li class="is-active is-uppercase"><a data-filter="*" href="#"><?php _e('All', 'popin'); ?></a></li>
        <!-- Categories Label -->
        <?php foreach($terms as $term) : $query_key = 'category'; $query_value = $term->slug;
          if ($term->slug != 'featured') : ?>
         <li class="is-uppercase">
          <a data-filter="<?php echo $term->slug; ?>" href="#">
            <?php echo $term->name; ?>
          </a>
        </li>
          <?php endif; ?>        
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>


<!-- FEATURED & CATEGORY SECTION -->
<?php
  if (get_query_var('paged'))
    $paged = get_query_var('paged');
  elseif (get_query_var('page'))
    $paged = get_query_var('page');
  else $paged = 1;
  $terms = get_terms('blog-technology-taxonomy');
  $blogTechnologyQuery = new WP_Query(array(
    'post_type' => 'technology',
    'posts_per_page' => $number_posts,
    'paged' => $paged
  ));
  
  if ($blogTechnologyQuery->have_posts()) : ?>
<!--
  WHILE we`have posts`,
  THEN run `the post` through `blocks/content-get_post_type()` to be built out and styled.
-->
<!--
  HACK ALERT:
  I'm still having trouble grabbing or querying the correct `post` from a query search based on category name.
  Instead, I have a hack where I'm grabbing two template parts (one for featured, one for regular posts).
  In each template part, it has different block styling and has working "If statements" that call up the right
  posts, based on category posts.
  
  TODO (Josh)
  Make the Query call here on this file and have the block elements on this page.
-->

      <!-- Feature Content -->
      <div class="section container" style="background-color:#cce6eb;">
        <div class="coluns">
          <!-- FEATURED -->
          <?php while ($blogTechnologyQuery->have_posts()) : $blogTechnologyQuery->the_post(); ?>
            <?php get_template_part('blocks/content', 'hybrid-blog-technology-featured') ?>
          <?php endwhile; ?>
        </div>
      </div>

      <!-- Card Contents -->

      <div class="filters-section load-more-holder">
        <div class="results-list columns is-multiline">
          
          <!-- Block Boy, WAUUURRR!!! -->
          <?php while($blogTechnologyQuery->have_posts()) : $blogTechnologyQuery->the_post(); ?>
            <?php get_template_part('blocks/content', 'hybrid-blog-technology'); ?>
          <?php endwhile; ?>
          
        </div>
        <?php $GLOBALS['wp_query']->max_num_pages = $blogTechnologyQuery->max_num_pages; ?>
        <?php if($next = get_next_posts_link(__('More Articles', 'popin'))) : ?>
        <div class="section has-text-centered">
          <?php echo $next; ?>
        </div>
        <?php endif; ?>
      </div>
    <?php
      endif;
      wp_reset_postdata();
    ?>
  </div>
</section>