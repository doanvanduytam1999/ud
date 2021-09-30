<?php

/**
 * THEME_URL: get directory path Theme
 * CORE: get directory path /core
 */

define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_DIR', get_stylesheet_directory());
define('CORE', THEME_DIR . "/core");

/**
 * Calls the init.php file, but only if the child theme has not called it first.
 */
require_once(CORE . "/init.php");

/**
 * Set width
 */
if (!isset($content_width)) {
    $content_width = 620;
}


/**
 * functions of theme
 */
if (!function_exists('updiagram_theme_setup')) {
    function updiagram_theme_setup()
    {
        //set textdomain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('Updiagram', $language_folder);

        //auto add link RSS to <head> tag
        add_theme_support('automatic-feed-links');

        //add post thumbnails
        add_theme_support('post-thumbnails');

        //add post format
        /*   add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        )); */

        //add title-tag
        add_theme_support('title-tag');

        //add custom background
        $default_background = array(
            'default-color' => '#E6E6E6'
        );
        add_theme_support('custom-background', $default_background);

        //add menu
        register_nav_menu('primary-menu', __('Primary Menu', 'Updiagram'));

        //create sidebar
        $sidebar = array(
            'name' => __('Main Sidebar', 'updiagram'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'updiagram_theme_setup');
}

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_class)) {
        $classes['class'] = $args->add_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
//set menu
if (!function_exists('updiagram_menu')) {
    function updiagram_menu($menu)
    {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}

//set pagination
if (!function_exists('updiagram_pagination')) {
    function updiagram_pagination()
    {
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return '';
        } ?>
<nav class="pagination" role="navigation">
    <?php if (get_next_posts_link()) { ?>
    <div class="prev"><?php next_posts_link(__('Older Posts', 'updiagram')); ?></div>
    <?php }
            if (get_previous_post_link()) { ?>
    <div class="next"><?php previous_posts_link(__('Newset Posts', 'updiagram')); ?></div>
    <?php } ?>
</nav>
<?php
    }
}

//show thumbnail
if (!function_exists('updiagram_thumbnail')) {
    function updiagram_thumbnail($size)
    {
        if (!is_single() && has_post_thumbnail() && !post_password_required()) { ?>
<figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>
<?php }
    }
}

//show header post
if (!function_exists('updiagram_enrty_header')) {
    function updiagram_enrty_header()
    { ?>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php
    }
}

//get meta post
if (!function_exists('updiagram_enrty_meta')) {
    function updiagram_enrty_meta()
    {
        if (!is_single() && is_home()) { ?>
<div class="entry-meta">
    <?php
                printf(__('<span class="category"> %1$s', 'updiagram'), get_the_category_list());
                printf(__('<span class="data-published"> %1$s', 'updiagram'), get_the_date());
                ?>
</div>
<?php
        }
    }
}

//get data post/page 
if (!function_exists('updiagram_entry_content')) {
    function updiagram_entry_content()
    {
        if (!is_single() && is_home()) {
            the_excerpt();
        } else {
            the_content();
        }
    }
}

//embed files .css
function updiagram_style(){
    wp_register_style('root-style', THEME_URL."/style.css", 'all');
    wp_enqueue_style('root-style');
    wp_register_style('main-style', THEME_URL."/css/main.min.css", 'all');
    wp_enqueue_style('main-style');
    wp_register_style('reset-style', THEME_URL."/css/reset-css.css", 'all');
    wp_enqueue_style('reset-style');
}

add_action('wp_enqueue_scripts', 'updiagram_style');

// register js files
function updiagram_scripts(){
    wp_register_script('main-script', THEME_URL."/js/main.js", 'all');
    wp_enqueue_script('main-script');
    wp_register_script('swiper-script', THEME_URL."/js/swiper.min.js", 'all');
    wp_enqueue_script('swiper-script');
}

add_action('wp_enqueue_scripts', 'updiagram_scripts');

function add_support_block_editor() {
	//add support Block editor
	add_theme_support('wp-block-styles');
	add_theme_support('custom-line-height');
	add_theme_support('custom-spacing');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');
	add_theme_support('editor-styles');
	add_editor_style('assets/css/editor-style.css');
}

// Pen Test : hide the WordPress REST API is to prevent those users who are not registered

add_filter( 'rest_authentication_errors', function( $result ) {
	if ( ! empty( $result ) ) {
		return $result;
	}
	if ( ! is_user_logged_in() ) {
		return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
	}
	return $result;
});

add_action('after_theme_setup', 'add_support_block_editor');


function updiagram_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'updiagram_theme_support');


//Create post type
function create_custom_post_type()
{
    $label = array(
        'name' => 'Features', 
        'singular_name' => 'Feature' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post type Feature',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-widgets-menus', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false, 
        'publicly_queryable' => true, 
        'capability_type' => 'post'
    );
    register_post_type('feature', $args); 
}

add_action('init', 'create_custom_post_type');

function feature_metaboxes()    
{

    $cmb = new_cmb2_box(array(
        'id'            => 'content_sections',
        'title'         => __('Content Sections', 'cmb2'),
        'object_types'  => array('feature'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ));


    $content_section_group = $cmb->add_field(array(
        'id'          => 'ud_content_sections',
        'type'        => 'group',
        // 'description' => __( 'Generates reusable content sections', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __('Section {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __('Add Another Section', 'cmb2'),
            'remove_button' => __('Remove Section', 'cmb2'),
            'sortable'      => true, // beta
            'closed'     => true, // true to have the groups closed by default
        ),
    ));

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb->add_group_field($content_section_group, array(
        'name' => 'Section Title',
        'id'   => 'title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ));

    $cmb->add_group_field($content_section_group, array(
        'name' => 'Description',
        'description' => 'Write text for this section',
        'id'   => 'text',
        'type' => 'textarea',
    ));

    $cmb->add_group_field($content_section_group, array(
        'name' => 'Entry Image',
        'id'   => 'image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'feature_metaboxes');
