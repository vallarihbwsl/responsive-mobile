<?php
/**
 * Template Name: Content/Sidebar Half Page
 *
 * Template for pages
 *
 * @package          Responsive
 * @license          license.txt
 * @copyright        2014 CyberChimps
 * @since            1.0.0
 *
 * Please do not edit this file. This file is part of the Responsive Framework and all modifications
 * should be made in a child theme.
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

	<div id="content" class="content-area">
		<div class="row">
			<main id="main" class="site-main col-md-6" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php get_template_part( 'loop-nav' ); ?>

				<?php else : ?>

					<?php get_template_part( 'loop-no-posts' ); ?>

				<?php endif; ?>

			</main>
			<!-- #main -->

			<?php get_sidebar( 'right-half' ); ?>
		</div>
		<!-- row -->
	</div>
	<!-- #content -->
<?php get_footer(); ?>