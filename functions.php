<?php
add_action('wp_enqueue_scripts', 'add_style_assets');
function add_style_assets()
{
	wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css', array(), false);
	wp_enqueue_style('BootstrapRTL', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.rtl.min.css', array(), false);
	wp_enqueue_style('owlCarouselMin', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false);
	wp_enqueue_style('owlCarouseldefault', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false);
	wp_enqueue_style('styleCss', get_template_directory_uri() . '/style.css', array(), false);
	wp_enqueue_style('fontAwsome', get_template_directory_uri() . '/fonts/FontAwesome/css/font-awesome.min.css', array(), false);

	// Scripts
	wp_enqueue_script('Jque', get_template_directory_uri() . '/js/jquery-3.6.4.min.js', array(), false, true);
	wp_enqueue_script('owlC', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
	wp_enqueue_script('mainJs', get_template_directory_uri() . '/js/main.js', array(), false, true);
	wp_enqueue_script('JavaScript.bundle', get_template_directory_uri() . '/css/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
	wp_enqueue_script('JavaScript', get_template_directory_uri() . '/css/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('JavaScript.bundle2', get_template_directory_uri() . '/css/bootstrap/js/bootstrap.bundle.js', array(), false, true);
}

function mytheme_setup()
{
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails'); //add-photo-post
	add_image_size('post-img', 350, 180, true); //post-size
	add_image_size('cat-img', 285, 180, true); //cat-size

}

add_action('after_setup_theme', 'mytheme_setup');

add_action('init', 'theme_setup');

//add-menu-nav
function theme_setup()
{

	register_nav_menus(
		array(
			'main_menu' => __('منو اصلی'),
			'top_menu' => __('منو بالای هدر'),
		)
	);
}
//end-menu-nav

//exerpt-length
function exerpt_length()
{
	return 10;
}
add_filter('excerpt_length', 'exerpt_length', 999);


//sidebar

function uberdesign_widget()
{
	register_sidebar(
		array(
			'name' => __('ناحیه کناری صفحه داخلی'),
			'id' => 'uberdesign_blog',
			// 'description'   => __( 'هر کدام از ابزارک ها را که نیاز دارید در این قسمت قرار دهید' ),
			'before_widget' => '<div class="border rounded p-2 shadow mb-3">',
			'after_widget' => '</div>',
			'before_title' => '<h1 class="border rounded py-2 ps-2 m-2 mt-3">',
			'after_title' => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name' => __('ناحیه فوتر اول'),
			'id' => 'uberdesign_footer1',
			// 'description'   => __( 'هر کدام از ابزارک ها را که نیاز دارید در این قسمت قرار دهید' ),
			// 'before_widget' => '<div class="">',
			// 'after_widget' => '</div>',
			'before_title' => '<button type="button" class="btn border border-light text-light position-relative my-3">',
			'after_title' => '<span class="position-absolute top-0 start-100 p-2 translate-middle badge rounded-pill bg-success"></span></button>',
		)
	);
	register_sidebar(
		array(
			'name' => __('ناحیه فوتر دوم'),
			'id' => 'uberdesign_footer2',
			// 'description'   => __( 'هر کدام از ابزارک ها را که نیاز دارید در این قسمت قرار دهید' ),
			// 'before_widget' => '<div class="">',
			// 'after_widget' => '</div>',
			'before_title' => '<div><button type="button" class="btn border border-light text-light position-relative my-3">',
			'after_title' => '<span class="position-absolute top-0 start-100 p-2 translate-middle badge rounded-pill bg-success"></button></div>',
		)
	);
	register_sidebar(
		array(
			'name' => __('ناحیه فوتر سوم'),
			'id' => 'uberdesign_footer3',
			// 'description'   => __( 'هر کدام از ابزارک ها را که نیاز دارید در این قسمت قرار دهید' ),
			// 'before_widget' => '<div class="">',
			// 'after_widget' => '</div>',
			'before_title' => '<button type="button" class="btn border border-light text-light position-relative my-3">',
			'after_title' => '<span class="position-absolute top-0 start-100 p-2 translate-middle badge rounded-pill bg-success"></span></button>',
		)
	);
}
add_action('widgets_init', 'uberdesign_widget');
