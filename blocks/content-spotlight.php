

<?php
$resources_query = new WP_Query( 
  array(
    'post_type'      => 'resources',      
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'desc',
    'paged'          => $paged 
  )
);
if ( 
  $resources_query->have_posts()) :
?>
  <?php while ( 
    $resources_query->have_posts()) : $resources_query->the_post();
  ?>
  
  <?php 
    $style = get_field( 'style' ); 
    $internal_extrenal_link = get_field( 'internalexternal_link' );
    $video_link = get_field( 'video_link' );
  ?>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 spotlight center <?php echo $style; ?>item <?php echo post_terms( 'slug', 'resources-taxonomy' ); ?>">
    <div class="block">
      <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>

        <?php if( $internal_extrenal_link ) : ?>
          <a class="image" href="<?php echo $internal_extrenal_link; ?>">
            <?php if ( $style == 'large' ) $img_size = 'thumbnail_382x240'; else $img_size = 'thumbnail_278x170'; ?>
            <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, $img_size )); ?>
          </a>

        <?php elseif( $video_link ) : ?>
          <a href="<?php echo $video_link; ?>" class="lightbox fancybox.iframe image">
            <?php if ( $style == 'large' ) $img_size = 'thumbnail_382x240'; else $img_size = 'thumbnail_278x170'; ?>
            <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, $img_size )); ?>
          </a>

        <?php endif; ?>

      <?php endif; ?>
        <div class="text-box">
          <p class="semidark-grey t-up f-semibold m-0 py-10">&nbsp;<?php the_date(); ?>&nbsp;</p>
          <span style="display:block; height:10px; width:100%;">&nbsp;</span>
          <a class="blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <span style="display:block; height:10px; width:100%;">&nbsp;</span>
          <?php the_excerpt(); ?>
        </div>
    </div>
  </div>

<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>

<?php
$news_query = new WP_Query( 
  array(
    'post_type'      => 'news',      
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'desc',
    'paged'          => $paged 
  )
);
if ( 
  $news_query->have_posts()) :
?>
  <?php while ( 
    $news_query->have_posts()) : $news_query->the_post();
  ?>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 spotlight center <?php echo $style; ?>item <?php echo post_terms( 'slug', 'news-taxonomy' ); ?>">
    <div class="block">
      <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
        <a class="image" href="/news-coverge-and-press-releases-and-more/?popup<?php the_ID(); ?>">
          <?php if ( $style == 'large' ) $img_size = 'thumbnail_382x240'; else $img_size = 'thumbnail_278x170'; ?>
          <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, $img_size )); ?>
        </a>
      <?php endif; ?>
      <div class="text-box">
        <p class="semidark-grey t-up f-semibold m-0 py-10">&nbsp;<?php the_date(); ?>&nbsp;</p>
        <span style="display:block; height:10px; width:100%;">&nbsp;</span>
        <a class="blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <span style="display:block; height:10px; width:100%;">&nbsp;</span>
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>

<?php
$blog_query = new WP_Query( 
  array(
    'post_type'      => 'post',      
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'desc',
    'paged'          => $paged 
  )
);
if ( 
  $blog_query->have_posts()) :
?>

<!-- BLOG -->
<?php while ( $blog_query->have_posts()) : $blog_query->the_post(); ?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 spotlight center">
  <div class="block">
    <?php if ( $thumb_id = get_post_thumbnail_id()) : ?>
      <a class="image" href="/news-coverge-and-press-releases-and-more/?popup<?php the_ID(); ?>">
        <?php if ( $style == 'large' ) $img_size = 'thumbnail_382x240'; else $img_size = 'thumbnail_278x170'; ?>
        <?php echo preg_replace('#(width|height)=\"\d*\"\s#', "", wp_get_attachment_image( $thumb_id, $img_size )); ?>
      </a>
    <?php endif; ?>
    <div class="text-box">
      <p class="semidark-grey t-up f-semibold m-0 py-10">&nbsp;<?php the_date(); ?>&nbsp;</p>
      <span style="display:block; height:10px; width:100%;">&nbsp;</span>
      <a class="blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <span style="display:block; height:10px; width:100%;">&nbsp;</span>
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>

