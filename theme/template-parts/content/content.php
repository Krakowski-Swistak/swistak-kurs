<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swistak-kurs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if (is_sticky() && is_home() && !is_paged()) {
			printf('<span">%s</span>', esc_html_x('Featured', 'post', 'swistak-kurs'));
		}
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
		endif;
		?>
	</header><!-- .entry-header -->

	<?php swistak_kurs_post_thumbnail(); ?>

	<div <?php swistak_kurs_content_class('entry-content'); ?>>
		<?php
		the_content();

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