<?php

namespace aubreypwd\Stoicism;

/**
 * Library fields.
 *
 * @since  1.0.0
 */
class CMB2_Loader {

	/**
	 * Was CMB2 loaded or what?
	 *
	 * @since  1.0.0
	 *
	 * @var boolean
	 */
	public $loaded = false;

	/**
	 * Load CMB2.
	 *
	 * @since  1.0.0
	 */
	function __construct() {
		$file = WP_PLUGIN_DIR . '/cmb2/init.php';

		// Load the CMB2 stuff.
		if ( stream_resolve_include_path( $file ) && require_once( $file ) ) {
			$this->loaded = true;
		}
	}
}