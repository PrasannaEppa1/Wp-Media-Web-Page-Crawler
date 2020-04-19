<?php
/**
 * Plugin Name
 *
 * @package           WpMedia\WebPage\Crawler
 * @author            PrasannaEppa
 * @copyright         2020 PrasannaEppa
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Wp Media Web Page Crawler
 * Plugin URI:        https://github.com/PrasannaEppa1/Wp-Media-Web-Page-Crawler
 * Description:       A plugin to crawl all internal links of home page of website.
 * Version:           1.0.0
 * Author:            PrasannaEppa
 * Text Domain:       wp-media-web-page-crawler
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

/*
Wp Media Web Page Crawler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Wp Media Web Page Crawler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Wp Media Web Page Crawler. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

// Make sure we don't expose any info if called directly.
if ( ! function_exists( 'add_action' ) ) {
	echo 'Invalid request';
	exit;
}

define( 'WP_MEDIA_CRAWLER_NAMESPACE', 'Actions' );
define( 'WP_MEDIA_CRAWLER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_MEDIA_CRAWLER_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

require_once WP_MEDIA_CRAWLER_PLUGIN_DIR . 'class-autoloader.php';

use WpMedia\Webpage\Crawler\Autoloader as Autoloader;
add_action( 'plugins_loaded', [ Autoloader::get_instance(), 'plugin_setup' ] );
register_activation_hook( __FILE__, [ Autoloader::get_instance(), 'plugin_activation' ] );
register_deactivation_hook( __FILE__, [ Autoloader::get_instance(), 'plugin_deactivation' ] );
