<?php


/**
 * Theme Settings Page
 *
 * @return void
 */
function prathamspace_settings_page()
{
    ?>
    <div class="wrap">
        <h2>My Theme Settings</h2>
        <form method="post" action="options.php">
            <?php
            // Output security fields
            settings_fields('prathamspace_settings_group');
            // Output setting sections
            do_settings_sections('prathamspace_settings_page');
            // Submit button
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Theme Setting Intialization
 *
 * @return void
 */
function prathamspace_settings_init()
{
    // Register a setting and its sanitization callback
    register_setting('prathamspace_settings_group', 'prathamspace_site_title', 'sanitize_text_field');

    // Add a section and fields for our setting
    add_settings_section('prathamspace_settings_section', 'General Settings', 'prathamspace_settings_section_callback', 'prathamspace_settings_page');
    add_settings_field('prathamspace_site_title', 'Site Title', 'prathamspace_site_title_callback', 'prathamspace_settings_page', 'prathamspace_settings_section');
}

/**
 * Theme Setting Section
 *
 * @return void
 */
function prathamspace_settings_section_callback()
{
    echo '<p>Customize your theme settings here.</p>';
}

/**
 * Theme Setting Site Title
 *
 * @return void
 */
function prathamspace_site_title_callback()
{
    $value = get_option('prathamspace_site_title');
    echo '<input type="text" name="prathamspace_site_title" value="' . esc_attr($value) . '" />';
}

/**
 * Adding Theme Setting page to hook
 *
 * @return void
 */
function prathamspace_add_settings_page()
{
    add_menu_page('My Theme Settings', 'Theme Settings', 'manage_options', 'prathamspace_settings', 'prathamspace_settings_page');
}
add_action('admin_menu', 'prathamspace_add_settings_page');
add_action('admin_init', 'prathamspace_settings_init');


/**
 * Logo
 */
add_theme_support('custom-header');


/**
 * Navigation
 */
require_once('navbar/wp-bootstrap-navlist-walker.php');

register_nav_menus(
    array("primary-menu" => "Primary Menu")
);


// Adding Thumbnail To The Post
add_theme_support('post-thumbnails');



/**
 * Adding Styles 
 * @return void
 */

function prathamspace_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("bootstrap-styles", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), "5.3.0", "all");
    wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css", array(), $version, "all");
    wp_enqueue_style("slick-css", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), "1.8.1", "all");
    wp_enqueue_style("custom-styles", get_template_directory_uri() . "/assets/css/style.css", array('bootstrap-styles'), "1.0", "all");

    wp_enqueue_style("page-navi-styles", get_template_directory_uri() . "/assets/css/pageNavi.css", array('bootstrap-styles'), "1.0", "all");
}
add_action('wp_enqueue_scripts', 'prathamspace_styles');


/**
 * Adding Scripts 
 * @return void
 */
function prathamspace_scripts()
{
    wp_enqueue_script("prthamspace-jquery", "https://code.jquery.com/jquery-3.7.0.min.js", array(), "3.7.0", "all");
    wp_enqueue_script("bootstrap-scripts", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js", array(), "5.3.0", "all");
    wp_enqueue_script("slick-script", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), "1.8.1", "all");

    wp_enqueue_script("custom-script", get_template_directory_uri() . "/assets/js/script.js", array('jquery'), "1.0", "all");
}
add_action('wp_enqueue_scripts', 'prathamspace_scripts');


/**
 * Register Widget Sidebar
 */

register_sidebar(
    array(
        'name' => "Right Sidebar",
        'id' => "zoro-sidebar",
        'before_widget' => '<li id="mainSidebar" >',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="sidebarTitle">',
        'after_title' => '</h2>',
    )
);



