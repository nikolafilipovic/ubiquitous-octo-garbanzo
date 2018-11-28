<?php
/**
 * Loading up all Divi Builder modules.
 */
function add_modules() {
    if (class_exists("ET_Builder_Module")) {
        include("modules/test.php");
        include("modules/landing-search.php");
        include("modules/landing-links.php");
        include("modules/property-slider.php");
        include("modules/tour-slider.php");
    }
}

/**
 * Method for initializing the Divi Builder modules.
 */
function load_divi_modules() {
    global $pagenow;

    $is_admin = is_admin();
    $action_hook = $is_admin ? 'wp_loaded' : 'wp';
    $required_admin_pages = array( 'edit.php', 'post.php', 'post-new.php', 'admin.php', 'customize.php', 'edit-tags.php', 'admin-ajax.php', 'export.php' );
    $specific_filter_pages = array( 'edit.php', 'admin.php', 'edit-tags.php' );
    $is_edit_library_page = 'edit.php' === $pagenow && isset( $_GET['post_type'] ) && 'et_pb_layout' === $_GET['post_type'];
    $is_role_editor_page = 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'et_divi_role_editor' === $_GET['page'];
    $is_import_page = 'admin.php' === $pagenow && isset( $_GET['import'] ) && 'wordpress' === $_GET['import']; 
    $is_edit_layout_category_page = 'edit-tags.php' === $pagenow && isset( $_GET['taxonomy'] ) && 'layout_category' === $_GET['taxonomy'];

    if ( ! $is_admin || ( $is_admin && in_array( $pagenow, $required_admin_pages ) && ( ! in_array( $pagenow, $specific_filter_pages ) || $is_edit_library_page || $is_role_editor_page || $is_edit_layout_category_page || $is_import_page ) ) ) {
        add_action($action_hook, 'add_modules');
    }
}

load_divi_modules();

/**
 * Loading up the menus.
 */
function register_toc_menus() {
    register_nav_menu('footer-menu-1',__( 'Footer Links 1' ));
    register_nav_menu('footer-menu-2',__( 'Footer Links 2' ));
    register_nav_menu('footer-menu-3',__( 'Footer Links 3' ));
}

add_action( 'init', 'register_toc_menus' );

/**
 * Loading up all the CSS and JS
 */
function load_static() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); //Loading up Divi styles.
}
add_action( 'wp_enqueue_scripts', 'load_static' );
/**
 * Why wordpress can't you do everything?
 * Adding custom CSS classes to <li> elements on the menu...
 */
require_once 'class-wp-bootstrap-navwalker.php';

/*
 *  Dynamic templating for blog page
 */
function render_view($args, $name) {
    extract($args);
    include_once "$name.php";
}

function format_blog_date($date, $format) {
    $d = date_create($date);
    return date_format($d, $format);
}

function styled_next_posts() {
    try {
        $xml = new SimpleXMLElement(get_next_posts_link('Next'));
        $xml->addAttribute('class', 'page-link next');
        return $xml->asXML();
    } catch(Exception $e) {
        return "";
    }
}

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


function get_popular_posts() {
    $wp_popular = new WP_Query( array(
        'posts_per_page' => 4,
        'meta_key' => 'wpb_post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    ));

    return $wp_popular->posts;
}

remove_action( 'wpz_head', 'adjacent_posts_rel_link_wp_head', 10, 0);