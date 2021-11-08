<?php
function zoo_scripts() {
	wp_enqueue_style('zoo-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');
	// wp_enqueue_style('lesok-material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all');
	wp_enqueue_style('zoo-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

	wp_deregister_script( 'jquery' ); //разрегистирируем скрипт jquery
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(),false, true);
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'zoo-swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0', true );
	// wp_enqueue_script( 'zoo-modal-script', get_template_directory_uri() . '/assets/js/modal.js', array(), '1.0', true );
	wp_enqueue_script( 'zoo-ajax-search-script', get_template_directory_uri() . '/assets/js/ajax-search.js', array(), '1.0', true );
	wp_enqueue_script( 'zoo-wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true );
	wp_enqueue_script( 'zoo-slider-script', get_template_directory_uri() . '/assets/js/zoo-slider.js', array(), '1.0', true );
	wp_enqueue_script( 'zoo-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'zoo_scripts' );

## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
    // размеры которые нужно удалить
    return array_diff( $sizes, [
        'thumbnail',
        'medium',
        'medium_large',
        'large',
        '1536x1536',
        '2048x2048',
    ] );
}

if ( ! function_exists( 'zoo_setup' ) ) :
	function zoo_setup() {
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		add_image_size( 'custom-banner-slider', 1280, 800, true);
		add_image_size( 'custom-medium', 440, 440, true);
		add_image_size( 'custom-animal', 700, 500, true);
		add_image_size( 'custom-icon', 40, 40, true);
		add_image_size( 'custom-news', 460, 230, true);
		add_image_size( 'custom-news-single', 1200, 600, true);

		register_nav_menus(
			array(
				'header_nav' => esc_html( 'Header Navigation'),
				'footer_nav_col_1' => esc_html( 'Footer Navigation col 1'),
				'footer_nav_col_2' => esc_html( 'Footer Navigation col 2'),
				'zoo-languages' => esc_html( 'languages'),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Добавьте поддержку тем для выборочного обновления виджетов.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'zoo_setup' );

// добавление каласса в меню к li 
function my_add_class_on_li($classes,$item, $args){
	if(isset($args->add_li_class)){
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class','my_add_class_on_li',1,3);

/**
 * Установите ширину содержимого в пикселях в зависимости от дизайна темы и таблицы стилей.
 *
 * Приоритет 0, чтобы сделать его доступным для обратных вызовов с более низким приоритетом.
 *
 * @global int $content_width
 */
function zoo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zoo_content_width', 640 );
}
add_action( 'after_setup_theme', 'zoo_content_width', 0 );


// Удалим названия сайта в конце заголовка
add_filter( 'document_title_parts', function( $parts ){

    if( isset($parts['site']) ) unset($parts['site']);

    return $parts;
});


//скрываем пункты меню в админ панели
add_action('admin_menu', 'remove_menus');
function remove_menus() {
    //remove_menu_page('index.php');                # Консоль 
    remove_menu_page('edit.php');                 # Записи 
    remove_menu_page('edit-comments.php');        # Комментарии 
    //remove_menu_page('edit.php?post_type=page');  # Страницы 
    //remove_menu_page('upload.php');               # Медиафайлы 
    //remove_menu_page('themes.php');               # Внешний вид 
    //remove_menu_page('plugins.php');              # Плагины 
    //remove_menu_page('users.php');                # Пользователи 
    //remove_menu_page('tools.php');                # Инструменты 
    //remove_menu_page('options-general.php');      # Параметры 
    remove_menu_page('edit.php?post_type=acf-field-group'); # ACF 
}

add_filter( 'excerpt_length', function(){
	return 17;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});


require get_template_directory() . '/inc/zoo-paginate.php';
require get_template_directory() . '/inc/zoo-post-type.php';
require get_template_directory() . '/inc/zoo-breadcrumb.php';
require get_template_directory() . '/inc/ajax-search.php';

require get_template_directory() . '/inc/redux-options.php';
require get_template_directory() . '/inc/acf.php';









