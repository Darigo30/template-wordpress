<?php
/**
 *
 * @package jericho
 */

if ( ! function_exists( 'jericho_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jericho_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Menu Header', 'jericho' ) );

	/**
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
}
endif; // jericho_setup
add_action( 'after_setup_theme', 'jericho_setup' );

function jericho_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Lateral', 'jericho' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Aparece en el lateral del sitio.', 'jericho' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'jericho_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jericho_scripts() {
	
    /* CSS */
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css');                                                  /* fontawesome */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');                                                   /* bootstrap */
    wp_enqueue_style('slick-slider', get_template_directory_uri().'/css/slick.min.css');                                                            /* slick-slider */
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), 2.1);                                                         /* ams-custom */

    /* JS */
    wp_enqueue_script('popper-js', get_stylesheet_directory_uri() . '/js/popper.min.js', array('jquery'), '1.16.1', true );                     /* popper */
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );                  /* bootstrap */
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.8.1', true );                          /* slick-Slider */
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '', true);                                /* ams-custom */

    /* IE */
    wp_enqueue_script( 'html5shiv', get_stylesheet_directory_uri() . '/js/html5shiv.js', '', true);
    wp_script_add_data( 'html5shiv', 'conditional', 'IE' );

}
 add_action( 'wp_enqueue_scripts', 'jericho_scripts' );



//Remove Emoji Support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


//Seguridad
function wpb_disable_feed() {
wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


//Returns the URL from the post.
function jericho_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}


// Title
function jericho_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'jericho_wp_title', 10, 2 );



// custom excerpt length
function custom_excerpt_length( $length ) {
   return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Thumbnails
add_image_size( 'slider_tablet', 1000, 600, true );
add_image_size( 'slider_mobile', 770, 460, true );



//actual year
function anio_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
    SELECT
    YEAR(min(post_date_gmt)) AS firstdate,
    YEAR(max(post_date_gmt)) AS lastdate
    FROM
    $wpdb->posts
    WHERE
    post_status = 'publish'
    ");
    $output = '';
    if($copyright_dates) {
    $copyright = "&copy; " . $copyright_dates[0]->firstdate;
    if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
    $copyright .= ' - ' . $copyright_dates[0]->lastdate;
    }
    $output = $copyright;
    }
    return $output;
}

?>