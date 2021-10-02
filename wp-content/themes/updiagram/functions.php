<?php

/**
 * THEME_URL: get directory path Theme
 * CORE: get directory path /core
 */

define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_DIR', get_stylesheet_directory());
define('CORE', THEME_DIR . "/core");
flush_rewrite_rules(false);
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
    function updiagram_theme_setup() {
        foreach (glob(dirname(__FILE__) . '/inc/*.php') as $file) {
            include $file;
        }
        //set textdomain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('Updiagram', $language_folder);

        //auto add link RSS to <head> tag
        add_theme_support('automatic-feed-links');

        //add post thumbnails
        add_theme_support('post-thumbnails');

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

         // Register category for Case Studies
         $args = array(
            'labels' => array(
                'name' => __('CS Categories', 'textdomain'),
                'singular_name' => __('CS Category', 'textdomain'),
            ),
            'rewrite' => array('slug' => 'cs-categories' ,'with_front' => false ),
            'capability_type' => 'post',
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        );
        
        register_taxonomy('cs-categories', array('case-study'), $args);

        // Register tag for Case Studies
        $args = array(
            'labels' => array(
                'name' => __('CS Tags', 'textdomain'),
                'singular_name' => __('CS Tag', 'textdomain'),
            ),
            'rewrite' => array('slug' => 'cs-tag' ,'with_front' => false ),
            'capability_type' => 'post',
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        );
        
        register_taxonomy('cs-tags', array('case-study'), $args);

        // Register Case Study post type
        $args = array(
            'labels' => array(
                'name' => __('Case Studies', 'textdomain'),
                'singular_name' => __('Case Study', 'textdomain'),
            ),
            'rewrite' => array('slug' => 'case-studies', 'with_front' => false),
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'hierarchical' => true,
            'menu_position' => 5,
            'public' => true,
            'has_archive' => true,
            'capability_type' => 'post',
        );  
        register_post_type('case-study', $args);
    }
    add_action('init', 'updiagram_theme_setup');
}

function remove_width_attribute($content) {
    $content = preg_replace('/(width|height)=".*?"/', '', $content);
    return $content;
}
add_filter('the_content', 'remove_width_attribute', 10);

function remove_class($content) {
    $content = preg_replace('/class=".*?"/', '', $content);
    return $content;
}
add_filter('the_content', 'remove_class', 100);

function filter_ptags_on_images($content) {
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

function add_additional_class_on_a($classes, $item, $args) {
    if (isset($args->add_class)) {
        $classes['class'] = $args->add_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

//set menu
if (!function_exists('updiagram_menu')) {
    function updiagram_menu($menu) {
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
    function updiagram_pagination() {
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
    function updiagram_thumbnail($size) {
        if (!is_single() && has_post_thumbnail() && !post_password_required()) { ?>
<figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>
<?php }
    }
}

//show header post
if (!function_exists('updiagram_enrty_header')) {
    function updiagram_enrty_header() { ?>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php
    }
}

//get meta post
if (!function_exists('updiagram_enrty_meta')) {
    function updiagram_enrty_meta() {
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
    function updiagram_entry_content() {
        if (!is_single() && is_home()) {
            the_excerpt();
        } else {
            the_content();
        }
    }
}

//embed files .css 
function updiagram_style() {
    wp_register_style('root-style', THEME_URL . "/style.css", 'all');
    wp_enqueue_style('root-style');
    wp_register_style('main-style', THEME_URL . "/css/main.min.css", 'all');
    wp_enqueue_style('main-style');
    wp_register_style('reset-style', THEME_URL . "/css/reset-css.css", 'all');
    wp_enqueue_style('reset-style');
}
add_action('wp_enqueue_scripts', 'updiagram_style');

// register js files
function updiagram_scripts() {
    wp_register_script('custom-script', THEME_URL . "/js/custom.js", 'all');
    wp_enqueue_script('custom-script');
    wp_register_script('main-script', THEME_URL . "/js/main.js", 'all');
    wp_enqueue_script('main-script');
    wp_register_script('swiper-script', THEME_URL . "/js/swiper.min.js", 'all');
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

add_filter('rest_authentication_errors', function ($result) {
    if (!empty($result)) {
        return $result;
    }
    if (!is_user_logged_in()) {
        return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', array('status' => 401));
    }
    return $result;
});
add_action('after_theme_setup', 'add_support_block_editor');


function updiagram_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_theme_setup', 'updiagram_theme_support');

function limit_to_three_tags($terms) {
    return array_slice($terms, 0, 3, true);
}
add_filter('term_links-post_tag', 'limit_to_three_tags');

function more_post_ajax() {
    $pageSize = (isset($_POST["pageSize"])) ? $_POST["pageSize"] : 12;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $category = $_POST['category'];
    $searchTerm = (isset($_POST['searchTerm'])) ? $_POST['searchTerm'] : '';
    $postType = (isset($_POST['postType'])) ? strval($_POST['postType']) : '';
    header("Content-Type: text/html");
    
    if ($postType === 'post' && $category) {
        $args = array(
            'suppress_filters' => true,
            'post_status' => 'publish',
            'post_type' => $postType,
            'posts_per_page' => $pageSize,
            'paged'    => $page,
            'category_name' => $category,
        );
    } else if ($postType === 'post' && !$category) {
        $args = array(
            'suppress_filters' => true,
            'post_status' => 'publish',
            'post_type' => $postType,
            'posts_per_page' => $pageSize,
            'paged'    => $page,
            's' => $searchTerm
        );
    } else if ($postType === 'case-study' && $category) {
        $args = array(
            'suppress_filters' => true,
            'post_status' => 'publish',
            'post_type' => $postType,
            'posts_per_page' => $pageSize,
            'paged'    => $page,
            'tax_query' => array( 
                array( 
                    'taxonomy' => 'cs-categories',
                    'field' => 'slug',
                    'terms' => $category
                )
            ), 
        );
    } else if ($postType === 'case-study' && !$category) {
        $args = array(
            'suppress_filters' => true,
            'post_status' => 'publish',
            'post_type' => $postType,
            'posts_per_page' => $pageSize,
            'paged'    => $page,
            's' => $searchTerm
        );
    }


    $loop = new WP_Query($args);
    $out = '';


    if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();
            $out .= '<a class="card" href="' . get_the_permalink() . '">
        <div class="card__header">
        <span class="card__header__tag">' . ($postType === 'post' ? get_tags_single_post(null) : get_case_study_tags(null)) . '</span>
        <span class="card__header__reading-time">
            <i class="card__header__reading-time__icon">
                <svg class="colored" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </i>
            ' . get_estimated_reading_time(null) . '
        </span>
        </div>
        <div class="card__body responsive-img responsive-img--16/9">
            <img class="card__body__banner" src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '"/>
        </div>
        <div class="card__footer">
            <h6 class="card__footer__title">' . get_the_title() . '</h6>
            <p class="card__footer__desc">' . get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) . '</p>
        </div>
        </a>';

        endwhile;
        wp_reset_postdata();
    endif;
    die($out);
}
add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function filter_projects() {
    $catSlug = $_POST['category'];
    $postType = $_POST['postType'];
    $searchTerm = $_POST['searchTerm'];
 
    if ($postType === 'post' && $catSlug) {
        $args = array(
            'post_type' => $postType,
            'posts_per_page' => 12,
            'category_name' => $catSlug,
        );
    } else if ($postType === 'post' && !$catSlug) {
        $args = array(
            'post_type' => $postType,
            'posts_per_page' => 12,
            's' => $searchTerm,
        );
    }
     else if ($postType === 'case-study'  && $catSlug) {
        $args = array(
            'post_type' => $postType,
            'posts_per_page' => 12,
            'tax_query' => array( 
                array( 
                    'taxonomy' => 'cs-categories',
                    'field' => 'slug',
                    'terms' => $catSlug
                )
            ),         
        );
    } else if ($postType === 'case-study' && !$catSlug) {
        $args = array(
            'post_type' => $postType,
            'posts_per_page' => 12,
            's' => $searchTerm,
        );
    }

    $ajaxposts = new WP_Query($args);

    $response = '';

    if ($ajaxposts->have_posts()) {
        while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
            $response .= '<a class="card" href="' . get_the_permalink() . '">
        <div class="card__header">
            <span class="card__header__tag">' . ($postType === 'post' ? get_tags_single_post(null) : get_case_study_tags(null)) . '</span>
            <span class="card__header__reading-time">
                <i class="card__header__reading-time__icon">
                    <svg class="colored" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </i>
                ' . get_estimated_reading_time(null) . '
            </span>
        </div>
        <div class="card__body responsive-img responsive-img--16/9">
            <img class="card__body__banner" src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '"/>
        </div>
        <div class="card__footer">
            <h6 class="card__footer__title">' . get_the_title() . '</h6>
            <p class="card__footer__desc">' . get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) . '</p>
        </div>
        </a>';

        endwhile;
    } else {
        $response = 'Post not found';
    }

    echo $response;
    exit;
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');

function wpse15850_body_class($wp_classes, $extra_classes) {
    $whitelist = array('page-template', 'page-template-templates', 'page-template-page-all-posts', 'page-template-templatespage-all-posts-php', 'page page-id-39');
    $wp_classes = array_intersect($wp_classes, $whitelist);
    return array_merge($wp_classes, (array) $extra_classes);
}
add_filter('body_class', 'wpse15850_body_class', 10, 2);

add_action('after_theme_setup', 'updiagram_theme_support');