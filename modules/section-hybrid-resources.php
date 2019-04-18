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

<section data-module="section-hybrid-resources" class="section section-resources holder filters-block container is-paddingless-ltr">

  <!-- Category Tabs -->
  <?php $terms = get_terms('resources-taxonomy'); ?>
  <?php if($terms) : ?>
  
    <div class="tabs filters">
      <ul class="filters-list">
        <li class="is-active is-uppercase is-uppercase is-size-7 has-text-weight-bold"><a data-filter="*" href="#"><?php _e('All', 'popin'); ?></a></li>
        <?php foreach($terms as $term) : ?>
        <li class="is-uppercase is-uppercase is-size-7 has-text-weight-bold"><a data-filter="<?php echo $term->slug; ?>" href="#"><?php echo $term->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <!-- Category Cards -->
  <?php
    if(get_query_var('paged')) 
      $paged = get_query_var('paged');
    elseif(get_query_var('page')) 
      $paged = get_query_var('page');
    else
      $paged = 1;
      
      $res_qry = new WP_Query(array(
        'post_type' => 'resources',
        'posts_per_page' => $number_posts,
        'paged' => $paged
      ));

      if($res_qry->have_posts()) :
    ?>
      <div class="filters-section load-more-holder">
        <div class="results-list columns is-multiline">
          
          <!-- Block Boy, WAUUURRR!!! -->
          <?php while($res_qry->have_posts()) : $res_qry->the_post(); ?>
            <?php get_template_part('blocks/content', 'hybrid-resources'); ?>
          <?php endwhile; ?>
          
        </div>
        <?php $GLOBALS['wp_query']->max_num_pages = $res_qry->max_num_pages; ?>
        <?php if($next = get_next_posts_link(__('MORE ARTICLES', 'popin'))) : ?>
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