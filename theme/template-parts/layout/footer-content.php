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

	<div class="footer_menu w-full bg-[#F4F4F4] py-7">
		<div class="container flex flex-col lg:flex-row justify-between gap-7 lg:gap-0">
			<img src="https://www.twojesciezkikariery.pl/wp-content/uploads/sites/2/2025/08/ChatGPT-Image-29-lip-2025-07_32_23-1-1.png" alt="logo" class="max-w-[170px]">

			<div class="links flex flex-col-reverse lg:flex-row items-center gap-7 lg:gap-0">
					<p><span><?php echo wp_kses_post('Copyright © Świstak Kraków 2025') . ' ' . the_date('Y'); ?></span><span class="ml-5 mr-6 hidden lg:inline">|</span></p>
					<nav aria-label="<?php esc_attr_e('Footer Menu', 'swistak-kurs'); ?>" class="[&_ul]:flex [&_ul]:items-center [&_ul]:gap-6 ">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_class'     => 'footer-menu',
								'depth'          => 1,
								'before'		 => '<div class="link-wrapper hover:text-primary transition duration-300">',
								'after'			 => '</div>',
							)
						);
						?>
					</nav>

			</div>

		</div>
	</div>

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