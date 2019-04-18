<?php

// Theme sidebars



function theme_widget_init() {

	register_sidebar( array(

		'id'            => 'default-sidebar',

		'name'          => __( 'Default Sidebar', 'popin' ),

		'before_widget' => '',

		'after_widget'  => '',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>'

	) );

	register_sidebar( array(

		'id'            => 'twitter-sidebar',

		'name'          => __( 'Twitter Sidebar', 'popin' ),

		'before_widget' => '<div class="block %2$s" id="%1$s"><div class="twitter-widget">',

		'after_widget'  => '</div></div>',

		'before_title'  => '<h3>',

		'after_title'   => '</h3>'

	) );

}

add_action( 'widgets_init', 'theme_widget_init' );