<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package energy_bigrez
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar Widget', 'karauos' ); ?>">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-1')) : else : echo __( 'Please use the widgets to place the required tools.', 'karauos' ); endif; ?>
</aside>
