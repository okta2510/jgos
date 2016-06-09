<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category BeAgency Plugin
 * @package  CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

require_once dirname( __FILE__ ) . '/init.php';

/**
 * Hook in and add metaboxes.
 */
function beagency_register_metabox() {
	// Start with an underscore to hide fields from custom fields list.
	$prefix = '_beagency_option_';

	/**
	 * Initiate the metabox.
	 */
	$portfolio_metabox = new_cmb2_box( array(
		'id'           => 'portfolio_metabox',
		'title'        => __( 'Portfolio Metabox', 'beagency' ),
		'object_types' => array( 'portfolio' ),
		'context'      => 'normal',
		'priority'     => 'high'
	) );

	$portfolio_metabox->add_field( array(
		'name' => __( 'Created by:', 'beagency' ),
		'id'   => $prefix . 'author',
		'type' => 'text_small',
	) );

	$portfolio_metabox->add_field( array(
		'name' => __( 'Completed on:', 'beagency' ),
		'id'   => $prefix . 'date',
		'type' => 'text_date',
	) );

	$portfolio_metabox->add_field( array(
		'name' => __( 'Skills:', 'beagency' ),
		'id'   => $prefix . 'skill',
		'type' => 'text_medium',
	) );

	$portfolio_metabox->add_field( array(
		'name' => __( "Client's Name:", 'beagency' ),
		'id'   => $prefix . 'client_name',
		'type' => 'text_medium',
	) );

	$portfolio_metabox->add_field( array(
		'name' => __( "Client's URL:", 'beagency' ),
		'id'   => $prefix . 'client_url',
		'type' => 'text_url',
	) );
}
add_action( 'cmb2_init', 'beagency_register_metabox' );
