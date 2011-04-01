<?php
/**
 * @package WordPress
 * @subpackage openAgroClimate
 */

/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 */
load_theme_textdomain( 'oac_theme' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

/**
 * This theme uses wp_nav_menu() in one location.
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'oac_theme' ),
	'header'  => __( 'Header Menu',  'oac_theme' ),
	'footer'  => __( 'Footer Menu',  'oac_theme' )
) );

// Removes ul class from wp_nav_menu
function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

/**
 * Add default posts and comments RSS feed links to head
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function agroclimate_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'agroclimate_page_menu_args' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function openAgroClimate_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar 1', 'oac_theme' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

	register_sidebar( array (
		'name' => __( 'Sidebar 2', 'oac_theme' ),
		'id' => 'sidebar-2',
		'description' => __( 'An optional second sidebar area', 'oac_theme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );	
}


function displayENSO() {
    $ensoid    = get_option( 'oac_display_enso', '' );
    $ensotext  = get_option('oac_display_enso_text', '');
    $ensocolor = $ensophase = '';
    $display   = true;
    switch( $ensoid ) {
        case 'N':
            $ensocolor = 'neutral';
            $ensophase = __( 'Neutral ');
            break;
        case 'E':
            $ensocolor = 'nino';
            $ensophase = __( 'El Ni&#241;o' );
            break;
        case 'L':
            $ensocolor = 'nina';
            $ensophase = __( 'La Ni&#241;a' );
            break;
        default:
            $display = false;
            break;
    }
    if( $display ) {
        echo '<span class="climatePhase">';
        echo '<h3 class="'.$ensocolor.'">'.__( 'Current Phase', 'oac_theme').': '.$ensophase.'</h3>';
        echo '<p>'.nl2br( $ensotext ).'</p></span>';
    } 
}    
add_action( 'init', 'openAgroClimate_widgets_init' );
