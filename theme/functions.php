<?php

/**
 * swistak-kurs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package swistak-kurs
 */

if (!defined('SWISTAK_KURS_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('SWISTAK_KURS_VERSION', '0.1.0');
}

if (!defined('SWISTAK_KURS_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `swistak_kurs_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'SWISTAK_KURS_TYPOGRAPHY_CLASSES',
		'prose prose-neutral prose-a:text-primary container'
	);
}

if (!function_exists('swistak_kurs_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function swistak_kurs_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on swistak-kurs, use a find and replace
		 * to change 'swistak-kurs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('swistak-kurs', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'swistak-kurs'),
				'menu-2' => __('Footer Menu', 'swistak-kurs'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'swistak_kurs_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function swistak_kurs_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Footer', 'swistak-kurs'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'swistak-kurs'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'swistak_kurs_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function swistak_kurs_scripts()
{
	wp_enqueue_style('swistak-kurs-style', get_stylesheet_uri(), array(), SWISTAK_KURS_VERSION);
	wp_enqueue_script('swistak-kurs-script', get_template_directory_uri() . '/js/script.min.js', array(), SWISTAK_KURS_VERSION, true);
	wp_enqueue_script('swistak-kurs-script2', get_theme_root_uri() . '/swistak-kurs/javascript/script.js', array(), SWISTAK_KURS_VERSION, true);
	wp_enqueue_script('swistak-kurs-script3', get_template_directory_uri() . '/js/script.js', array(), SWISTAK_KURS_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'swistak_kurs_scripts');

/**
 * Enqueue the block editor script.
 */
function swistak_kurs_enqueue_block_editor_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'swistak-kurs-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			SWISTAK_KURS_VERSION,
			true
		);
		wp_add_inline_script('swistak-kurs-editor', "tailwindTypographyClasses = '" . esc_attr(SWISTAK_KURS_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'swistak_kurs_enqueue_block_editor_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function swistak_kurs_tinymce_add_class($settings)
{
	$settings['body_class'] = SWISTAK_KURS_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'swistak_kurs_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-fields.php';

function generateAddToCartButton($course_id, $btn_text, $additional_classes = ' ')
{
	$course_prod_id = get_post_meta($course_id, '_tutor_course_product_id')[0];

	if (ks_customer_already_ordered_product($course_prod_id)) {
		$html = '<a href="' . get_permalink($course_id) . '" class="mx-auto block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200 ' . $additional_classes . '"> ' . $btn_text . '</a>';
	} else {
		$html = '<form action="' . get_permalink($course_prod_id) . '" method="post" enctype="multipart/form-data" class="text-center"><button type="submit" name="add-to-cart" value="' . $course_prod_id . '" class="mx-auto block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200 ' . $additional_classes . '"><span class="btn-icon tutor-icon-cart-filled"></span><span> ' . $btn_text . '</span></button>' . do_shortcode('[omnibus_price_message id="' . $course_prod_id . '"]') . '</form>';
	}
	echo $html;
}

function ks_customer_already_ordered_product($prod_id)
{
	$product = wc_get_product($prod_id);
	if (!is_user_logged_in() || !$product) return false;

	$user_id = get_current_user_id();
	$args = array(
		'customer_id' => $user_id,
		'limit'       => -1,
	);

	$orders = wc_get_orders($args);

	foreach ($orders as $order) {
		foreach ($order->get_items() as $item) {
			if ($item->get_product_id() == $prod_id) {
				return true;
			}
		}
	}

	return false;
}


/**
 * Enrolled Course Shortcode
 */

function tutor_enrolled_course_register_shortcodes()
{
	add_shortcode('enrolled-course', 'shortcode_tutor_enrolled_course');
}
add_action('init', 'tutor_enrolled_course_register_shortcodes');

/**
 * Shortcode Callback
 */

function shortcode_tutor_enrolled_course($atts)
{
?>

	<h3 class="text-xl md:text-2xl font-semibold mt-10 mb-5 text-foreground"><?php _e('Enrolled Courses', 'tutor'); ?></h3>

	<div class="tutor-dashboard-content-inner flex flex-wrap gap-5 not-prose ">

		<?php
		$my_courses = tutor_utils()->get_enrolled_courses_by_user(get_current_user_id(), array('private', 'publish'));

		if ($my_courses && $my_courses->have_posts()):
			while ($my_courses->have_posts()):
				$my_courses->the_post();
				$tutor_course_img = get_tutor_course_thumbnail_src();
				/**
				 * wp 5.7.1 showing plain permalink for private post
				 * since tutor do not work with plain permalink
				 * url is set to post_type/slug (courses/course-slug)
				 * @since 1.8.10
				 */
				$post = $my_courses->post;
				$custom_url = get_permalink($post);
		?>
				<a href="<?php echo esc_url($custom_url); ?>" class="flex flex-col rounded-2xl overflow-hidden hover:border-primary transition duration-200 border border-[#dcdfe5] max-w-96 not-prose">
					<img src="<?php echo esc_url($tutor_course_img); ?>" class="aspect-[4/3] object-cover w-full !m-0">
					<div class="tutor-mycourse-content p-5 flex flex-col">
						<h3 class="font-semibold text-primary text-lg md:text-xl"><?php the_title(); ?></h3>

						<div class="tutor-meta tutor-course-metadata">
							<?php
							$total_lessons = tutor_utils()->get_lesson_count_by_course();
							$completed_lessons = tutor_utils()->get_completed_lesson_count_by_course();
							?>
							<p>
								<?php
								_e('Completed Lessons:', 'tutor');
								echo "<span> $completed_lessons/$total_lessons</span>";
								?>
							</p>
						</div>
					</div>

				</a>

		<?php
			endwhile;

			wp_reset_postdata();
		else:
			echo "<div class='tutor-mycourse-wrap'><div class='p-3 tutor-mycourse-content'>" . __('You haven\'t purchased any course', 'swistak-kurs') . "</div></div>";
		endif;

		?>

	</div>
<?php }

add_filter('woocommerce_checkout_fields', 'customize_checkout_fields');

function customize_checkout_fields($fields)
{
	unset($fields['billing']['billing_address_2']);
	unset($fields['order']['order_comments']);
	$fields['billing']['billing_postcode']['class'] = array('form-row-first', 'address-field');
	$fields['billing']['billing_city']['class'] = array('form-row-last', 'address-field');
	$fields['billing']['billing_phone']['required'] = false;

	return $fields;
};

add_filter('woocommerce_default_address_fields', 'override_default_locale_fields');

function override_default_locale_fields($fields)
{
	$fields['postcode']['class'] = array('form-row-first', 'address-field');
	$fields['city']['class'] = array('form-row-last', 'address-field');

	return $fields;
};

remove_action('woocommerce_checkout_order_review', 'woocommerce_order_review', 10);
add_action('woocommerce_after_order_notes', 'woocommerce_order_review', 10);

function has_ordered_but_not_enrolled($user_id, $course_id)
{
	$product_id = tutor_utils()->get_course_product_id($course_id);

	if (ks_customer_already_ordered_product($product_id)) {
		$is_enrolled = tutor_utils()->is_enrolled($course_id, $user_id);

		if (! $is_enrolled) {
			return true;
		}
	}

	return false;
}

function check_and_redirect_if_not_enrolled()
{
	if (is_user_logged_in()) {
		global $post;

		if (is_singular('courses')) {
			$user_id = get_current_user_id();
			$course_id = $post->ID;

			if (has_ordered_but_not_enrolled($user_id, $course_id)) {
				wp_redirect(wc_get_page_permalink('myaccount'));
				exit;
			}
		}
	}
}

function swistak_kurs_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'swistak_kurs_add_woocommerce_support');



add_filter('woocommerce_add_to_cart_validation', 'check_if_product_in_cart', 10, 2);

function check_if_product_in_cart($passed, $product_id) {
	if( in_array( $product_id, array_column( WC()->cart->get_cart(), 'product_id' ) ) ) {
		wp_safe_redirect(wc_get_cart_url());
		exit;
	}
	return $passed;
}

function check_and_redirect_if_product_is_course() {
	if (is_product()) {
		global $post;
		$product_id = $post->ID;

		$course = tutor_utils()->product_belongs_with_course($product_id);
		if (!empty($course)) {
			wp_safe_redirect(get_permalink($course->post_id));
			exit;
		}
	}
}

function custom_redirects(){
	check_and_redirect_if_not_enrolled();
	check_and_redirect_if_product_is_course();
};
add_action('template_redirect', 'custom_redirects');

add_filter( 'woocommerce_cart_needs_shipping_address', '__return_false' );