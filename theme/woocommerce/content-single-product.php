<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;
global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<div class="container mx-auto">
		<div class="mb-9 flex flex-col lg:flex-row lg:justify-between gap-5 md:gap-6 lg:gap-10">
			<div class="w-full">
				<div>
					<?php the_title('<h1 class="mb-10 text-[32px] font-medium text-[#3B424F]">', '</h1>'); ?>
					<div class="mb-16">
						<?php swistak_kurs_post_thumbnail(); ?>
					</div>
					<div class="font-light [&>h2]:mb-[16px] [&>h2]:text-[#22272F] [&>h2]:text-[21px] [&>h2]:font-medium [&>ul]:list-disc [&>ul]:ml-[18px]">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<aside class="lg:basis-1/3 md:grow-0 md:shrink-0 relative">
				<div class="w-full p-6 border-[1px] border-[#DDE3EE] lg:sticky top-[96px] text-[#22272F]">
					<p class="mb-6 pb-6 border-b-[1px] border-b-[#DDE3EE] text-[21px] font-medium">Informacje:</p>

					<div class="type-wrapper flex justify-between mb-6 pb-6 border-b-[1px] border-b-[#DDE3EE] text-[14px] font-semibold">
						<p class="">
							<span>
								<svg class="inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM5 10V19H19V10H5ZM5 5V8H19V5H5Z" fill="#22272F" />
								</svg>
							</span>
							RODZAJ
						</p>
						<p class="font-normal">Szkolenie online</p>
					</div>

					<div class="category-wrapper flex justify-between mb-6 pb-6 border-b-[1px] border-b-[#DDE3EE] text-[14px] font-semibold">
						<p class="">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12 22C7.664 22 4 19.965 4 17.556V6.444C4 4.035 7.664 2 12 2C16.336 2 20 4.035 20 6.444V17.556C20 19.965 16.337 22 12 22ZM6 14.9V17.559C6.07 18.112 8.309 19.781 12 19.781C15.691 19.781 17.931 18.107 18 17.553V14.9C16.1794 15.9554 14.1039 16.4905 12 16.447C9.89606 16.4906 7.82058 15.9554 6 14.9ZM6 9.341V12C6.07 12.553 8.309 14.222 12 14.222C15.691 14.222 17.931 12.548 18 11.994V9.341C16.1795 10.3968 14.104 10.9323 12 10.889C9.89596 10.9323 7.82046 10.3968 6 9.341ZM12 4.222C8.308 4.222 6.069 5.896 6 6.451C6.07 7 8.311 8.666 12 8.666C15.689 8.666 17.931 6.992 18 6.438C17.93 5.887 15.689 4.222 12 4.222Z" fill="#22272F" />
								</svg>
							</span>
							KATEGORIA
						</p>
						<p class="font-normal">Biznes</p>
					</div>

					<div class="duration-wrapper flex justify-between mb-6 pb-6 border-b-[1px] border-b-[#DDE3EE] text-[14px] font-semibold">
						<p class="">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.999 22C7.05569 21.9349 3.06417 17.9433 2.99902 13C3.06417 8.05669 7.05569 4.06517 11.999 4.00002C16.9423 4.06517 20.9339 8.05669 20.999 13C20.9339 17.9433 16.9423 21.9349 11.999 22ZM11.999 6.00002C8.15418 6.05063 5.04963 9.15518 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15518 15.8438 6.05063 11.999 6.00002ZM16.999 14H10.999V8.00002H12.999V12H16.999V14ZM20.291 6.70802L17.282 3.70802L18.691 2.29102L21.701 5.29102L20.291 6.70702V6.70802ZM3.70602 6.70802L2.29102 5.29102L5.28202 2.29102L6.69702 3.70802L3.70802 6.70802H3.70602Z" fill="#22272F" />
								</svg>
							</span>
							CZAS TRWANIA
						</p>
						<p class="font-normal">50 min</p>
					</div>

					<div class="price-wrapper">
						<?php echo $product->get_price_html(); ?>
					</div>
					<?php
					$product = wc_get_product(get_the_ID());
					echo "<a href='" . $product->add_to_cart_url() . "'>add to cart</a>";
					?>
				</div>
			</aside>
		</div>
		<a href="<?php echo get_home_url(); ?>" class="p-[8px_16px] rounded-2xl border-[1px] border-primary hover:bg-primary hover:text-white transition duration-300">POWRÓT DO STRONY GŁÓWNEJ</a>
	</div>
</div>

<!-- <?php do_action('woocommerce_after_single_product'); ?> -->