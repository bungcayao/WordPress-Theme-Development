<?php header('Content-Transfer-Encoding: binary'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="iyqUy5h8lxgW7_T9I1dPMp_smxkJfTt4IAiolsiYiEM" />  
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script> 
  const wp_env = "<?php global $WPENV; echo $WPENV; ?>";
  const wp_page_name = "<?php global $post; echo $post->post_name; ?>";
  let is_page, is_single, is_blog, is_category, is_tag, is_other;
  <?php if (is_page()) : ?>
    is_page = true;
  <?php elseif (is_single()) : ?>
    is_single = true;
  <?php elseif (is_home()) : ?>
    is_blog = true;
  <?php elseif (is_category()) : ?>
    is_category = true;
  <?php elseif (is_tag()) : ?>
    is_tag = true;
  <?php else : ?>
    is_other = true;
  <?php endif; ?>
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (is_page_template('pages/redirect.php')) : ?>

  <div id="page" class="site">
    <div id="content" class="site-content">  
  
<?php else : ?>
  <div id="page" class="site">
    <!-- Header -->
    <header>
      <!-- Navbar -->
      <?php require get_template_directory() . '/modules/navbar.php'; ?>
      <?php
        $notificationsMessageEnabled = get_field('notificationsMessageEnabled') || false;
        // Notification Messages
        if ($notificationsMessageEnabled) :
          get_template_part('modules/component', 'notifications');
        endif;
      ?>
    </header>
    <div id="content" class="site-content">

    <?php require get_template_directory() . '/modules/component-auto-tenant.php'; ?>

<?php endif; ?>