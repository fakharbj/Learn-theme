<?php
if ( ! function_exists('learn_setup')) {

    function learn_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        
        // Let WordPress manage the document title.
        add_theme_support('title-tag');
        
        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');
        
        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('learn_custom_background_args', array(
            'default-color' => '#ffffff', //    Use 'ffffff' instead of '#fff' for the default color.
            'default-image' => '',
        )));   
        
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallary',
            'caption',
        ));

        add_theme_support('customize-selective-refresh-widgets');


        add_theme_support('custom-logo', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);
        add_theme_support('custom-header', array(
            'flex-width' => true,
            'width' => 1600,
            'fex-height' => 450,
            'default-image' => '',
        ));

        add_theme_support('post-formats', array('aside', 'gallary', 'link', 'image', 'quote', 'video', 'audio'));


        register_nav_menus(array(
            'primary' => esc_html__('primary', 'learn'),
            'footer' => esc_html__( 'Footer Menu', 'learn' ),
            'header_action' => esc_html__( 'Header Action', 'learn' ),
		) );
        add_filter( 'show_admin_bar', '__return_false' );
    }
}   
add_action('after_setup_theme', 'learn_setup');




function learn_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'learn_content_width', 1170 );
}
add_action( 'after_setup_theme', 'learn_content_width', 0 );


/**
 * Register Sidebar widget area.
 *
 * @since 1.0.0
 */
function learn_sidebar_widgets_init() {
	// Default Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'learn' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'learn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'learn_sidebar_widgets_init' );


?>