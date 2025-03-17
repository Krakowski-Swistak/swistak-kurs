<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swistak-kurs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php echo 'content-single'; ?>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<?php if (! is_page()) : ?>
			<div class="entry-meta">
				<?php swistak_kurs_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php swistak_kurs_post_thumbnail(); ?>

	<div <?php swistak_kurs_content_class('entry-content'); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Continue reading<span class="sr-only"> "%s"</span>', 'swistak-kurs'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'swistak-kurs'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php swistak_kurs_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->