<?php
/*
*	Design Build Bluff Functions
*/


define("THEME_DIR", get_stylesheet_directory());
define("TEMPLATE_DIR", get_stylesheet_directory_uri().'/page-templates');
define("JS_DIR", THEME_DIR.'/js');
define("CSS_DIR", THEME_DIR.'/css');
define("IMG_DIR", THEME_DIR.'/images');
define("INCLUDES_DIR", THEME_DIR.'/includes');

/////////////////////////////////////////////////////////////////

function add_theme_styles(){

	wp_register_style( 'fancybox', get_stylesheet_directory_uri().'/js/fancybox/jquery.fancybox.css',
    array(), 'VERSION', 'all' );
	wp_enqueue_style( 'fancybox' );

  wp_register_style( 'nav', get_stylesheet_directory_uri().'/css/nav.css',
    array(), 'VERSION', 'all' );
  wp_enqueue_style( 'nav' );

  wp_register_style( 'footer', get_stylesheet_directory_uri().'/css/footer.css',
    array(), 'VERSION', 'all' );
  wp_enqueue_style( 'footer' );

	if( is_page_template ('page-templates/home.php') ):
	    wp_register_style( 'teaser_page', get_stylesheet_directory_uri().'/css/home.css',
	    array(), 'VERSION', 'all' );
		wp_enqueue_style( 'teaser_page' );
	endif;
}

add_action('wp_enqueue_scripts', 'add_theme_styles');

/////////////////////////////////////////////////////////////////

function add_theme_scripts() {
	 
	/*if( is_page_template ('page-templates/teaser_page.php') ):
    wp_register_script('fancybox', get_stylesheet_directory_uri().'/js/fancybox/jquery.fancybox.pack.js', false, false, true);
    wp_enqueue_script( 'fancybox' );

    wp_register_script('fancybox-media', get_stylesheet_directory_uri().'/js/fancybox/helpers/jquery.fancybox-media.js', false, false, true);
    wp_enqueue_script( 'fancybox-media' );

    wp_register_script('lightboxes', get_stylesheet_directory_uri().'/js/lightboxes.js', false, false, true);
    wp_enqueue_script( 'lightboxes' );

    wp_register_script('backstretch', get_stylesheet_directory_uri().'/js/backstretch.min.js', false, false, true);
    wp_enqueue_script( 'backstretch' ); 

    wp_register_script('stretcher', get_stylesheet_directory_uri().'/js/stretcher.js', false, false, true);
    wp_enqueue_script( 'stretcher' ); 
    endif;*/
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/////////////////////////////////////////////////////////////////

/*
*	Gets post cat slug and looks for single-[cat slug].php and applies it
*	allows templates for post categories
*/

add_filter('single_template', create_function(
  '$the_template',
  'foreach( (array) get_the_category() as $cat ) {
    if ( file_exists(STYLESHEETPATH . "/single-{$cat->slug}.php") )
    return STYLESHEETPATH . "/single-{$cat->slug}.php"; }
  return $the_template;' )
);

/////////////////////////////////////////////////////////////////

/*register_sidebar(array(
    'name'=>'Nav Search',
    'id'=>'nav_search',
    'before_widget'=>'<div id="nav-search">',
    'after_widget'=>'</div>',
    'before_title'=>'<h3 id="nav-search-title">',
    'after_title'=>'</h3>',
  ));*/