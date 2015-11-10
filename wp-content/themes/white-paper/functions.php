<?php
function whitepaper_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(166, 124, TRUE);
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'genesis-connect-woocommerce' );
	add_theme_support('woocommerce');
	global $content_width;
	if ( ! isset( $content_width ) )
	$content_width = 960;
    add_image_size( 'my-theme-logo-size', 960, 600, true );
    add_theme_support( 'site-logo', array( 'size' => 'my-theme-logo-size' ) );
    load_theme_textdomain( 'whitepaper', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'whitepaper_setup' );
function whitepaper_fonts(){
  if (!is_admin()) {
    wp_register_style('open-sans', '//fonts.googleapis.com/css?family=Open+Sans');
 	wp_enqueue_style('open-sans', get_stylesheet_uri(), array('open-sans') );
  }
}
add_action('wp_enqueue_scripts', 'whitepaper_fonts');
function whitepaper_widgets_init() {
	register_sidebar( 
		array(
		    'name' => __( 'sidebar-left', 'whitepaper' ),    
		    'id'   => 'sidebar-left',
		) 
	);
	register_sidebar( 
		array(
		    'name' => __( 'sidebar-center', 'whitepaper' ),    
		    'id'   => 'sidebar-center',
		) 
	);
	register_sidebar( 
		array(
		    'name' => __( 'sidebar-right', 'whitepaper' ),    
		    'id'   => 'sidebar-right',
		) 
	);
}
add_action( 'widgets_init', 'whitepaper_widgets_init' );
function whitepaper_frontend() { wp_enqueue_style( 'whitepaper', get_stylesheet_uri() );}
add_action( 'wp_enqueue_scripts', 'whitepaper_frontend' );
add_filter('loop_shop_columns', 'whitepaper_loop_columns');
if (!function_exists('whitepaper_loop_columns')) {
	function whitepaper_loop_columns() {
		return 3;
	}
}
if ( ! function_exists( 'woocommerce_output_related_products' ) ) {
   function woocommerce_output_related_products() {
		$args = array(
		'posts_per_page' => 3,
		'columns' => 3,
		'orderby' => 'rand'
		);
		 woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
	}
}
function whitepaper_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'whitepaper' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'whitepaper_wp_title', 10, 2 );
function whitepaper_scripts() {
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
$args = array(
	'before'           => '<p>' . __('Pages:', 'whitepaper'),
	'after'            => '</p>',
	'link_before'      => '',
	'link_after'       => '',
	'next_or_number'   => 'number',
	'nextpagelink'     => __('Next page', 'whitepaper'),
	'previouspagelink' => __('Previous page', 'whitepaper'),
	'pagelink'         => '%',
	'echo'             => 1
);
function whitepaper_menu() {
	add_theme_page('White Paper Setup', 'Theme Options', 'edit_theme_options', 'whitepaper', 'whitepaper_menu_page');
}
add_action('admin_menu', 'whitepaper_menu');
function whitepaper_menu_page() {
echo '
<br>
	<center><h1>3 Sidebar for theme White Paper</h1></ceter>
<br>
<center><img src="' . get_template_directory_uri() . '/images/white-paper-sidebar.png"></ceter><br><br><br>
<h1><center>Site <a href="http://justpx.com/white-paper-free-documentation/">White Paper</a> - Documentation: Logo, Favicon, Font.</center></h1><br><br>
<h1><center>Localization Ready: Chinese, Dutch, English, French, German, Greek, Hungarian, Italian, Russian, Spanish. Add <a href="http://justpx.com/your-language">Your language</a>. </center></h1><br/><br/>
';
}
function whitepaper_menu2() {
	add_theme_page('White Paper Setup', 'Premium Upgrade', 'edit_theme_options', 'whitepaperpro', 'whitepaper_menu_page2');
}
add_action('admin_menu', 'whitepaper_menu2');
function whitepaper_menu_page2() {
echo '
<br>
<center><h1>Theme White paper PRO</h1></ceter><br>
<center><img src="' . get_template_directory_uri() . '/images/pro-vs-free.png"></center>
<br><br><br>
<h1><center>Site <a href="http://justpx.com/product/white-paper-pro/">White paper PRO</a> - theme, demo.</center></h1><br><br>
<center><h1><font color="#dd3f56">10%</font> Discount (All Themes) - Code: <font color="#dd3f56">justpx10</font></h1></ceter>
<br/><br/><br/><br/>
	<center><h1>White Paper PRO ( No backlink )</h1></ceter>
<br>
<center><img src="' . get_template_directory_uri() . '/images/white-paper-pro.jpg"></center>
<br><br>
	<center><h1>18 Sidebar for theme White Paper PRO ( width: 1280px and No backlink )</h1></ceter>
<br>
<center><img src="' . get_template_directory_uri() . '/images/white-paper-pro-sidebar.jpg"></center>
<br><br>
	<center><h1>5 Sidebar for theme White Paper Bonus ( width: 960px and No backlink )</h1></ceter>
<br>
<center><img src="' . get_template_directory_uri() . '/images/white-paper-sidebar-bonus.jpg"></center>
<br><br>
';
}
?>