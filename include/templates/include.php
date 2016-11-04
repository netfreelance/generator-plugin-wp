<?php
/**
 * <%= includename %>
 *
 * @since NEXT
 * @package <%= pluginname %>
 */

/**
 * <%= includename %>.
 *
 * @since NEXT
 */
class <%= classname %> {
	/**
	 * Parent plugin class
	 *
	 * @var   <%= pluginname %>
	 * @since NEXT
	 */
	protected $plugin = null;

	/**
	 * Constructor
	 *
	 * @since  NEXT
	 * @param  <%= pluginname %> $plugin Main plugin object.
	 * @return void
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();
	}

	/**
	 * Initiate our hooks
	 *
	 * @since  NEXT
	 * @return void
	 */
	public function hooks() {
	}
}
