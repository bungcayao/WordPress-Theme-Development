<?php

/**
 * Module part for displaying updated feeds (Twitter, News, Resources, Webinars, etc).
 * Advanced Custom Fields will be implemented for Users to fill these modules with content
 *
 * @link    https://www.advancedcustomfields.com/resources/
 * @link    https://bulma.io/documentation/layout/section/
 *
 * @package popin
 */
?>
<?php
$sectionUpdateFeed = get_row('sectionUpdateFeed');

  // Header Options
$fontFamily = $sectionUpdateFeed['fontFamily'];
$fontColor = $sectionUpdateFeed['fontColor'];
$title = $sectionUpdateFeed['title'];
$subtitle = $sectionUpdateFeed['subtitle'];

  // Feed Options
$countTwitter = $sectionUpdateFeed['countTwitter'];
$countBlog = $sectionUpdateFeed['countBlog'];
$countWebinar = $sectionUpdateFeed['countWebinar'];


  // Background Image
$bgImg = $sectionUpdateFeed['bgImg'];
$bgColor = $sectionUpdateFeed['bgColor'];
?>
<!-- Updated Feeds -->
<section data-module="section-update-feed" class="section section-update-feed is-position-relative has-bg-image"
  style="background-image:<?php echo $bgImg ?>;">
  <div class="container content-container is-position-relative">

    <!-- Title + SubTitle Block -->
    <div class="has-text-centered is-paddingless-bottom content">
      <h1 class="title <?php echo $fontFamily ?> <?php echo $fontColor ?>"><?php echo $title ?></h1>
      <h3 class="subtitle <?php echo $fontColor ?> has-text-weight-light"><?php echo $subtitle ?></h3>
    </div>

    <!-- Columns -->
    <div class="columns section">

      <!-- News column -->
      <div class="column is-4 content">
        <h4 class="has-text-centered">News</h4>
         <!-- Twitter feed moved to blocks/content-update-feed-twitter.php-->
         <?php
          $iconNews = popin_images_dir() . '/popin-icon-set/icn-discuss.svg';
          $number_posts = null;
          if (!$countTwitter) {
            $number_posts = 4;
          } else {
            $number_posts = $countTwitter;
          }
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => $number_posts,
            'paged' => $paged
          );
          $newsFeed = new WP_Query($args);

          if ($newsFeed->have_posts()) :
            while ($newsFeed->have_posts()) :
            $newsFeed->the_post();
          $newsTitle = get_the_title();
          $newslink = get_field('read_more_link');
        ?>

        <article data-animate="fadeInUp" data-news-link="<?php the_ID() ?>" data-whats-new-card-title="<?php echo $newsTitle ?>" class="level animated is-clickable news-link-modal-open whats-new-card">
          <figure class="image is-32x32 is-marginless-bottom has-bg-image is-bg-contain"
                  style="background-image:url(<?php echo $iconNews ?>);">
          </figure>
          <div class="column level-item">
            <p><?php echo $newsTitle ?></p> 
          </div>  
        </article>
        
        <!-- Modal Card -->
        <div class="modal news-feed">
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
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              </div>
            </section>
            <footer class="modal-card-foot">
              <?php if ( $read_more_link = get_field('read_more_link')) : ?>
                <a href="<?php echo $read_more_link; ?>" target="_blank" rel="noopener noreferrer" data-press-item-title="<?php echo $newsTitle ?>" class="button is-success press-item-outbound-cta"><?php _e( 'Read More', 'popin' ); ?></a>
              <?php endif; ?>   
            </footer>
          </div>
          <button class="modal-close" aria-label="close"></button>
        </div>

        <?php
            endwhile;
          endif;
        ?>

        
      </div>

      <!-- Blog column -->
      <div class="column is-4 content">
        <h4 class="has-text-centered">Blog</h4>
        <?php
        $args = array('numberposts' => $countBlog);
        $recent_posts = wp_get_recent_posts($args);
        $iconBlog = popin_images_dir() . '/popin-icon-set/icn-marketing.svg';
        foreach ($recent_posts as $recent) :
        ?>
          <article data-animate="fadeInUp" class="level animated is-clickable whats-new-card" data-whats-new-card-title="<?php echo $recent['post_title'] ?>" onclick="window.open('<?php echo get_permalink($recent['ID']) ?>')">
            <figure class="image is-32x32 is-marginless-bottom has-bg-image is-bg-contain"
                    style="background-image:url(<?php echo $iconBlog ?>);">
            </figure>
            <div class="column level-item">
              <p><?php echo $recent['post_title'] ?></p> 
            </div>  
          </article>
        <?php 
        endforeach;
        ?>  
      </div> 

      <!-- Webinars column -->
      <div class="column is-4 content">
        <h4 class="has-text-centered">Webinars</h4>
        <?php
          $iconWebinar = popin_images_dir() . '/popin-icon-set/icn-activity.svg';
          $number_posts = null;
          if (!$countTwitter) {
            $number_posts = 4;
          } else {
            $number_posts = $countTwitter;
          }
          $args = array(
            'post_type' => 'resources',
            'posts_per_page' => $number_posts,
            'paged' => $paged,
            'tax_query' => array(
              array(
                'taxonomy' => 'resources-taxonomy',
                'field' => 'slug',
                'terms' => 'webinars'
              )
            )
          );
          $resourcesfeed = new WP_Query($args);
          if ($resourcesfeed->have_posts()) :
            while ($resourcesfeed->have_posts()) :
            $resourcesfeed->the_post();
          $resourceTitle = get_the_title();
          $resourcelink = get_field('video_link');
        ?>

        <article data-animate="fadeInUp" data-resource-link="<?php echo $resourcelink ?>" data-whats-new-card-title="<?php echo $resourceTitle ?>" class="level animated is-clickable resource-link-modal-open whats-new-card">
          <figure class="image is-32x32 is-marginless-bottom has-bg-image is-bg-contain"
                  style="background-image:url(<?php echo $iconWebinar ?>);">
          </figure>
          <div class="column level-item">
            <p><?php echo $resourceTitle ?></p> 
          </div>  
        </article>
        
        <!-- Modal -->
        <?php if ($resourcelink) : ?>  
          <div class="modal modal-video resource-feed">
            <div class="modal-background"></div>
            <div class="modal-content">
              <div class="video-container is-16by9">
                <iframe class="resource-link-video" width="640" height="360" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
          </div>
        <?php endif; ?>

        <?php
            endwhile;
          endif;
        ?>
      </div> 

    </div>

  </div>

  <!-- BG Overlay -->
  <div class="bg-overlay-container is-overlay <?php echo $bgColor ?>"></div>
</section>