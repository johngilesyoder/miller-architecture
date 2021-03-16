<?php

/*------------------------------------*\
Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support')) {
  // Add Menu Support
  add_theme_support('menus');

  // Add Thumbnail Theme Support
  add_theme_support('post-thumbnails');
  add_image_size('large', 700, '', true); // Large Thumbnail
  add_image_size('medium', 250, '', true); // Medium Thumbnail
  add_image_size('small', 120, '', true); // Small Thumbnail
  add_image_size('blogroll', 960, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

  // Enables post and comment RSS feed links to head
  add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
Functions
\*------------------------------------*/

// Register Custom Navigation Walker
require_once 'wp_bootstrap_navwalker.php';

// Bootstrap primary navigation
function primary_nav() {
  wp_nav_menu(
    array(
      'theme_location'  => 'main',
      'menu'            => '',
      'container'       => false,
      'container_class' => 'menu-{menu slug}-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '<span>',
      'link_after'      => '</span>',
      'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
      'depth'           => 2,
      'walker'          => new wp_bootstrap_navwalker(),
    )
  );
}

function footer_menu() {
  $location = 'footer-menu';
  get_menu_by_location($location);
  $menu_obj = get_menu_by_location($location);
  wp_nav_menu(array('theme_location' => $location, 'items_wrap' => '<h4>' . esc_html($menu_obj->name) . '</h4><ul id="footer-menu" class="footer-menu">%3$s</ul>'));
}

function get_menu_by_location($location) {
  if (empty($location)) {
    return false;
  }

  $locations = get_nav_menu_locations();
  if (!isset($locations[$location])) {
    return false;
  }

  $menu_obj = get_term($locations[$location], 'nav_menu');
  return $menu_obj;
}

// Load scripts (header.php)
function miller_header_scripts() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_register_script('modernizr', get_template_directory_uri() . '/src/asset/js/lib/modernizr-3.5.js', array(), '3.5');
    wp_enqueue_script('modernizr'); // Enqueue it!


    wp_register_script('jquery-new', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
    wp_enqueue_script('jquery-new'); // Enqueue it!

    wp_register_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-popper'); // Enqueue it!

    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap'); // Enqueue it!

    wp_register_script('miller-scripts', get_template_directory_uri() . '/dist/asset/js/bundle.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('miller-scripts'); // Enqueue it!

  }
}

// Load conditional scripts
function miller_conditional_scripts() {
  
  // IF Home Page
  if (is_front_page()) {

    wp_register_script('home', get_template_directory_uri() . '/dist/asset/js/home.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('home'); // Enqueue it!

  }

  // IF Portfolio archive OR Portfolio taxonomy
  if ( is_post_type_archive( 'portfolio' ) || is_tax( 'portfolio-category' ) ) {
    wp_register_script('portfolio', get_template_directory_uri() . '/dist/asset/js/portfolio.js', array('jquery'), null, true);
    wp_enqueue_script('portfolio'); // Enqueue it!
  }

  // IF Project page single
  if ( is_singular('portfolio') ) {
    //wp_register_script('project', get_template_directory_uri() . '/dist/asset/js/project.js', array('jquery'), null, true);
    //wp_enqueue_script('project'); // Enqueue it!
  }

    // IF Community Page template
    if ( is_page_template('template-community.php') ) {
      wp_register_script('community', get_template_directory_uri() . '/dist/asset/js/community.js', array('jquery'), null, true);
      wp_enqueue_script('community'); // Enqueue it!
    }

}

// Load styles
function miller_styles() {

  wp_register_style('styles', get_template_directory_uri() . '/dist/asset/css/bundle.css', array(), '1.0.5', 'all');
  wp_enqueue_style('styles'); // Enqueue it!

}

// Load conditional styles
function miller_conditional_styles() {

}

// Register Navigation
function register_html5_menu() {
  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu'             => __('Header Menu', 'primary'),
    'footer-menu'           => __('Footer Menu 1', 'secondary'),
  ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
  $args['container'] = false;
  return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
  return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
  return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
  global $post;
  if (is_home()) {
    $key = array_search('blog', $classes);
    if ($key > -1) {
      unset($classes[$key]);
    }
  } elseif (is_page()) {
    $classes[] = sanitize_html_class($post->post_type . '-' . $post->post_name);
  } elseif (is_singular()) {
    $classes[] = sanitize_html_class($post->post_name);
  }

  return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {

  // Define Sidebar Widget Area
  register_sidebar(array(
    'name'          => __('Global Sidebar', 'miller'),
    'description'   => __('The global sidebar', 'miller'),
    'id'            => 'global-sidebar',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
  global $wp_widget_factory;
  remove_action('wp_head', array(
    $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
    'recent_comments_style',
  ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination() {
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'base'    => str_replace($big, '%#%', get_pagenum_link($big)),
    'format'  => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total'   => $wp_query->max_num_pages,
  ));
}

// Custom Excerpts
function html5wp_index($length) { // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
    return 20;
}
function html5wp_custom_post($length) { // Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

// Remove Admin bar
function remove_admin_bar() {
  return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag) {
  return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html) {
  $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
  return $html;
}

// Custom Gravatar in Settings > Discussion
function millergravatar($avatar_defaults) {
  $myavatar                   = get_template_directory_uri() . '/img/gravatar.jpg';
  $avatar_defaults[$myavatar] = "Custom Gravatar";
  return $avatar_defaults;
}


/*------------------------------------*\
Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'miller_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'miller_conditional_scripts'); // Add Conditional Page Scripts
//add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'miller_styles', 15); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'miller_conditional_styles'); // Add Conditional Theme Stylesheets
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'millergravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images


// GALLERY STUFF
add_filter( 'use_default_gallery_style', '__return_false' );
add_theme_support( 'html5', array( 'gallery', 'caption' ) );
add_shortcode( 'gallery', 'modified_gallery_shortcode' );
function modified_gallery_shortcode($attr) {
    $attr['link']="none";
    $output = gallery_shortcode($attr);
    return $output;
}

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
//add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
//add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
// function html5_shortcode_demo($atts, $content = null) {
//   return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
// }

// Shortcode Demo with simple <h2> tag
// function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
// {
//   return '<h2>' . $content . '</h2>';
// }

// Enable ACF Global Options Page
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}


add_filter('post_gallery','customFormatGallery',10,2);

function customFormatGallery($string,$attr){

    $output = "<div class=\"gallery\">";
    $posts = get_posts(array('include' => $attr['ids'],'post_type' => 'attachment'));

    foreach($posts as $imagePost){
        $output .= "<img class='gallery-item' src='".wp_get_attachment_image_src($imagePost->ID, 'full')[0]."' data-media=\"(min-width: 940)\">";
    }

    $output .= "</div>";

    return $output;
}


/**
 * Get tags, filtered by the taxonomy term, if one was selected.
 *
 * @return WP_Query Tags in the taxonomy term if one was selected, else all.
 */
function get_tags_in_taxonomy_term() {

	return new WP_Query( array(
			'post_type'      => 'project', // Change this to the slug of your post type.
			'posts_per_page' => 500, // Display a maximum of 500 options in the dropdown.
			'tax_query'      => get_tags_in_taxonomy_term_tax_query(),
	) );

}


/**
 * Get the taxonomy query to be used by km_get_tools_in_taxonomy_term().
 *
 * @return array The taxonomy query if a term was selected, else an empty array.
 */
function get_tags_in_taxonomy_term_tax_query() {

	$selected_term = get_selected_taxonomy_dropdown_term();

	// If a term has been selected, use that in the taxonomy query.
	if ( $selected_term ) {
		return array(
			array(
				'taxonomy' => 'project-feature', // Change this to the slug of your taxonomy.
				'field'    => 'term_id',
				'terms'    => $selected_term,
			),
		);
	}

	// Otherwise, don't filter based on a taxonomy term and just get all the results.
	return array();
}


/**
 * Get the selected taxonomy dropdown term slug.
 *
 * @return string The selected taxonomy dropdown term ID, else empty string.
 */
function get_selected_taxonomy_dropdown_term() {
	return isset( $_GET[ 'project-feature' ] ) && $_GET[ 'project-feature' ] ? sanitize_text_field( $_GET[ 'project-feature' ] ) : '';
}


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

function remove_width_and_height_attribute( $html ) {
   return preg_replace( '/(height|width)="\d*"\s/', "", $html );
}
