<?php
/*
 * Plugin Name: Customize Admin Toolkit
 * Version: 1.0
 * Plugin URI: http://www.carlalberto.ml/
 * Description: Simple tool to add a custom role, lower than and Administrator, assign and customize some capabilities.
 * Author: Carl Alberto
 * Author URI: http://www.carlalberto.ml/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: customize-admin-toolkit
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Carl Alberto
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-customize-admin-toolkit.php' );
require_once( 'includes/class-customize-admin-toolkit-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-customize-admin-toolkit-admin-api.php' );
require_once( 'includes/lib/class-customize-admin-toolkit-post-type.php' );
require_once( 'includes/lib/class-customize-admin-toolkit-taxonomy.php' );

/**
 * Returns the main instance of Customize_Admin_Toolkit to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Customize_Admin_Toolkit
 */
function Customize_Admin_Toolkit () {
	$instance = Customize_Admin_Toolkit::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Customize_Admin_Toolkit_Settings::instance( $instance );
	}

	return $instance;
}

Customize_Admin_Toolkit();
