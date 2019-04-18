<?php
	/**
	 * NavBar
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 * To Fix NavBar to top of Page:
	 * Apply 'is-fixed-top' class to <nav>
	 * 
	 * To make NavBar Transparent initially on Page:
	 * Apply 'is-transparent' class to <nav>
	 */

?>
<nav data-module="navbar" class="navbar" role="navigation" aria-label="main navigation">
	<!-- Container -->
	<div class="container">
		<!-- Navbar Brand/Logo -->
		<div class="navbar-brand">
			<!-- Brand Logo -->
			<a class="navbar-item"
			   href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   rel="home"
			   title="<?php echo get_bloginfo( 'description', 'display' ); ?>">
				<?php
					if (has_theme_logo() ) : ?>
						<img class="is-hidden-mobile" src="<?php echo popin_images_dir() ?>/global-header/logo.svg" width="134" height="28" alt="<?php bloginfo( 'name' ); ?>">
						<img class="is-hidden-tablet" src="<?php echo popin_images_dir() ?>/global-header/logo-icon-only.svg" width="40" height="28" alt="<?php bloginfo( 'name' ); ?>">
					<?php elseif ( function_exists( 'the_custom_logo' ) && has_custom_logo()  ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<p>POPin</p>
					<?php endif; ?>
			</a>
			<!-- Join Event Code Box -->
			<div class="navbar-item is-hidden-desktop">
				<div class="field tag has-addons">
					<div class="control is-hidden-mobile">
						<span class="button has-text-popin-blue-md is-static">POP#:</span>
					</div>
					<div class="control">
						<input class="input event-code-join" type="email" placeholder="Enter POPin Code" required="">
					</div>
					<p class="control">
							<a class="button is-success has-text-weight-semibold event-code-join is-popin-blue-md">JOIN</a>
					</p>
				</div>
			</div>
			<!-- Mobile/Tablet -->
			<div class="navbar-burger" data-target="navMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- Navbar Menu -->
		<div id="navMenu" class="navbar-menu navbar-start">
			<?php
				wp_nav_menu(array(
					'items_wrap'=> '%3$s',
					'walker' => new popin_header_navwalker(),
					'container'=>false,
					'menu_class' => '',
					'theme_location'=>'primary-header',
					'fallback_cb'=>false
				));
			?>
		</div>
	</div>
</nav>
