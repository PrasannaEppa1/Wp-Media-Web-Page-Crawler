<?php
/**
 *
 * This template is used to show crawler options
 *
 * @package Actions\Crawler
 */

// phpcs:disable VariableAnalysis
// There are "undefined" variables here because they're defined in the code that includes this file as a template.

?>

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div id = "crawler-section">
<h2><?php echo __( 'Wp Media Crawler', 'wp-media-web-page-crawler' ); ?></h2>
<?php
$wpmedia_start_disabled = '';
$wpmedia_hide_view_btn  = true;
if ( false !== get_option( 'wpmedia_crawler_started' ) ) {
	$wpmedia_start_disabled = 'disabled';
	$wpmedia_hide_view_btn  = false;
}
?>
<input type="button" name="start-crawler" id="start-crawler" class="button button-primary" value="<?php echo __( 'Start Crawler', 'wp-media-web-page-crawler' ); ?>" <?php echo $wpmedia_start_disabled; ?> >
<input type="button" name="view-links" id="view-links" class="button button-primary <?php echo ( $wpmedia_hide_view_btn ) ? 'hide-view-btn' : ''; ?>" value="<?php echo __( 'View Links', 'wp-media-web-page-crawler' ); ?>">
<input type="button" name="reset-crawler" id="reset-crawler" class="button button-primary" value="<?php echo __( 'Reset Crawler', 'wp-media-web-page-crawler' ); ?>">
</div>
<div>
<img class = "loader" src = "<?php echo WP_MEDIA_CRAWLER_PLUGIN_URL . 'assets/img/loader.gif'; ?>">
</div>
<div id = "links-section"></div>
