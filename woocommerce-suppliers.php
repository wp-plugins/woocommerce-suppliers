<?php
/**
 * Plugin Name: WooCommerce Suppliers
 * Plugin URI: http://agenciamagma.com.br
 * Description: WooCommerce Suppliers inserts the suppliers taxonomy associated with the product custom post.
 * Version: 0.0.1
 * Author: agenciamagma, Carlos Cardoso Dias
 * Author URI: http://agenciamagma.com.br
 * Text Domain: woocommerce-suppliers
 * Domain Path: /languages/
 * License: -
 *
 * @author Carlos Cardoso Dias
 */

/**
 * Anti cheating code
 */
defined( 'ABSPATH' ) or die( 'A Ag&ecirc;ncia Magma n&atilde;o deixa voc&ecirc; trapacear ;)' );

if ( ! class_exists( 'WooCommerce_Suppliers' ) ) :

require_once( 'includes/core/class-mgm-main-plugin.php' );

final class WooCommerce_Suppliers extends MGM_Main_Plugin {

	/**
	 *
	 * @action( hook: "init" )
	 */
	public function add_supplier_taxonomy() {
		register_taxonomy( 'suppliers' , 'product' , array(
			'hierarchical' => false,
			'labels'       => array(
				'name'              => __( 'Suppliers', $this->textdomain ),
				'singular_name'     => __( 'Supplier', $this->textdomain ),
				'search_items'      => __( 'Search Suppliers', $this->textdomain ),
				'all_items'         => __( 'All Suppliers', $this->textdomain ),
				'edit_item'         => __( 'Edit Supplier', $this->textdomain ),
				'update_item'       => __( 'Update Supplier', $this->textdomain ),
				'add_new_item'      => __( 'Add New Supplier', $this->textdomain ),
				'new_item_name'     => __( 'New Supplier Name', $this->textdomain ),
				'menu_name'         => __( 'Suppliers', $this->textdomain )
			),
			'show_ui'               => true,
			'show_in_nav_menus'     => true,
			'public'                => false,
			'rewrite'               => false
		));
	}
}

/**
 * Initialize the plugin
 */
WooCommerce_Suppliers::register( array( 'called_class' => 'WooCommerce_Suppliers' ) );

endif;