<?php
function zoo_register_post_type() {
    //START animals

    $labels = array(
		'name'              => ( 'Коллекция' ),
		'singular_name'     => ( 'Коллекция' ),
		'search_items'      => ( 'Поиск по коллекции' ),
		'all_items'         => ( 'Вся коллекция' ),
		'parent_item'       => ( 'Родительская коллекция' ),
		'parent_item_colon' => ( 'Родительская коллекция:' ),
		'edit_item'         => ( 'Редактировать коллекцию' ),
		'update_item'       => ( 'Обновить коллекцию' ),
		'add_new_item'      => ( 'Добавить новую коллекцию' ),
		'new_item_name'     => ( 'Название новой коллекции' ),
		'menu_name'         => ( 'Коллекция' ),
	);

	$args = array(
		//вложеность термов(например вложность для стран и городов) иерархический
		'hierarchical'	=> true,
		'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'collection' ),
		
	);

	if (!taxonomy_exists( 'collection' )) {
		register_taxonomy('collection', array('animals'), $args);
	}
	
	// очищаем $args
	unset($args);

    $labels = array(
        'name'                  => ( 'Животные' ),
        'singular_name'         => ( 'Животные' ),
        'menu_name'             => ( 'Животные' ),
        'name_admin_bar'        => ( 'Животные' ),
        'add_new'               => ( 'Добавить животное' ),
        'add_new_item'          => ( 'Добавить животное' ),
        'new_item'              => ( 'Новый животное'),
        'edit_item'             => ( 'Редактировать' ),
        'view_item'             => ( 'Вид' ),
        'all_items'             => ( 'Все жывотные' ),
        'search_items'          => ( 'Поиск' ),
        'parent_item_colon'     => ( 'Родитель животного:' ),
        'not_found'             => ( 'не наден.'),
        'not_found_in_trash'    => ( 'Животное в корзине не обнаружен.' ),
        'featured_image'        => ( 'Изображение на обложке' ),
        'set_featured_image'    => ( 'Установить обложку' ),
        'remove_featured_image' => ( 'Удалить изображение обложки' ),
        'use_featured_image'    => ( 'Использовать как обложку' ),
        'archives'              => ( 'Архивы' ),
        'insert_into_item'      => ( 'Вставить' ),
        'uploaded_to_this_item' => ( 'Загружено' ),
        'filter_items_list'     => ( 'Список фильтров' ),
        'items_list_navigation' => ( 'по списку навигации' ),
        'items_list'            => ( 'Список' ),   
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'animals' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'menu_icon'			 => 'dashicons-twitter',
        'show_in_rest'       => true,
    );

    register_post_type( 'animals', $args );
     // очищаем $args $labels
	unset($args);
	unset($labels);


    //END animals


    // START slider
    $labels = array(
        'name'                  => ( 'Слайдер' ),
        'singular_name'         => ( 'Слайдер' ),
        'menu_name'             => ( 'Слайдер' ),
        'name_admin_bar'        => ( 'Слайдер' ),
        'add_new'               => ( 'Добавить слайдер' ),
        'add_new_item'          => ( 'Добавить новый слайдер' ),
        'new_item'              => ( 'Новый слайдер'),
        'edit_item'             => ( 'Редактировать слайдер' ),
        'view_item'             => ( 'Вид слайдера' ),
        'all_items'             => ( 'Все элементы' ),
        'search_items'          => ( 'Поиск слайдера' ),
        'parent_item_colon'     => ( 'Родитель слайдера:' ),
        'not_found'             => ( 'Слайдер не наден.'),
        'not_found_in_trash'    => ( 'Слайдер в корзине не обнаружен.' ),
        'featured_image'        => ( 'Изображение на обложке' ),
        'set_featured_image'    => ( 'Установить обложку' ),
        'remove_featured_image' => ( 'Удалить изображение обложки' ),
        'use_featured_image'    => ( 'Использовать как обложку' ),
        'archives'              => ( 'Архивы слайдера' ),
        'insert_into_item'      => ( 'Вставить в слайдер' ),
        'uploaded_to_this_item' => ( 'Загружено в слайдер' ),
        'filter_items_list'     => ( 'Список фильтров' ),
        'items_list_navigation' => ( 'Слайдер по списку навигации' ),
        'items_list'            => ( 'Список слайдера' ),   
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'banner' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'thumbnail' ),
        'menu_icon'			 => 'dashicons-format-image',
    );

    register_post_type( 'banner', $args );
    // очищаем $args $labels
	unset($args);
	unset($labels);
    // END slider

    // START Instagram
    $labels = array(
        'name'                  => ( 'instagram' ),
        'singular_name'         => ( 'instagram' ),
        'menu_name'             => ( 'instagram' ),
        'name_admin_bar'        => ( 'instagram' ),
        'add_new'               => ( 'Добавить instagram' ),
        'add_new_item'          => ( 'Добавить новый instagram' ),
        'new_item'              => ( 'Новый instagram'),
        'edit_item'             => ( 'Редактировать instagram' ),
        'view_item'             => ( 'Вид instagram' ),
        'all_items'             => ( 'Все элементы' ),
        'search_items'          => ( 'Поиск instagram' ),
        'parent_item_colon'     => ( 'Родитель instagram:' ),
        'not_found'             => ( 'instagram не наден.'),
        'not_found_in_trash'    => ( 'instagram в корзине не обнаружен.' ),
        'featured_image'        => ( 'Изображение на обложке' ),
        'set_featured_image'    => ( 'Установить обложку' ),
        'remove_featured_image' => ( 'Удалить изображение обложки' ),
        'use_featured_image'    => ( 'Использовать как обложку' ),
        'archives'              => ( 'Архивы instagram' ),
        'insert_into_item'      => ( 'Вставить в instagram' ),
        'uploaded_to_this_item' => ( 'Загружено в instagram' ),
        'filter_items_list'     => ( 'Список фильтров' ),
        'items_list_navigation' => ( 'instagram по списку навигации' ),
        'items_list'            => ( 'Список instagram' ),   
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'instagram' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'thumbnail' ),
        'menu_icon'			 => 'dashicons-images-alt2',
    );

    register_post_type( 'instagram', $args );
    // очищаем $args $labels
	unset($args);
	unset($labels);
    // END Instagram
    // START more
    $labels = array(
        'name'                  => ( 'Посетителям' ),
        'singular_name'         => ( 'Посетителям' ),
        'menu_name'             => ( 'Посетителям' ),
        'name_admin_bar'        => ( 'Посетителям' ),
        'add_new'               => ( 'Добавить блок' ),
        'add_new_item'          => ( 'Добавить новый блок' ),
        'new_item'              => ( 'Новый блок'),
        'edit_item'             => ( 'Редактировать блок' ),
        'view_item'             => ( 'Вид блока' ),
        'all_items'             => ( 'Все элементы' ),
        'search_items'          => ( 'Поиск блока' ),
        'parent_item_colon'     => ( 'Родитель блока:' ),
        'not_found'             => ( 'Блок не наден.'),
        'not_found_in_trash'    => ( 'Блок в корзине не обнаружен.' ),
        'featured_image'        => ( 'Изображение на обложке' ),
        'set_featured_image'    => ( 'Установить обложку' ),
        'remove_featured_image' => ( 'Удалить изображение обложки' ),
        'use_featured_image'    => ( 'Использовать как обложку' ),
        'archives'              => ( 'Архивы блока' ),
        'insert_into_item'      => ( 'Вставить в блок' ),
        'uploaded_to_this_item' => ( 'Загружено в блок' ),
        'filter_items_list'     => ( 'Список фильтров' ),
        'items_list_navigation' => ( 'Блоки по списку навигации' ),
        'items_list'            => ( 'Список блоков' ),   
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'more' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'menu_icon'			 => 'dashicons-groups',
    );

    register_post_type( 'more', $args );
    // очищаем $args $labels
	unset($args);
	unset($labels);
    // END more

    // START news
    $labels = array(
        'name'                  => ( 'Новости' ),
        'singular_name'         => ( 'Новости' ),
        'menu_name'             => ( 'Новости' ),
        'name_admin_bar'        => ( 'Новости' ),
        'add_new'               => ( 'Добавить новость' ),
        'add_new_item'          => ( 'Добавить новыую новость' ),
        'new_item'              => ( 'Новая новость'),
        'edit_item'             => ( 'Редактировать новость' ),
        'view_item'             => ( 'Вид новостей' ),
        'all_items'             => ( 'Все новости' ),
        'search_items'          => ( 'Поиск новостей' ),
        'parent_item_colon'     => ( 'Родитель новостей:' ),
        'not_found'             => ( 'новость не наден.'),
        'not_found_in_trash'    => ( 'новость в корзине не обнаружена.' ),
        'featured_image'        => ( 'Изображение на обложке' ),
        'set_featured_image'    => ( 'Установить обложку' ),
        'remove_featured_image' => ( 'Удалить изображение обложки' ),
        'use_featured_image'    => ( 'Использовать как обложку' ),
        'archives'              => ( 'Архивы новостей' ),
        'insert_into_item'      => ( 'Вставить в новость' ),
        'uploaded_to_this_item' => ( 'Загружено в новость' ),
        'filter_items_list'     => ( 'Список фильтров' ),
        'items_list_navigation' => ( 'новость по списку навигации' ),
        'items_list'            => ( 'Список новостей' ),   
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'excerpt', 'editor' ),//'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
        'menu_icon'			 => 'dashicons-admin-site-alt3',
        'show_in_rest'       => true,
    );

    register_post_type( 'news', $args );
    // очищаем $args $labels
	unset($args);
	unset($labels);
    // END news
    // START guardianship
    $labels = array(
        'name'                  => ( 'Опека' ),
        'singular_name'         => ( 'Опека' ),
        'menu_name'             => ( 'Опека' ),
        'name_admin_bar'        => ( 'Опека' ),
        'add_new'               => ( 'Добавить' ),
        'add_new_item'          => ( 'Добавить новыую' ),
        'new_item'              => ( 'Новая опека'),
        'edit_item'             => ( 'Редактировать опеку' ),
        'view_item'             => ( 'Вид опек' ),
        'all_items'             => ( 'Все опеки' ),
        'search_items'          => ( 'Поиск опек' ),
        'parent_item_colon'     => ( 'Родитель опек:' ),
        'not_found'             => ( 'Опека не наден.'),
        'not_found_in_trash'    => ( 'Опека в корзине не обнаружена.' ),
        'featured_image'        => ( 'Изображение на обложке' ),
        'set_featured_image'    => ( 'Установить обложку' ),
        'remove_featured_image' => ( 'Удалить изображение обложки' ),
        'use_featured_image'    => ( 'Использовать как обложку' ),
        'archives'              => ( 'Архивы опек' ),
        'insert_into_item'      => ( 'Вставить в опеку' ),
        'uploaded_to_this_item' => ( 'Загружено в опеку' ),
        'filter_items_list'     => ( 'Список фильтров' ),
        'items_list_navigation' => ( 'Опека по списку навигации' ),
        'items_list'            => ( 'Список опек' ),   
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tutelage' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'thumbnail', 'editor' ),//'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
        'menu_icon'			 => 'dashicons-buddicons-activity',
    );

    register_post_type( 'tutelage', $args );
    // очищаем $args $labels
	unset($args);
	unset($labels);
    // END guardianship


}

add_action( 'init', 'zoo_register_post_type' );

//обновления ЧПУ после инициализации post type
function my_template_rewrite_rules(){
    my_template_rewrite_rukes();
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'my_template_rewrite_rules');


// add_filter('post_type_labels_post', 'rename_posts_labels');
// function rename_posts_labels( $labels ){

// 	$new = array(
// 		'name'                  => 'Животные',
// 		'singular_name'         => 'Животные',
// 		'add_new'               => 'Добавить Животное',
// 		'add_new_item'          => 'Добавить Животное',
// 		'edit_item'             => 'Редактировать',
// 		'new_item'              => 'Новое животное',
// 		'view_item'             => 'Просмотреть животное',
// 		'search_items'          => 'Поиск животных',
// 		'not_found'             => 'Животных не найдено.',
// 		'not_found_in_trash'    => 'Животных в корзине не найдено.',
// 		'parent_item_colon'     => '',
// 		'all_items'             => 'Все Животные',
// 		'archives'              => 'Архивы Животных',
// 		'insert_into_item'      => 'Вставить',
// 		'uploaded_to_this_item' => 'Загруженные для этого животного',
// 		'featured_image'        => 'Миниатюра',
// 		'filter_items_list'     => 'Фильтровать список',
// 		'items_list_navigation' => 'Навигация по списку',
// 		'items_list'            => 'Список',
// 		'menu_name'             => 'Животные',
// 		'name_admin_bar'        => 'Животное', // пункте "добавить"
// 	);

// 	return (object) array_merge( (array) $labels, $new );
// }
