<?php 

function mogwai_files() {
    wp_enqueue_script('main-mogwai-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-googlefonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('mogwai_main_styles', get_stylesheet_uri());
    wp_enqueue_style('mainstyle', get_template_directory_uri().'/css/karen.css', array(), 1.0, 'all');
}

add_action('wp_enqueue_scripts', 'mogwai_files');



function load_shop_css(){
    if (is_page('shop')){
               wp_enqueue_style('shopstyle', get_template_directory_uri().'/css/shop.css', array(), 1.0, 'all'); 
    }

}

add_action('wp_enqueue_scripts', 'load_shop_css');



function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

function align_wide_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'align_wide_setup' );



function yoobee_customizer_settings($wp_customize)
{
$wp_customize->add_setting('header_color', array(
'default' => '#000000',
'transport' => 'refresh',
));

$wp_customize->add_section('yoobee_color_header_section', array(
'title' => 'Header Text Color',
'priority' => 30,
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my-header_color', array(
'label' => 'Header Color',
'section' => 'yoobee_color_header_section',
'settings' => 'header_color',
)));
}
// https://codex.wordpress.org/Theme_Customization_API
add_action('customize_register', 'yoobee_customizer_settings');

function mytheme_customize_css()
{
echo '<style>h1{color:'.get_theme_mod('header_color', '#000000').';}</style>';
}

add_action('wp_head', 'mytheme_customize_css');
