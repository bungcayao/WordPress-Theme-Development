



<?php 
  $getCategory = get_the_category( $post->ID );
  $category = $getCategory[0]->slug;
?>



<div class="column card is-one-quarter item <?php echo $category; ?>">
  
  <!-- Content -->
  <div data-news-link="<?php the_ID() ?>"  
       class="card-content modal-open is-clickable"
       onclick="location.href='<?php the_permalink(); ?>'">
    
    <!-- Category -->
    <?php if ($category) : ?>
      <!-- TODO: Fix $terms. Strip out the <a href> -->
      <p class="category has-text-weight-bold has-text-primary is-uppercase is-size-7">
        <?php echo $category; ?>
      </p>
    <?php endif; ?>

    <!-- Title -->
    <h2 class="has-text-grey"><?php the_title(); ?></h2>

    <!-- Timestamp -->
    <time class="has-text-grey-light is-size-7" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>

  </div>
  
  <div data-news-link="<?php the_ID() ?>" class="card-image modal-open is-clickable ">
    <!-- Logo / Thumbnail -->
    <?php if ($thumb_id = get_post_thumbnail_id()) : ?>
      <figure class="image is-128x128 is-centered level">
        <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image($thumb_id, 'thumbnail_211x69')); ?>
      </figure>
    <?php endif; ?>
  </div>
  
</div>
