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

    wp_register_style( 'post', get_stylesheet_directory_uri().'/css/post.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'post' );
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

  if( is_page_template ('page-templates/about_us_impact.php') ):
      wp_register_style( 'about_impact', get_stylesheet_directory_uri().'/css/about_impact.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'about_impact' );
  endif;

  if( is_page_template ('page-templates/get_involved.php') ):
      wp_register_style( 'get_involved', get_stylesheet_directory_uri().'/css/get_involved.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'get_involved' );
  endif;

  if( is_home() || is_archive() ):
      wp_register_style( 'blog', get_stylesheet_directory_uri().'/css/blog.css',
      array(), 'VERSION', 'all' );
    wp_enqueue_style( 'blog' );
  endif;
}

add_action('wp_enqueue_scripts', 'add_theme_styles');

/////////////////////////////////////////////////////////////////

function add_theme_scripts() {
	
  wp_register_script('contact', get_stylesheet_directory_uri().'/js/contact.js', false, false, true);
  wp_enqueue_script( 'contact' );

  wp_register_script('nav', get_stylesheet_directory_uri().'/js/nav.js', false, false, true);
  wp_enqueue_script( 'nav' );

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

  if( is_page_template ('page-templates/about_us_impact.php') ):
    wp_register_script('fancybox', get_stylesheet_directory_uri().'/js/fancybox/jquery.fancybox.pack.js', false, false, true);
    wp_enqueue_script( 'fancybox' );

    wp_register_script('fancybox-media', get_stylesheet_directory_uri().'/js/fancybox/helpers/jquery.fancybox-media.js', false, false, true);
    wp_enqueue_script( 'fancybox-media' );

    wp_register_script('lightboxes', get_stylesheet_directory_uri().'/js/lightboxes.js', false, false, true);
    wp_enqueue_script( 'lightboxes' );
  endif;

  if( is_page_template ('page-templates/about_us_people.php') ):
    wp_register_script('backstretch', get_stylesheet_directory_uri().'/js/backstretch.min.js', false, false, true);
    wp_enqueue_script( 'backstretch' );

    wp_register_script('isotope', get_stylesheet_directory_uri().'/js/isotope.min.js', false, false, true);
    wp_enqueue_script( 'isotope' );

    wp_register_script('about_people', get_stylesheet_directory_uri().'/js/about_people.js', false, false, true);
    wp_enqueue_script( 'about_people' );
  endif;

  

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

//exclude project posts from blog pages

function exclude_category($query) {
if ( $query->is_home() ) {//add all pages you want to exclude them on here!
$query->set('cat', '-141');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');

/////////////////////////////////////////////////////////////////

//trim the excerpt 
function replace_excerpt($content) {
       return str_replace('[&hellip;]',
               '...',
               $content
       );
}
add_filter('get_the_excerpt', 'replace_excerpt');

//////////////////////////////////////////////////////////////////
//return first image from the_content()
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "";
  }
  return $first_img;
}

///////////////////////////////////////////////////////////////////
//undo the autoP that happens with the content
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

//////////////////////////////////////////////////////////////////
//label current selected archive with class "current"
function wpse_62509_current_month_selector( $link_html ) {
    if (is_month()){
        $current_month = get_the_date("F Y");
        if ( preg_match('/'.$current_month.'/i', $link_html ) )
            $link_html = preg_replace('/<option/i', '<option class="current" selected="selected"', $link_html );
    }
    return $link_html;
}

add_filter( 'get_archives_link', 'wpse_62509_current_month_selector' );

/////////////////////////////////////////////////////////////////
function remove_acf(){
  remove_menu_page( 'edit.php?post_type=acf' ); 
}
add_action( 'admin_menu', 'remove_acf',100 );
