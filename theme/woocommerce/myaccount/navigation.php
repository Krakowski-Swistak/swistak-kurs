<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.3.0
 */

if (!defined('ABSPATH')) {
  exit;
}

do_action('woocommerce_before_account_navigation');
?>


<nav class="not-prose woocommerce-MyAccount-navigation pt-10 lg:pb-10 !w-full float-none lg:float-left lg:!w-[30%] ">
  <div class="nav-container px-5 md:px-8 py-9 border border-[#888] rounded-[15px] ">
    <ul class="!list-none !pl-0">
      <?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
        <li class="py-1 [&.is-active_a]:text-primary <?php echo wc_get_account_menu_item_classes($endpoint); ?>">
          <a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" class="text-lg transition duration-200 hover:text-primary" <?php echo wc_is_current_account_menu_item( $endpoint ) ? 'aria-current="page"' : ''; ?>><?php echo esc_html($label); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>

<?php do_action('woocommerce_after_account_navigation'); ?>