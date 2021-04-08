<?php
add_action( 'wp_enqueue_scripts', 'enqueue_universal_style' );
//подключение стилей
function enqueue_universal_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'animate', get_template_directory_uri(  ) . "/css/animate.css" , "style" );
    wp_enqueue_style( 'icomoon', get_template_directory_uri(  ) . "/css/icomoon.css" , "style" );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(  ) . "/css/bootstrap.css" , "style" );
    wp_enqueue_style( 'lesser', get_template_directory_uri(  ) . "/css/lesser.css" , "style" );
    wp_enqueue_style( 'simple-line-icons', get_template_directory_uri(  ) . "/css/simple-line-icons.css" , "style" );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('main', get_template_directory_uri(  ) . "/js/main.js", null, null, true);
	/*wp_enqueue_script('scripts', get_template_directory_uri(  ) . "/js/scripts.js", 'swiper' , null ,true);*/
}
if ( ! function_exists( 'universal_theme_setup' ) ) :
    function universal_theme_setup(){
        //добавление title
        add_theme_support('title-tag');
        //добавление минеатюр
        add_theme_support( 'post-thumbnails', array( 'post' ) );   
        //добавление logo
        add_theme_support( 'custom-logo', [
            'width'       => 163,
            'flex-height' => true,
            'header-text' => 'Universal',
            'unlink-homepage-logo' => false,
        ] );
        //Регистрация меню
        register_nav_menus( [
            'header_menu' => 'Меню в шапке',
            'footer_menu' => 'Меню в подвале'
        ] ); 

}
endif;
add_action( 'after_setup_theme', 'universal_theme_setup' );