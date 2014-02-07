<?php
/**
 * Sidebar Left Half
 *
 * Sidebar Template used by page templates
 *
 * @package			Responsive
 * @license			license.txt
 * @copyright		2014 CyberChimps
 * @since			1.0.0
 *
 * Please do not edit this file. This file is part of the Responsive Framework and all modifications
 * should be made in a child theme.
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets" class="widget-area col-md-6 col-md-pull-6" role="complementary">
		<?php responsive_widgets(); // above widgets hook ?>

		<?php if ( !dynamic_sidebar( 'left-sidebar-half' ) ) : ?>
			<aside id="archives" class="widget-wrapper">

				<h1 class="widget-title"><?php _e( 'In Archive', 'responsive' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>

			</aside>
			<!-- end of .widget-wrapper -->
		<?php endif; //end of left-sidebar-half ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div>
	<!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>