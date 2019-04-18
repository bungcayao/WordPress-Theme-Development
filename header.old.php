<?php header('Content-Transfer-Encoding: binary'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="iyqUy5h8lxgW7_T9I1dPMp_smxkJfTt4IAiolsiYiEM" />  
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script> 
  const wp_env = "<?php global $WPENV; echo $WPENV; ?>";
  // <?php $notificationsContent = get_field('notificationsContent', 'option'); ?>
  // const notificationsContent = '<?php echo $notificationsContent; ?>' || false;
  // console.log('notificationsContent:', notificationsContent);
  const wp_page_name = "<?php global $post; echo $post->post_name; ?>";
  let is_page = is_single = is_blog = is_category = is_tag = is_other = false;
  <?php if( is_page() ) : ?>
    is_page = true;
    // console.log('is_page:',is_page);
  <?php elseif( is_single() ) : ?>
    is_single = true;
    // console.log('is_single:',is_single);
  <?php elseif( is_home() ) : ?>
    is_blog = true;
    // console.log('is_blog:',is_blog);
  <?php elseif( is_category() ) : ?>
    is_category = true;
    // console.log('is_category:',is_category);
  <?php elseif( is_tag() ) : ?>
    s_tag = true;
    // console.log('is_tag:',is_tag);
  <?php else : ?>
    is_other = true;
    // console.log('is_other',is_other);
  <?php endif; ?>
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
  if(	is_page_template('pages/modules.php') || 
      is_page_template('pages/hybrid-resources.php') ||
      is_page_template('pages/hybrid-news.php') ||
      is_page_template('pages/hybrid-blog-technology.php') ||
      is_page_template('pages/hybrid-generic.php') ||
      is_page_template('pages/hybrid-blog.php') ||
      is_page_template('pages/custom-usecase.php') ||
      is_home('index.php') ||
      is_404('404.php') ||
      is_singular('post') ) :
?>
<div id="page" class="site">
  <!-- Header -->
  <header>
    <!-- Navbar -->
    <?php require get_template_directory()  . '/modules/navbar.php'; ?>
    <?php
      $notificationsMessageEnabled = get_field('notificationsMessageEnabled') || false;
      // console_log($notificationsMessageEnabled, 'notificationsMessageEnabled');

      // Notification Messages
      if ($notificationsMessageEnabled) :
        get_template_part('modules/component', 'notifications');
      endif;
    ?>
  </header>
  <div id="content" class="site-content">
  <?php require get_template_directory()  . '/modules/component-auto-tenant.php'; ?>

<?php
  elseif(	is_page_template('pages/redirect.php') ) :
?>

<div id="page" class="site">
  <div id="content" class="site-content">  
  
<?php
  else :
?>

<div id="wrapper">
  <header id="header" class="custom-css fixed-position">
    <div class="header-holder">
      <strong class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name' ));?>">
        </a>
      </strong>
			<?php
				$login_button_text    = get_field( 'login_button_text', 'option' );
				$login_button_link    = get_field( 'login_button_link', 'option' );
				$schedule_button_text = get_field( 'schedule_button_text', 'option' );
				$schedule_button_link = get_field( 'schedule_button_link', 'option' );
				if ( has_nav_menu( 'primary' ) || ($login_button_text && $login_button_link) || ($schedule_button_text && $schedule_button_link) ) : ?>
          <a href="#" class="nav-opener"><span><?php _e( 'menu', 'popin' ); ?></span></a>
          <div class="menu">
            <div class="menu-hold">
							<?php if( has_nav_menu( 'primary' ) )
								wp_nav_menu( array(
									'container' => 'nav', 'container_id' => 'nav',
									'theme_location' => 'primary',
									'items_wrap'     => '<ul>%3$s</ul>'
								)); ?>
            </div>
          </div>
				<?php endif; ?>
    </div>
  </header>

  <main id="main">
 <?php
  endif;
 ?>