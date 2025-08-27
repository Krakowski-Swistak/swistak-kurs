<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swistak-kurs
 */

?>

<header id="masthead" class="sticky z-20 top-0 w-full bg-white">
	<div class="container h-18 md:h-24 py-3 flex justify-between items-center">
		<div>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="">
				<img src="https://www.twojesciezkikariery.pl/wp-content/uploads/sites/2/2025/08/ChatGPT-Image-29-lip-2025-07_32_23-1-1.png" alt="logo" class="max-w-[170px]">
				<?php file_get_contents(get_stylesheet_directory_uri() . '/assets/img/logo2.png'); ?>
			</a>
		</div>
		<button class="menu-btn w-[35px] h-[31px] md:hidden z-20" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_html_e('Primary Menu', 'swistak-kurs'); ?>" data-js="nav-toggle">
			<div class="ks-menu-toggler__line w-[35px] h-[3px] rounded-full bg-primary origin-left transition duration-300 mb-[9px]"></div>
			<div class="ks-menu-toggler__line w-[35px] h-[3px] rounded-full bg-primary origin-left transition duration-300 mb-[9px]"></div>
			<div class="ks-menu-toggler__line w-[35px] h-[3px] rounded-full bg-primary origin-left transition duration-300"></div>
		</button>

		<div id="site-navigation" class="absolute nav-primary md:static inset-x-0 top-full opacity-0 md:opacity-100 h-0 md:h-auto overflow-hidden bg-white shadow-none transition-all duration-500" data-js="nav-container">
			<nav class="container flex flex-col md:flex-row md:items-center gap-4 md:gap-10 text-lg" aria-label="<?php esc_attr_e('Main Navigation', 'swistak-kurs'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
				<a href="<?php echo get_permalink(wc_get_page_id('myaccount')); ?>" class="px-5 py-3 text-primary hover:text-white text-lg font-medium rounded-2xl border-2 border-primary hover:bg-primary transition duration-200">
					<?php if (is_user_logged_in()) : ?>
						<?php esc_html_e('My account', 'swistak-kurs'); ?>
					<?php else : ?>
						<?php esc_html_e('Log in', 'swistak-kurs'); ?>
					<?php endif; ?>
				</a>
			</nav><!-- #site-navigation -->
		</div>
	</div>



</header><!-- #masthead -->