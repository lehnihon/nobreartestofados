<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function site_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on site, use a find and replace
	 * to change 'site' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'site', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'site' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'site_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_image_size('home-thumb',780,300,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function site_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'site_content_width', 640 );
}
add_action( 'after_setup_theme', 'site_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function site_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'site' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'site_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'site-style-bxslider', get_template_directory_uri() ."/bootstrap/css/bootstrap.min.css" );
	wp_enqueue_style( 'site-style-bootstrap', get_template_directory_uri() ."/js/jquery.bxslider.css" );
	wp_enqueue_style( 'site-style-animate', get_template_directory_uri() ."/animate.css" );
	wp_enqueue_style( 'site-style-lightbox', get_template_directory_uri() ."/js/lightbox2/src/css/lightbox.css" );
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );

	wp_enqueue_script( 'site-script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script( 'site-script-jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js');
	wp_enqueue_script( 'site-script-mask', get_template_directory_uri() . '/js/jquery.mask.min.js');
	wp_enqueue_script( 'site-script-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-lightbox', get_template_directory_uri() . '/js/lightbox2/src/js/lightbox.js',array(),false,true);
	wp_enqueue_script( 'site-script-site', get_template_directory_uri() . '/js/script.js');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

function template_chooser($template)   
{    
	global $wp_query;   
	$post_type = get_query_var('post_type');   
	if( isset($_GET['s']) && $post_type == 'blog' )   
	{
		return locate_template('search-blog.php');  //  redirect to archive-search.php
	}   
	return $template;   
}
add_filter('template_include', 'template_chooser');

/**
 * CUSTOM POST TYPE
 */

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Tapeçaria';
    $submenu['edit.php'][5][0] = 'Tapeçaria';
    $submenu['edit.php'][10][0] = 'Adicionar Tapeçaria';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Tapeçaria';
        $labels->singular_name = 'Tapeçaria';
        $labels->add_new = 'Adicionar Tapeçaria';
        $labels->add_new_item = 'Adicionar Tapeçaria';
        $labels->edit_item = 'Editar Tapeçaria';
        $labels->new_item = 'Tapeçaria';
        $labels->view_item = 'Ver Tapeçaria';
        $labels->search_items = 'Procurar Tapeçaria';
        $labels->not_found = 'Tapeçariao não encontrado';
        $labels->not_found_in_trash = 'Sem Tapeçarias na lixeira';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

function register_post_type_blog(){
	$singular = 'Reforma de Estofado';
	$plural = 'Reforma de Estofados';
	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'add_new_item' => 'Adicionar novo '.$singular,
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_position' => 5
		);

	register_post_type('blog',$args);
}
add_action(	'init','register_post_type_blog');
flush_rewrite_rules();

function register_post_type_fotos(){
	$singular = 'Impermeabil.';
	$plural = 'Impermeabili.';
	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'add_new_item' => 'Adicionar nova '.$singular,
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_position' => 5
		);

	register_post_type('fotos',$args);
}
add_action(	'init','register_post_type_fotos');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load bootstrap integration.
 */
require get_template_directory() . '/inc/bootstrap_integration.php';

