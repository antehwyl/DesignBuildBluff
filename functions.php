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

  wp_register_style( 'contact', get_stylesheet_directory_uri().'/css/contact.css',
    array(), 'VERSION', 'all' );
  wp_enqueue_style( 'contact' );

	if( is_page_template ('page-templates/home.php') ):
	    wp_register_style( 'home', get_stylesheet_directory_uri().'/css/home.css',
	    array(), 'VERSION', 'all' );
		wp_enqueue_style( 'home' );
	endif;

  if( is_page_template ('page-templates/our_work.php') ):
      wp_register_style( 'our_work', get_stylesheet_directory_uri().'/css/our_work.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'our_work' );
  endif;

  if( is_single() ):
      wp_register_style( 'project_page', get_stylesheet_directory_uri().'/css/project_page.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'project_page' );
  endif;

  if( is_page_template ('page-templates/about_us_approach.php') ):
      wp_register_style( 'about_approach', get_stylesheet_directory_uri().'/css/about_approach.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'about_approach' );
  endif;

  if( is_page_template ('page-templates/about_us_people.php') ):
      wp_register_style( 'about_people', get_stylesheet_directory_uri().'/css/about_people.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'about_people' );
  endif;
}

add_action('wp_enqueue_scripts', 'add_theme_styles');

/////////////////////////////////////////////////////////////////

function add_theme_scripts() {
	
  if( is_page_template ('page-templates/home.php') ):
    wp_register_script('backstretch', get_stylesheet_directory_uri().'/js/backstretch.min.js', false, false, true);
    wp_enqueue_script( 'backstretch' );

    wp_register_script('home', get_stylesheet_directory_uri().'/js/home.js', false, false, true);
    wp_enqueue_script( 'home' );
  endif;

  if( is_page_template ('page-templates/our_work.php') ):
    wp_register_script('backstretch', get_stylesheet_directory_uri().'/js/backstretch.min.js', false, false, true);
    wp_enqueue_script( 'backstretch' );

    wp_register_script('our_work', get_stylesheet_directory_uri().'/js/our_work.js', false, false, true);
    wp_enqueue_script( 'our_work' );
  endif;

  if( is_page_template ('page-templates/about_us_approach.php') ):
    wp_register_script('fancybox', get_stylesheet_directory_uri().'/js/fancybox/jquery.fancybox.pack.js', false, false, true);
    wp_enqueue_script( 'fancybox' );

    wp_register_script('fancybox-media', get_stylesheet_directory_uri().'/js/fancybox/helpers/jquery.fancybox-media.js', false, false, true);
    wp_enqueue_script( 'fancybox-media' );

    wp_register_script('lightboxes', get_stylesheet_directory_uri().'/js/lightboxes.js', false, false, true);
    wp_enqueue_script( 'lightboxes' );
  endif;

  if( is_page_template ('page-templates/about_us_approach.php') ):
    wp_register_script('backstretch', get_stylesheet_directory_uri().'/js/backstretch.min.js', false, false, true);
    wp_enqueue_script( 'backstretch' );

    wp_register_script('about_approach', get_stylesheet_directory_uri().'/js/about_approach.js', false, false, true);
    wp_enqueue_script( 'about_approach' );
  endif;

  if( is_page_template ('page-templates/about_us_people.php') ):
    wp_register_script('backstretch', get_stylesheet_directory_uri().'/js/backstretch.min.js', false, false, true);
    wp_enqueue_script( 'backstretch' );

    wp_register_script('isotope', get_stylesheet_directory_uri().'/js/isotope.min.js', false, false, true);
    wp_enqueue_script( 'isotope' );

    wp_register_script('about_people', get_stylesheet_directory_uri().'/js/about_people.js', false, false, true);
    wp_enqueue_script( 'about_people' );
  endif;

	/*if( is_page_template ('page-templates/teaser_page.php') ):
    

     

    wp_register_script('stretcher', get_stylesheet_directory_uri().'/js/stretcher.js', false, false, true);
    wp_enqueue_script( 'stretcher' ); 
    endif;*/
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/////////////////////////////////////////////////////////////////

//Gets post cat slug and looks for single-[cat slug].php and applies it
//allows templates for post categories
add_filter('single_template', create_function(
  '$the_template',
  'foreach( (array) get_the_category() as $cat ) {
    if ( file_exists(STYLESHEETPATH . "/single-{$cat->slug}.php") )
    return STYLESHEETPATH . "/single-{$cat->slug}.php"; }
  return $the_template;' )
);

/////////////////////////////////////////////////////////////////

