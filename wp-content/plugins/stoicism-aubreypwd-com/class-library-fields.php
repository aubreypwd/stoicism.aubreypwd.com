<?php

namespace aubreypwd\Stoicism;

/**
 * Library fields.
 *
 * @since  1.0.0
 */
class Library_Fields {

	/**
	 * Create CMB2 Fields.
	 *
	 * @since  1.0.0
	 * @return Taxonomy_Core Taxonomy Core object.
	 */
	function __construct() {
		if ( ! class_exists( 'CMB2' ) ) {

			// The CMB2 plugin must not be activated.
			return;
		}
	}
}