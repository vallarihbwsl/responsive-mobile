<?php
/**
 * ${TITLE}
 *
 * ${DESCRIPTION}
 *
 * @package            ${PACKAGE}
 * @license            license.txt
 * @copyright        ${YEAR} ${COMPANY}
 * @since            ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
responsive_entry_before(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php responsive_entry_top(); ?>
		<?php get_template_part( 'post-meta' ); ?>

		<div class="post-entry">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
							   'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ),
							   'after'  => '</div>',
						   ) );
			?>
		</div>
		<!-- .post-entry -->
		<?php responsive_post_nav(); ?>
		<?php get_template_part( 'post-data' ); ?>
		<?php responsive_entry_bottom(); ?>
	</article>
	<!-- #post-## -->
<?php responsive_entry_after(); ?>