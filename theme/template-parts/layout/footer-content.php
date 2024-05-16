<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swistak-kurs
 */

?>

<footer id="colophon">

	<?php if (is_active_sidebar('sidebar-1')) : ?>
		<aside class="hidden" role="complementary" aria-label="<?php esc_attr_e('Footer', 'swistak-kurs'); ?>">
			<?php dynamic_sidebar('sidebar-1'); ?>
		</aside>
	<?php endif; ?>

	<?php if (has_nav_menu('menu-2')) : ?>
		<nav aria-label="<?php esc_attr_e('Footer Menu', 'swistak-kurs'); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_class'     => 'footer-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
	<?php endif; ?>

	<div class="hidden">
		<?php
		$swistak_kurs_blog_info = get_bloginfo('name');
		if (!empty($swistak_kurs_blog_info)) :
		?>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>,
		<?php
		endif;
		?>
	</div>

</footer><!-- #colophon -->