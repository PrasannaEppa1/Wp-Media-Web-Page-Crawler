<?php
/**
 * Template Name: Sitemap Template
 *
 * @package WordPress
 * @subpackage Wp Media Web Page Crawler
 * @since 1.0
 */

get_header();

if ( ! empty( $sitemap_markup ) ) {
	echo $sitemap_markup;
} else {
	echo '<div>' . __( 'No Links found', 'wp-media-web-page-crawler' ) . '</div>';
}
get_footer();
