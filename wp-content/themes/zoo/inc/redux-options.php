<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'zoo_options';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname( __FILE__ ) . '/';

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

$sample_html = '';
if ( file_exists( $dir . '/info-html.html' ) ) {
	$fs = Redux_Filesystem::get_instance();
	if ( method_exists( $fs, 'get_contents' ) ) {
		$sample_html = $fs->execute( 'get_contents', $dir . '/info-html.html' );
	}
}

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {
		$sample_patterns = array();

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to execept HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => false,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Sample Options', 'your-textdomain-here' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Sample Options', 'your-textdomain-here' ),

	// Enabled the Webfonts typography module to use asynchronous fonts.
	'async_typography'          => false,

	// Disable to create your own google fonts loader.
	'disable_google_fonts_link' => true,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => false,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to opened expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// The time transinets will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
);


Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START SECTIONS
 */


// -> START ZOO Fields

//start header settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Настройка шапки'),
	'id'               => 'site_settings_header',
	// 'subsection'       => true,
	'customizer_width' => '450px',
	'icon'             => 'el el-arrow-up',
	'desc'             => esc_html('Укажите нужные параметры для шапки'),
	'fields'           => array(
		array(
			'id'       => 'header_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Логотип сайта' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress' ),
			'default'  => '',
		),
		array(
			'id'       => 'header_logo_mobil',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Логотип сайта для мобильных разрешений' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress' ),
			'default'  => '',
		),
        array(
			'id'       => 'header_working_time',
			'type'     => 'text',
			'title'    => esc_html( 'Рабочее время' ),
			'desc'     => esc_html( 'Введите текст' ),
		),
        array(
			'id'       => 'header_price_zoo',
			'type'     => 'text',
			'title'    => esc_html( 'Стоимость билета зоопарк' ),
			'desc'     => esc_html( 'Введите текст' ),
		),
        array(
			'id'       => 'header_price_dino',
			'type'     => 'text',
			'title'    => esc_html( 'Стоимость билета динопарк' ),
			'desc'     => esc_html( 'Введите текст' ),
		),
		
	)
) );
//end header settings

//START HOMEPAGE SETTINGS
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html( 'Стр. главноя' ),
		'id'               => 'homepage_settings',
		'desc'             => esc_html( 'Укажите нужные параметры'),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);
//start about settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Контент о нас'),
	'id'               => 'about_content',
	'subsection'       => true,
	'icon'             => 'el el-adult',
	'customizer_width' => '450px',
	'desc'             => esc_html('Укажите нужные параметры для секции о нас'),
	'fields'           => array(
		array(
			'id'       => 'about_img',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Картинка' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress, размер 700 * 350' ),
			'default'  => '',
		),
		array(
			'id'       => 'about_title',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'about_desc',
			'type'     => 'textarea',
			'title'    => esc_html( 'Описание' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'about_button',
			'type'     => 'text',
			'title'    => esc_html( 'Текст кнопки' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'about_button_link',
			'type'     => 'text',
			'title'    => esc_html( 'Ссылка кнопки' ),
			'desc'     => esc_html( 'Введите адрес ссылки' ),
			'default'  => '',
		),
	)
) );
//end about settings
//start partners settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Контент партнеры'),
	'id'               => 'partners_content',
	'subsection'       => true,
	'icon'             => 'el el-group-alt',
	'customizer_width' => '450px',
	'desc'             => esc_html('Укажите нужные параметры для секции наши партнеры'),
	'fields'           => array(
		array(
			'id'       => 'partners_title',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок секции' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_title_1',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок партнера 1' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_text_1',
			'type'     => 'textarea',
			'title'    => esc_html( 'Текст партнера 1' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_link_1',
			'type'     => 'text',
			'title'    => esc_html( 'Ссылка партнера 1' ),
			'desc'     => esc_html( 'Введите адрес ссылки партнера 1' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_title_2',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок партнера 2' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_text_2',
			'type'     => 'textarea',
			'title'    => esc_html( 'Текст партнера 2' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_link_2',
			'type'     => 'text',
			'title'    => esc_html( 'Ссылка партнера 2' ),
			'desc'     => esc_html( 'Введите адрес ссылки партнера 2' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_title_3',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок партнера 3' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_text_3',
			'type'     => 'textarea',
			'title'    => esc_html( 'Текст партнера 3' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'partners_item_link_3',
			'type'     => 'text',
			'title'    => esc_html( 'Ссылка партнера 3' ),
			'desc'     => esc_html( 'Введите адрес ссылки партнера 3' ),
			'default'  => '',
		),
	)
) );
//end partners settings
//start news settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Контент новости'),
	'id'               => 'news_content',
	'subsection'       => true,
	'icon'             => 'el el-th-list',
	'customizer_width' => '450px',
	'desc'             => esc_html('Укажите нужные параметры для секции новости'),
	'fields'           => array(
		array(
			'id'       => 'news_title',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок секции' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'news_bg',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Фоновое изображение блока новостей' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress, размер 460 * 230 в формате .png' ),
			'default'  => '',
		),
		
	)
) );
//end news settings
//start more settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Контент посетителям'),
	'id'               => 'more_content',
	'subsection'       => true,
	'icon'             => 'el el-th-large',
	'customizer_width' => '450px',
	'desc'             => esc_html('Укажите нужные параметры для секции поситителям'),
	'fields'           => array(
		array(
			'id'       => 'more_bg',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Фоновое изображение блока' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress, размер 1600 * 1060' ),
			'default'  => '',
		),
		array(
			'id'       => 'more_label',
			'type'     => 'text',
			'title'    => esc_html( 'Метка секции' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'more_title',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок секции' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'more_desc',
			'type'     => 'textarea',
			'title'    => esc_html( 'Описание секции' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
		array(
			'id'       => 'more_link',
			'type'     => 'text',
			'title'    => esc_html( 'Ссылка кнопки подробнее' ),
			'desc'     => esc_html( 'Введите ссылку' ),
			'default'  => '',
		)
	)
) );
//end more settings
//start instagram settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Контент instagram'),
	'id'               => 'instagram_content',
	'subsection'       => true,
	'icon'             => 'el el-instagram',
	'customizer_width' => '450px',
	'desc'             => esc_html('Укажите нужные параметры для секции instagram'),
	'fields'           => array(
		array(
			'id'       => 'instagram_title',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок секции' ),
			'desc'     => esc_html( 'Введите текст' ),
			'default'  => '',
		),
	)
) );
//end instagram settings

//END HOMEPAGE SETTINGS

//start footer settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html('Настройка подвала'),
	'id'               => 'site_settings_footer',
	// 'subsection'       => true,
	'customizer_width' => '450px',
	'icon'             => 'el el-arrow-down',
	'desc'             => esc_html('Укажите нужные параметры для подвала'),
	'fields'           => array(
        array(
			'id'       => 'footer_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Логотип сайта для подвала' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress' ),
			'default'  => '',
		),
		array(
			'id'       => 'footer_col_1',
			'type'     => 'text',
			'title'    => esc_html( 'Название меню в подвале столбец 1' ),
			'desc'     => esc_html( 'Введите текст' ),
            'subtitle' => ( 'Если не ввести название, меню не будет отображаться! Дабавляйте элементы меню в "Внеший вид/меню/ - Меню в подвале столбец 1"' ),
			'default'  => '',
		),
		array(
			'id'       => 'footer_col_2',
			'type'     => 'text',
			'title'    => esc_html( 'Название меню в подвале столбец 2' ),
			'desc'     => esc_html( 'Введите текст' ),
            'subtitle' => ( 'Если не ввести название, меню не будет отображаться! Дабавляйте элементы меню в "Внеший вид/меню/ - Меню в подвале столбец 2"' ),
			'default'  => '',
		),
		array(
			'id'       => 'footer_contacts',
			'type'     => 'text',
			'title'    => esc_html( 'Название меню в подвале с контатами' ),
			'desc'     => esc_html( 'Введите текст' ),
            'subtitle' => ( 'Если не ввести название, блок с контактами не будет отображаться! Дабавляйте элементы контактов ниже:' ),
			'default'  => '',
		),
		array(
			'id'       => 'footer_phone',
			'type'     => 'text',
			'title'    => esc_html( 'Телефон' ),
			'desc'     => esc_html( 'Введите телефон' ),
		),
		array(
			'id'       => 'footer_address',
			'type'     => 'text',
			'title'    => esc_html( 'Адрес' ),
			'desc'     => esc_html( 'Введите адрес' ),
		),
		array(
			'id'       => 'footer_email',
			'type'     => 'text',
			'title'    => esc_html( 'E-mail' ),
			'desc'     => esc_html( 'Введите e-mail' ),
		),
		// array(
		// 	'id'       => 'footer_unp',
		// 	'type'     => 'text',
		// 	'title'    => esc_html( 'УНП' ),
		// 	'desc'     => esc_html( 'Введите текст' ),
		// ),
		// array(
		// 	'id'       => 'footer_register',
		// 	'type'     => 'text',
		// 	'title'    => esc_html( 'Торговый реестр' ),
		// 	'desc'     => esc_html( 'Введите текст' ),
		// ),
		// array(
		// 	'id'       => 'footer_оffer',
		// 	'type'     => 'text',
		// 	'title'    => esc_html( 'Оферта' ),
		// 	'desc'     => esc_html( 'Введите текст' ),
		// ),
	)
) );
//end footer settings

// start Social settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Социальные настройки' ),
	'id'               => 'site_settings_social',
	'subsection'       => true,
	'customizer_width' => '450px',
	'desc'             => esc_html( 'Социальные ссылки' ),
	'fields'           => array(
		
		array(
			'id'       => 'facebook',
			'type'     => 'text',
			'title'    => esc_html( 'FaceBook' ),
			'subtitle' => esc_html( 'Вставить ссылку на профиль' ),
			'desc'     => esc_html( 'Социальная ссылка' ),
		),
		array(
			'id'       => 'instagram',
			'type'     => 'text',
			'title'    => esc_html( 'Instagram' ),
			'subtitle' => esc_html( 'Вставить ссылку на профиль' ),
			'desc'     => esc_html( 'Социальная ссылка' ),
		),
		array(
			'id'       => 'vk',
			'type'     => 'text',
			'title'    => esc_html( 'В контакте' ),
			'subtitle' => esc_html( 'Вставить ссылку на профиль' ),
			'desc'     => esc_html( 'Социальная ссылка' ),
		),
	)
) );
// end Social settings

// start tutelage settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Настройки опеки' ),
	'id'               => 'site_settings_tutelage',
	'customizer_width' => '450px',
	'icon'			   => 'el el-guidedog ',
	'desc'             => esc_html( 'Настройки опеки' ),
	'fields'           => array(
        array(
			'id'       => 'tutelage_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Логотип зоопарка на фото животного' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress' ),
			'default'  => '',
		),
		array(
			'id'       => 'tutelage__label',
			'type'     => 'text',
			'title'    => esc_html( 'Ярлык' ),
			'desc'     => esc_html( 'Введите ярлык' ),
		),
		array(
			'id'       => 'tutelage__title',
			'type'     => 'text',
			'title'    => esc_html( 'Заголовок' ),
			'desc'     => esc_html( 'Введите заголовок' ),
		),
		array(
			'id'       => 'tutelage__desc',
			'type'     => 'textarea',
			'title'    => esc_html( 'Описание' ),
			'desc'     => esc_html( 'Введите описание' ),
		),
	)
) );
// end tutelage settings

// start Other settings
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Другие настройки' ),
	'id'               => 'site_settings_other',
	'customizer_width' => '450px',
	'icon'			   => 'el el-wrench ',
	'desc'             => esc_html( 'Другие настройки' ),
	'fields'           => array(
        array(
			'id'       => 'other_no_img',
			'type'     => 'media',
			'url'      => true,
			'title'    => ( 'Нет фото' ),
			'compiler' => 'true',
			'desc'     => ( 'Базовый загрузчик мультимедиа' ),
			'subtitle' => ( 'Загружайте любые медиафайлы с помощью встроенного загрузчика WordPress' ),
			'default'  => '',
		),
	)
) );
// end Other settings

// start CONTACTS
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Стр. контактов' ),
	'id'               => 'site_settings_contacts',
	'customizer_width' => '450px',
	'icon'			   => 'el el-address-book ',
	'desc'             => esc_html( 'Настройки' ),
) );
// start phone
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Блок телефонов' ),
	'id'               => 'site_contacts_phone',
	'customizer_width' => '450px',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'site_contacts_phone_editor',
			'type'     => 'textarea',
		),
	)
) );
// end phone

// start mail
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Блок почты' ),
	'id'               => 'site_contacts_mail',
	'customizer_width' => '450px',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'site_contacts_mail_editor',
			'type'     => 'textarea',
		),
	)
) );
// end mail
// start time
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Блок времени' ),
	'id'               => 'site_contacts_time',
	'customizer_width' => '450px',
	'subsection'       => true,
	'desc'     => esc_html( 'Жирный текс оберните в тег <b>жирный текст</b>' ),
	'fields'           => array(
		array(
			'id'       => 'site_contacts_time_textarea',
			'type'     => 'textarea',
		),
	)
) );
// end time
// start location
Redux::setSection( $opt_name, array(
	'title'            => esc_html( 'Блок локации' ),
	'id'               => 'site_contacts_location',
	'customizer_width' => '450px',
	'subsection'       => true,
	'desc'     => esc_html( 'Введите адрес' ),
	'fields'           => array(
		array(
			'id'       => 'site_contacts_location_text',
			'type'     => 'text',
		),
	)
) );
// end location
// end  CONTACTS
// -> END ZOO Fields


if ( ! function_exists( 'compiler_action' ) ) {
	/**
	 *
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field's value has changed and compiler=>true is set.
	 *
	 * @param array  $options        Options values.
	 * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
	 * @param array  $changed_values Values changed since last save.
	 */
	function compiler_action( $options, $css, $changed_values ) {
		echo '<h1>The compiler hook has run!</h1>';
		echo '<pre>';
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		print_r( $changed_values ); // Values that have changed since the last save.
		// echo '<br/>';
		// print_r($options); //Option values.
		// echo '<br/>';
		// print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS ).
		echo '</pre>';
	}
}

if ( ! function_exists( 'redux_validate_callback_function' ) ) {
	/**
	 * Custom function for the callback validation referenced above
	 *
	 * @param array $field          Field array.
	 * @param mixed $value          New value.
	 * @param mixed $existing_value Existing value.
	 *
	 * @return mixed
	 */
	function redux_validate_callback_function( $field, $value, $existing_value ) {
		$error   = false;
		$warning = false;

		// Do your validation.
		if ( 1 === $value ) {
			$error = true;
			$value = $existing_value;
		} elseif ( 2 === $value ) {
			$warning = true;
			$value   = $existing_value;
		}

		$return['value'] = $value;

		if ( true === $error ) {
			$field['msg']    = 'your custom error message';
			$return['error'] = $field;
		}

		if ( true === $warning ) {
			$field['msg']      = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}
}


if ( ! function_exists( 'dynamic_section' ) ) {
	/**
	 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built in icons.
	 *
	 * @param array $sections Section array.
	 *
	 * @return array
	 */
	function dynamic_section( $sections ) {
		$sections[] = array(
			'title'  => esc_html__( 'Section via hook', 'your-textdomain-here' ),
			'desc'   => '<p class="description">' . esc_html__( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'your-textdomain-here' ) . '</p>',
			'icon'   => 'el el-paper-clip',

			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array(),
		);

		return $sections;
	}
}

if ( ! function_exists( 'change_arguments' ) ) {
	/**
	 * Filter hook for filtering the args.
	 * Good for child themes to override or add to the args array. Can also be used in other functions.
	 *
	 * @param array $args Global arguments array.
	 *
	 * @return array
	 */
	function change_arguments( $args ) {
		$args['dev_mode'] = true;

		return $args;
	}
}

if ( ! function_exists( 'change_defaults' ) ) {
	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 *
	 * @param array $defaults Default value array.
	 *
	 * @return array
	 */
	function change_defaults( $defaults ) {
		$defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'your-textdomain-here' );

		return $defaults;
	}
}

if ( ! function_exists( 'redux_custom_sanitize' ) ) {
	/**
	 * Function to be used if the field santize argument.
	 *
	 * Return value MUST be the formatted or cleaned text to display.
	 *
	 * @param string $value Value to evaluate or clean.  Required.
	 *
	 * @return string
	 */
	function redux_custom_sanitize( $value ) {
		$return = '';

		foreach ( explode( ' ', $value ) as $w ) {
			foreach ( str_split( $w ) as $k => $v ) {
				if ( ( $k + 1 ) % 2 !== 0 && ctype_alpha( $v ) ) {
					$return .= mb_strtoupper( $v );
				} else {
					$return .= $v;
				}
			}
			$return .= ' ';
		}

		return $return;
	}
}
