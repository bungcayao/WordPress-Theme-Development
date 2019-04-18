<?php

/**
 * Module part for displaying Blog Grid
 * Advanced Custom Fields will be implemented for Users to fill these modules with content
 *
 * @link https://www.advancedcustomfields.com/resources/
 * @link https://bulma.io/documentation/layout/section/
 *
 * @package popin
 */
?>
<section data-module="section-hybrid-blog" class="section section-hybrid-blog holder filters-block container is-paddingless-ltr">

  <!-- Category Tabs -->
  <?php $terms = get_terms('post_tag');
   if ($terms) : ?>
    <div class="tabs filters">
      <ul class="filters-list">
        <li class="is-active is-uppercase is-uppercase is-size-7 has-text-weight-bold"><a data-filter="*" href="#"><?php _e('All', 'popin'); ?></a></li>
        <li class="is-uppercase is-size-7 has-text-weight-bold"><a data-filter="ceo-corner" href="#"><?php _e('CEO Corner', 'popin'); ?></a></li>
        <?php foreach ($terms as $term) : if ($term->count > 25) : ?>
        <li class="is-uppercase is-uppercase is-size-7 has-text-weight-bold"><a data-filter="<?php echo $term->slug; ?>" href="#"><?php echo $term->name; ?></a></li>
        <?php endif; endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <!-- Category Cards -->
  <?php
    if (get_query_var('paged')) $paged = get_query_var('paged');
    elseif (get_query_var('page')) $paged = get_query_var('page');
    else $paged = 1;
    $wp_qry = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => $number_posts,
      'paged' => $paged
    ));
  ?>
  
  <?php if ($wp_qry->have_posts()) : ?>
    <div class="filters-section load-more-holder">

      <div class="results-list columns is-multiline">
        <!-- Block Boy, WAUUURRR!!! -->
        <?php while ($wp_qry->have_posts()) : $wp_qry->the_post(); ?>
          <?php get_template_part('blocks/content', 'hybrid-blog'); ?>
        <?php endwhile; ?>
      </div>
      <!-- TODO: Add Prevous Button or Pagination -->
      <?php $GLOBALS['wp_query']->max_num_pages = $wp_qry->max_num_pages; ?>
      <?php if ($next = get_next_posts_link(__('MORE ARTICLES', 'popin'))) : ?>
      <div class="section has-text-centered">
        <?php echo $next; ?>
      </div>
      <?php endif; ?>
    </div>
  <?php endif;
  wp_reset_postdata();
  ?>

</section>