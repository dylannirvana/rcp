<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package rcpTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- THIS IS SIDEBAR.PHP -->
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
