<?php
/**
 * Plugin Name: Custom Tab Builder for Ultimate Member
 * Plugin URI:  https://suiteplugins.com/downloads/um-custom-tab-builder/
 * Description: Adds an option to build tabs for Ultimate Member via admin.
 * Version:     1.0.5
 * Author:      SuitePlugins
 * Author URI:  https://suiteplugins.com
 * Donate link: https://suiteplugins.com
 * License:     GPLv2
 * Text Domain: um-custom-tab-builder-lite
 * Domain Path: /languages
 *
 * @link    https://suiteplugins.com
 *
 * @package UM_Custom_Tab_Builder_Lite
 * @version 1.0.0
 *
 */

/**
 * Copyright (c) 2018 SuitePlugins (email : info@suiteplugins.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( class_exists( 'UM_Custom_Tab_Builder' ) ) {
	return;
}

require_once plugin_dir_path( __FILE__ ) . 'vendor/cmb2/cmb2/init.php';
require_once plugin_dir_path( __FILE__ ) . 'class-um-custom-tab-builder-lite.php';
