<?php
/**
 * hygieia functions and definitions
 *
 * @package hygieia
 */


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Global Content',
    'menu_title'  => 'Global Content',
    'menu_slug'   => 'global-content',
    'capability'  => 'edit_posts',
  ));

}

//Additional Media Library Sizes
add_image_size( 'leadership-thumb', 206, 181, true );
add_image_size( 'leadership-full', 309, 281, true );


function tinymce_buttons($buttons)
 {
    return array(
      'bold', 'italic', 'underline', 'bullist', 'numlist', 'blockquote', 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'link', 'unlink', 'anchor', 'wp_more', 'wp_fullscreen', 'wp_adv'
    );
 }
add_filter('mce_buttons','tinymce_buttons');

function tinymce_buttons_2($buttons)
 {
    return array(
      'formatselect', 'pastetext', 'pasteword', 'sub', 'sup', 'charmap', 'hr', 'removeformat', 'undo', 'redo', 'code'
    );
 }
add_filter('mce_buttons_2','tinymce_buttons_2');


// Set Media Library to not link images by default
update_option('image_default_link_type','none');


/* Change the Gravity forms submit button to a button type */
add_filter( 'gform_submit_button', 'form_submit_button', 10, 5 );
function form_submit_button ( $button, $form ){
    $button = str_replace( "input", "button", $button );
    $button = str_replace( "/", "", $button );
    $button .= "{$form['button']['text']}</button>";
    return $button;
}


/*
* Remove Admin Bar on Front End
*/
//add_filter('show_admin_bar', '__return_false');



/*
* If search is submitted with no terms
*/
add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}



if ( ! function_exists( 'hygieia_setup' ) ) :
function hygieia_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on hygieia, use a find and replace
   * to change '_s' to the name of your theme in all the template files
   */
  load_theme_textdomain( '_s', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );


  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', '_s' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  ) );

}
endif; // hygieia_setup
add_action( 'after_setup_theme', 'hygieia_setup' );





/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hygieia_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', '_s' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
}
add_action( 'widgets_init', 'hygieia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hygieia_scripts() {

  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic');
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  wp_enqueue_style( '_m-style', get_stylesheet_uri() );
  wp_enqueue_style( 'select2-css', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css' );


  wp_enqueue_script( '_m-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
  wp_enqueue_script( 'select2-script', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js', array('jquery'), '20150809', true );
  wp_enqueue_script( '_m-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '20150809', true );
  wp_enqueue_script( '_m-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', '_m-plugins'), '20150809', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'hygieia_scripts' );




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';