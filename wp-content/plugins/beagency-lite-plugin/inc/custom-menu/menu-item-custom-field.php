<?php
/**
 * Menu Item Custom Fields
 *
 * @link https://github.com/kucrut/wp-menu-item-custom-fields
 *
 * @package BeAgency
 */

if ( ! class_exists( 'beagency_Menu_Item_Custom_Fields' ) ) {
	// Menu item custom fields loader.
	class beagency_Menu_Item_Custom_Fields {
		/**
		* Add filter.
		*
		* @wp_hook action wp_loaded
		*/
		public static function load() {
			add_filter( 'wp_edit_nav_menu_walker', array( __CLASS__, '_filter_walker' ), 99 );
		}

		/**
		* Replace default menu editor walker with ours.
		*
		* We don't actually replace the default walker. We're still using it and
		* only injecting some HTMLs.
		*
		* @since   0.1.0
		* @access  private
		* @wp_hook filter wp_edit_nav_menu_walker
		* @param   string $walker Walker class name
		* @return  string Walker class name
		*/
		public static function _filter_walker( $walker ) {
			$walker = 'beagency_Menu_Item_Custom_Fields_Walker';

			if ( ! class_exists( $walker ) ) {
				require_once 'walker-nav-menu-edit.php';
			}

			return $walker;
		}
	}
	add_action( 'wp_loaded', array( 'beagency_Menu_Item_Custom_Fields', 'load' ), 9 );
}

/**
 * Add menu item metadata.
 */
class Menu_Item_Custom_Fields_Metadata {
	/**
	 * Holds our custom fields.
	 *
	 * @var    array
	 * @access protected
	 */
	protected static $fields = array();

	/**
	 * Initialize plugin.
	 */
	public static function init() {
		add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, '_fields' ), 10, 4 );
		add_filter( 'manage_nav-menus_columns', array( __CLASS__, '_columns' ), 99 );

		self::$fields = array(
			'id' => 'menu-icon',
			'label' => esc_html__( 'Menu Icon', 'beagency' )
		);
	}

	/**
	 * Print field.
	 *
	 * @param object $item  Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args  Menu item args.
	 * @param int    $id    Nav menu ID.
	 *
	 * @return string Form fields
	 */
	public static function _fields( $id, $item, $depth, $args ) { ?>
		<p class="field-menu-icon description description-wide">
			<?php printf(
				'<label for="%1$s">%2$s
					<a href="%3$s" target="_blank">%4$s</a>
				</label>',
				self::$fields['id'],
				self::$fields['label'],
				esc_url( 'http://betheme.me/themes/beagency/' ),
				esc_html__( 'Upgrade to Pro version to use Menu Icon.', 'beagency' )
			) ?>
		</p>
	<?php }

	/**
	 * Add our fields to the screen options toggle.
	 *
	 * @param array $columns Menu item columns
	 * @return array
	 */
	public static function _columns( $columns ) {
		
		$columns = array_merge( $columns, array( 'menu-icon' => esc_html__( 'Menu Icon', 'beagency' ) ) );

		return $columns;
	}
}
Menu_Item_Custom_Fields_Metadata::init();

/**
 * Add custom WordPress nav walker class.
 *
 * @link https://github.com/twittem/wp-bootstrap-navwalker
 *
 */
class beagency_Walker_Nav_Menu extends Walker_Nav_Menu {
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

			$fb_output .= '<ul';

			if ( $menu_id ) {
				$fb_output .= ' id="' . $menu_id . '"';
			}

			if ( $menu_class ) {
				$fb_output .= ' class="' . $menu_class . '"';
			}

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">' . esc_html__( 'Add a menu', 'beagency' ) . '</a></li>';
			$fb_output .= '</ul>';

			if ( $container ) {
				$fb_output .= '</' . $container . '>';
			}

			echo $fb_output;
		}
	}
}