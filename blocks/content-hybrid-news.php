<div class="column card is-one-quarter item <?php echo post_terms('slug', 'news-taxonomy'); ?>" data-press-item-title="<?php the_title(); ?>">
  
  <!-- Content -->
  <div data-news-link="<?php the_ID() ?>"  class="card-content modal-open is-clickable ">
    
    <!-- Category -->
    <?php if($terms = post_terms('name', 'news-taxonomy')) { ?>
      <!-- TODO: Fix $terms. Strip out the <a href> -->
      <p class="category has-text-weight-bold has-text-primary is-uppercase is-size-7">
        <?php echo $terms; ?>
      </p>
    <?php } ?>

    <!-- Title -->
    <h2 class="has-text-grey press-item-title"><?php the_title(); ?></h2>

    <!-- Timestamp -->
    <time class="has-text-grey-light is-size-7" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F j, Y' ); ?></time>

  </div>
  
  <div data-news-link="<?php the_ID() ?>" class="card-image modal-open is-clickable ">
    <!-- Logo / Thumbnail -->
    <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
      <figure class="image is-128x128 is-centered level">
        <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_211x69' )); ?>
      </figure>
    <?php endif; ?>
  </div>
  
  <!-- Modal Card -->
  <div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <!-- Title -> Terms -->
        <?php if($terms = post_terms('name', 'news-taxonomy')) : ?>
        <p class="modal-card-title is-capitalized">
          <?php echo wp_strip_all_tags($terms); ?>
        </p>
        <?php endif ?>
        <!-- X -> Close Button -->
      </header>
      <section class="modal-card-body">
        <div class="content">
        <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
            <div class="logo-icon">
                <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, 'thumbnail_211x69' )); ?>
            </div>
        <?php endif; ?>
        <h3 class='press-item-title'><?php the_title(); ?></h3>
        <?php the_content(); ?>
        </div>
      </section>
      <footer class="modal-card-foot">
        <?php if ( $read_more_link = get_field('read_more_link')) : ?>
          <a href="<?php echo $read_more_link; ?>" target="_blank" rel="noopener noreferrer" class="button is-success"><?php _e( 'Read More', 'popin' ); ?></a>
        <?php endif; ?>   
      </footer>
    </div>
    <button class="modal-close" aria-label="close"></button>
  </div>
  
</div>
