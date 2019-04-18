<?php
	
	$style = get_field('style');
  $internal_extrenal_link = get_field('internalexternal_link');
	$video_link = get_field('video_link');

?>
<div class="column card is-one-quarter resource-card <?php echo $style; ?> item <?php echo post_terms('slug', 'resources-taxonomy'); ?>" data-resource-type="<?php echo post_terms('slug', 'resources-taxonomy'); ?>" data-resource-title="<?php the_title(); ?>" >
  <?php if($internal_extrenal_link) : ?>
    <a href="<?php echo $internal_extrenal_link; ?>" target="_blank" rel="noopener noreferrer">
  <?php endif; ?>
      <div class="card-image has-background-white-ter">

        <!-- Image Thumbnail -->
        <?php if($internal_extrenal_link) :
          $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0]; ?>

            <figure class="image is-4by3" style="background-image:url(<?php echo $large_image_url ?>);"> </figure>

          <!-- Video Thumbnail -->
          <?php elseif($video_link) :
             $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0]; ?>

            <a data-video-link="<?php echo $video_link ?>" class="modal-open is-hoverable">
              <figure class="image is-4by3" style="background-image:url(<?php echo $large_image_url ?>);"> </figure>
            </a>

          <?php endif; ?>

      </div>

      <!-- Content -->
      <div class="card-content">
        <?php if($terms = post_terms('name', 'resources-taxonomy')) { ?>
          <p class="category has-text-weight-bold has-text-primary is-uppercase is-size-7">
            <?php echo strip_tags($terms); ?>
          </p>
        <?php } ?>

        <?php if($internal_extrenal_link) : ?>
          <h2 class="has-text-grey"><?php the_title(); ?></h2>

        <?php elseif($video_link) : ?>
          <h2 data-video-link="<?php echo $video_link ?>" class="modal-open is-hoverable has-text-grey"><?php the_title(); ?></h2>
        <?php endif; ?>
      </div>

      <!-- Modal -->
      <?php if($video_link) : ?>
      <div class="modal modal-video">
        <div class="modal-background"></div>
        <div class="modal-content">
          <div class="video-container is-16by9">
            <iframe class="video" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
      <?php endif; ?>
        <?php if($internal_extrenal_link) : ?></a><?php endif; ?>
</div>
