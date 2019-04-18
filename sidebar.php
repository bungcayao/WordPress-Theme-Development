<?php if ( is_active_sidebar( 'default-sidebar' ) ) : ?>
	<aside id="sidebar">
    	<div class="sidebar-hold">
			<?php dynamic_sidebar( 'default-sidebar' ); ?>
        </div>
	</aside>
<?php endif; ?>