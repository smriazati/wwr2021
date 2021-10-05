<?php
/**
 * wwr2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wwr2021
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wwr2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wwr2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wwr2021, use a find and replace
		 * to change 'wwr2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wwr2021', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'wwr2021' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wwr2021_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'wwr2021_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wwr2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wwr2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'wwr2021_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function wwr2021_scripts() {
	wp_enqueue_style( 'wwr2021-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wwr2021-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wwr2021-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wwr2021_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
// get new customizers
new WWRFrontPage_Customizer();

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* Remove URL field from comments to deter spam */
// function remove_url_comments($fields) {
// 	unset($fields['url’]);
// 	return $fields;
// }	

// add_filter('comment_form_default_fields’,’remove_url_comments’);


// function wwr_customize_register( $wp_customize ) {
// 	//All our sections, settings, and controls will be added here
  
// 	// $wp_customize->remove_section( 'title_tagline');
// 	$wp_customize->remove_section( 'colors');
// 	$wp_customize->remove_section( 'header_image');
// 	$wp_customize->remove_section( 'background_image');
// 	$wp_customize->remove_panel( 'nav_menus');
// 	// $wp_customize->remove_section( 'static_front_page');
// 	// $wp_customize->remove_section( 'custom_css');  
//   }

//   add_action( 'customize_register', 'wwr_customize_register', 50);

  function wwr_customize_register_custom_new_menu() {
	register_nav_menu('social-menu',__( 'Social Menu', 'wwr2021' ));
	register_nav_menu('footer-legal-menu',__( 'Footer Legal Menu', 'wwr2021' ));
	register_nav_menu('mobile-extra-menu',__( 'Mobile Extra Menu', 'wwr2021' ));
  }
  add_action( 'init', 'wwr_customize_register_custom_new_menu' );


  /* Better way to add multiple widgets areas */
function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
 
function multiple_widget_init(){
    widget_registration('Footer column 1', 'footer-column-1', '', '', '', '', '');
    widget_registration('Footer column 2', 'footer-column-2', '', '', '', '', '');
	widget_registration('Footer column 3', 'footer-column-3', '', '', '', '', '');
    widget_registration('Footer column 4', 'footer-column-4', '', '', '', '', '');
    widget_registration('Shop page sidebar', 'shop-sidebar', '', '', '', '', '');
    // ETC...
}
 
add_action('widgets_init', 'multiple_widget_init');







/**
 * Register custom fonts
 */
function wwr2021_register_custom_fonts() {
    wp_register_style( 'typekit', 'https://use.typekit.net/foc8mmy.css' );
    wp_enqueue_style( 'typekit' );

    wp_register_style( 'local webfonts', get_stylesheet_directory_uri() . '/assets/fonts/webfonts.css' );
    wp_enqueue_style( 'local webfonts' );
}

add_action( 'wp_enqueue_scripts', 'wwr2021_register_custom_fonts' );


/* custom logo */

function wwr20201custom_logo_setup() {
    $defaults = array(
        'height'      => 50,
        'width'       => 500,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'wwr20201custom_logo_setup' );

/**
* shorten excerpt
 */
add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );

/**
 * Change the excerpt more string
 */
function my_theme_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'my_theme_excerpt_more' );

/* add home page featured image size */

add_action( 'after_setup_theme', 'wwr2021_add_image_sizes' );
function wwr2021_add_image_sizes() {
    add_image_size( 'homepage-thumb', 9999, 500, false ); 
	add_image_size( 'bio-square', 800, 800, true ); 
	add_image_size( 'sm-square', 350, 350, true ); 
}


add_filter( 'get_the_archive_title', function ($title) {    
	if ( is_category() ) {    
		$title = single_cat_title( '', false );    
	} 
	return $title;    
});

add_action( 'pre_get_posts', function ($query) {
    if ( ! is_admin() && is_archive() && is_category() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 9 );
    }
});

function custom_page_scripts() {
    if( is_archive() ){
		if (is_category() ) {
			wp_enqueue_script( 'archive', get_template_directory_uri() .'/js/archive.js', array(), '1.0.0', true );
		}
    }
	wp_enqueue_script( 'slider', get_template_directory_uri() .'/js/slider.js', array(), '1.0.0', true );

	if( is_shop() ){
		wp_enqueue_script( 'shop', get_template_directory_uri() .'/js/shop.js', array(), '1.0.0', true );
		
    }
	if( is_product() ){
		wp_enqueue_script( 'product', get_template_directory_uri() .'/js/product.js', array(), '1.0.0', true );
    }
	
	wp_enqueue_script( 'wwr2021-header', get_template_directory_uri() . '/js/header.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'custom_page_scripts' );

function wwr2021_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 284,
		'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 4,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 3,
            'min_columns'     => 3,
            'max_columns'     => 3,
        ),
	) );
}
add_action( 'after_setup_theme', 'wwr2021_add_woocommerce_support' );



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

if (is_shop()) {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
}

add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb_wrapper_start', 19);
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb_wrapper_end', 21);

function woocommerce_breadcrumb_wrapper_start() {
    echo '<div class="breadcrumb-wrapper">';
}
function woocommerce_breadcrumb_wrapper_end() {
    echo '</div>';
}
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_sidebar', 'my_theme_wrapper_end', 10);


add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product', 'wwr2021_related_products_wrapper_start', 19);
add_action('woocommerce_after_single_product', 'wwr2021_related_products_wrapper_end', 21);

// move main description
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'add_description_title', 19);
add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

function add_description_title() {
	echo '<h3 class="description-title">About</h3>';
}
function my_theme_wrapper_start() {
    echo '<main class="shop shop-main">';
	if( !is_product() ) :
		echo '<div class="wrapper grid-fixed">';
   	endif; 
}
function my_theme_wrapper_end() {
	if( !is_product() ) :
		echo '</div>';
   	endif; 
    echo '</main>';
}

function wwr2021_related_products_wrapper_start() {
    echo '<div class="related-products-wrapper full-width">';
}

function wwr2021_related_products_wrapper_end() {
	echo '</div>';
}

// add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_filter( 'woocommerce_get_breadcrumb', function($crumbs, $Breadcrumb){
	$shop_page_id = wc_get_page_id('shop'); //Get the shop page ID
	if($shop_page_id > 0 && !is_shop()) { //Check we got an ID (shop page is set). Added check for is_shop to prevent Home / Shop / Shop as suggested in comments
		$new_breadcrumb = [
			_x( 'Shop', 'breadcrumb', 'woocommerce' ), //Title
			get_permalink(wc_get_page_id('shop')) // URL
		];
		array_splice($crumbs, 1, 0, [$new_breadcrumb]); //Insert a new breadcrumb after the 'Home' crumb

		array_shift($crumbs);
	}
	return $crumbs;
}, 10, 2 );


add_action('woocommerce_sidebar', 'add_featured_shop_products', 30);

function add_featured_shop_products() {
	if (!is_product()) {
		get_template_part( 'template-parts/featured-shop-products');
	}
}


// remove archive description
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

// mailchimp
function setMailchimpPopup() {
	echo '<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/6f0842b54548b3d85ce92d256/d19f5504312fc93369a3fff20.js");</script>';
}

add_action( 'wp_head', 'setMailchimpPopup' );

