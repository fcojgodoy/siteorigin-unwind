<?php
/**
 * Template part for displaying the fullscreen search form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package siteorigin-unwind
 * @since siteorigin-unwind 0.2
 * @license GPL 2.0
 */

?>

<form method="get" action="<?php echo esc_url( site_url() ) ?>">
	<h3><?php esc_html_e( 'Search Site', 'siteorigin-unwind' ); ?></h3>
	<input type="search" name="s" placeholder="<?php esc_attr_e( 'Type and hit enter to search', 'siteorigin-unwind') ?>" value="<?php echo get_search_query() ?>" />
	<button type="submit">
		<label class="screen-reader-text"><?php esc_html_e( 'Search', 'siteorigin-unwind' ); ?></label>
		<?php siteorigin_unwind_display_icon( 'search' ); ?>
	</button>	
</form>
