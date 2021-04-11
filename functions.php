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
        add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
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
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'Reviews', [
		'label'  => null,
		'labels' => [
			'name'               => __('Reviews', 'universal'), // основное название для типа записи
			'singular_name'      => __('Reviews', 'universal'), // название для одной записи этого типа
			'add_new'            => __('Add Review', 'universal'), // для добавления новой записи
			'add_new_item'       => __('Add Reviews', 'universal'), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Edit Review', 'universal'), // для редактирования типа записи
			'new_item'           => __('New Review', 'universal'), // текст новой записи
			'view_item'          => __('View Review', 'universal'), // для просмотра записи этого типа.
			'search_items'       => __('Search Reviews', 'universal'), // для поиска по этим типам записи
			'not_found'          => __('Not found', 'universal'), // если в результате поиска ничего не было найдено
			'not_found_in_trash' => __('Not found in bin', 'universal'), // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => __('Reviews', 'universal'), // название меню
		],
		'description'         => 'Раздел с отзывами',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'capability_type'   => 'post',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
	}	
