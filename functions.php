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