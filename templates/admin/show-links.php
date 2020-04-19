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
<div>
<h2><?php echo __( 'Links', 'wp-media-web-page-crawler' ); ?></h2>
<?php if ( ! empty( $links ) ) : ?>
	<table class="form-table" role="presentation">
	<tbody>
	<?php foreach ( $links as $wpmedia_key => $wpmedia_page_link ) : ?>
	<tr>
	<th scope="row"><?php echo __( 'Link', 'wp-media-web-page-crawler' ); ?> <?php echo $wpmedia_key + 1; ?></th>
	<td><a href = "<?php echo $wpmedia_page_link; ?>" target = "_blank"><?php echo $wpmedia_page_link; ?></a></td>
	</tr> 
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>
</div>
