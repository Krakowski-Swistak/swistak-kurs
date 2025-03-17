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
		<div class="mb-20 flex flex-col lg:flex-row lg:justify-between gap-5 md:gap-6 lg:gap-10">
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
				<div class="lg:sticky top-[115px]">
					<p>Informacje</p>
					<?php
					$product = wc_get_product(get_the_ID());
					echo "<a href='" . $product->add_to_cart_url() . "'>add to cart</a>";
					?>
					<div class="price-wrapper">
						<?php echo $product->get_price_html(); ?>
					</div>
				</div>
			</aside>
		</div>
		<a href="<?php echo get_home_url(); ?>" class="p-[8px_16px] rounded-2xl border-[1px] border-primary hover:bg-primary hover:text-white transition duration-200">POWRÓT DO STRONY GŁÓWNEJ</a>
	</div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>