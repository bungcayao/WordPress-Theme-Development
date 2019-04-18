<?php
 /**
	* POPin Theme Nav Walker
	*
	* POPin Theme's Nav is based on the bulma.io framework.
	* The Style is based on the .navbar styles
	* https://bulma.io/documentation/components/navbar/
	*
	* Understanding The Walker Class
	* @link https://code.tutsplus.com/tutorials/understanding-the-walker-class--wp-25401
	* @link https://gist.github.com/kosinix/5544535
	* @link https://github.com/teamscops/bulmapress/blob/ef717dc98c1236bd4088e8de6947fca8a8c5dc49/functions/bulmapress_navwalker.php
	*
	* Class Name: popin_header_navwalker
	* Description: A custom WordPress nav walker class to implement the Bulma.io `.navbar` in a POPin Theme using the WordPress built in menu manager.
	* Author: The POPin Dev Team - @POPinNow
	* Version: 0.0.1
	* Author URI: https://github.com/POPInNow
	* GitHub Plugin URI: https://github.com/POPInNow/POPin-WordPress-Theme/blob/theme/popin-5.0-pre-alpha/inc/template-navmenu.php
	* GitHub Branch: theme/popin-5.0-pre-alpha
	* License: GPL-3.0+
	* License URI: http://www.gnu.org/licenses/gpl-3.0.txt
	*
	* @package popin
	*/
 class popin_footer_navwalker extends Walker_Nav_Menu
 {
	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
	 if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		$t = '';
		$n = '';
	 } else {
		$t = "\t";
		$n = "\n";
	 }
	 $indent = str_repeat( $t, $depth );
	 // Default class.
	 $classes = array( 'sitemap-dropdown' );
	 /**
		* Filters the CSS class(es) applied to a menu list element.
		*
		* @since 4.8.0
		*
		* @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		* @param stdClass $args    An object of `wp_nav_menu()` arguments.
		* @param int      $depth   Depth of menu item. Used for padding.
		*/
	 $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
	 $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
	 $output .= "{$n}{$indent}<ul$class_names>{$n}";
	}
	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
	 if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		$t = '';
		$n = '';
	 } else {
		$t = "\t";
		$n = "\n";
	 }
	 $indent  = str_repeat( $t, $depth );
	 $output .= "$indent</ul>{$n}";
	}
	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	 if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		$t = '';
		$n = '';
	 } else {
		$t = "\t";
		$n = "\n";
	 }
	 $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
	 
	 $class_names = $value = '';
	 
	 $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
	 $classes[] = 'level-item sitemap-list'; // custom classes to add here
	 
	 /**
		* Filters the arguments for a single nav menu item.
		*
		* @since 4.4.0
		*
		* @param stdClass $args  An object of wp_nav_menu() arguments.
		* @param WP_Post  $item  Menu item data object.
		* @param int      $depth Depth of menu item. Used for padding.
		*/
	 // $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
	 
	 /**
		* Filters the CSS classes applied to a menu item's list item element.
		*
		* @since 3.0.0
		* @since 4.1.0 The `$depth` parameter was added.
		*
		* @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
		* @param WP_Post  $item    The current menu item.
		* @param stdClass $args    An object of wp_nav_menu() arguments.
		* @param int      $depth   Depth of menu item. Used for padding.
		*/
	 $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
	 
	 // From BulmaPress
	 if ( $args->has_children ) {
		$class_names .= ' has-dropdown is-hoverable';
	 }
	 
	 if ( in_array( 'current-menu-item', $classes ) ) {
		$class_names .= ' active';
	 }
	 
	 //
	 
	 $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
	 
	 /**
		* Filters the ID applied to a menu item's list item element.
		*
		* @since 3.0.1
		* @since 4.1.0 The `$depth` parameter was added.
		*
		* @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		* @param WP_Post  $item    The current menu item.
		* @param stdClass $args    An object of wp_nav_menu() arguments.
		* @param int      $depth   Depth of menu item. Used for padding.
		*/
	 $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
	 $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
	 
	 $output .= $indent . '<li' . $id . $class_names . '>';
	 
	 $atts                 = array();
	 $atts['title']        = ! empty( $item->attr_title ) ? $item->attr_title : '';
	 $atts['target']       = ! empty( $item->target ) ? $item->target : '';
	 $atts['rel']          = ! empty( $item->xfn ) ? $item->xfn : '';
	 
	 // If item has_children add atts to a.
	 if ( $args->has_children && $depth === 0 ) {
		//$atts['href']   		= '#';
		$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		$atts['data-toggle']	= 'dropdown';
		$atts['class']			= 'dropdown-toggle';
		$atts['aria-haspopup']	= 'true';
	 } else {
		$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'page' : '';
	 }
	 
	 
	 /**
		* Filters the HTML attributes applied to a menu item's anchor element.
		*
		* @since 3.6.0
		* @since 4.1.0 The `$depth` parameter was added.
		*
		* @param array $atts {
		*     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		*
		*     @type string $title        Title attribute.
		*     @type string $target       Target attribute.
		*     @type string $rel          The rel attribute.
		*     @type string $href         The href attribute.
		*     @type string $aria_current The aria-current attribute.
		* }
		* @param WP_Post  $item  The current menu item.
		* @param stdClass $args  An object of wp_nav_menu() arguments.
		* @param int      $depth Depth of menu item. Used for padding.
		*/
	 $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
	 $attributes = '';
	 foreach ( $atts as $attr => $value ) {
		if ( ! empty( $value ) ) {
		 $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
		 $attributes .= ' ' . $attr . '="' . $value . '"';
		}
	 }
	 /** This filter is documented in wp-includes/post-template.php */
	 $title = apply_filters( 'the_title', $item->title, $item->ID );
	 /**
		* Filters a menu item's title.
		*
		* @since 4.4.0
		*
		* @param string   $title The menu item's title.
		* @param WP_Post  $item  The current menu item.
		* @param stdClass $args  An object of wp_nav_menu() arguments.
		* @param int      $depth Depth of menu item. Used for padding.
		*/
	 $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
	 $item_output  = $args->before;
	 $item_output .= '<a class=sitemap-link' . $attributes . '>';
	 $item_output .= $args->link_before . $title . $args->link_after;
	 $item_output .= '</a>';
	 $item_output .= $args->after;
	 /**
		* Filters a menu item's starting output.
		*
		* The menu item's starting output only includes `$args->before`, the opening `<a>`,
		* the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		* no filter for modifying the opening and closing `<li>` for a menu item.
		*
		* @since 3.0.0
		*
		* @param string   $item_output The menu item's starting HTML output.
		* @param WP_Post  $item        Menu item data object.
		* @param int      $depth       Depth of menu item. Used for padding.
		* @param stdClass $args        An object of wp_nav_menu() arguments.
		*/
	 $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Page data object. Not used.
	 * @param int      $depth  Depth of page. Not Used.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
	 if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
		$t = '';
		$n = '';
	 } else {
		$t = "\t";
		$n = "\n";
	 }
	 $output .= "</li>{$n}";
	}
	
	
	// BULMA WORDPRESS
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
	 if ( ! $element )
		return;
	 $id_field = $this->db_fields['id'];
	 // Display this element.
	 if ( is_object( $args[0] ) )
		$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
	 parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 *
	 */
	public static function fallback( $args ) {
	 if ( current_user_can( 'manage_options' ) ) {
		extract( $args );
		$fb_output = null;
		if ( $container ) {
		 $fb_output = '<' . $container;
		 if ( $container_id )
			$fb_output .= ' id="' . $container_id . '"';
		 if ( $container_class )
			$fb_output .= ' class="' . $container_class . '"';
		 $fb_output .= '>';
		}
		$fb_output .= '<li';
		if ( $menu_class )
		 $fb_output .= ' class="nav-item"';
		$fb_output .= '>';
		$fb_output .= '<a class="button is-danger is-outlined" href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a>';
		$fb_output .= '</li>';
		if ( $container )
		 $fb_output .= '</' . $container . '>';
		echo $fb_output;
	 }
	}
 } // popin_header_navwalker extends Walker_Nav_Menu
