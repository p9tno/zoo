<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'zoo_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<jC-&+E3GUnatO (TBkWgpCKB#2 sJwC58<j7|DlFdfm|0cEw}<eL`G~^7_&AQZE' );
define( 'SECURE_AUTH_KEY',  'TA5>lqST>~){Y,:|Cs;XL{^sipf=Epm8fwAJY=&y_wTt+r}oHo> -6v@!WLEV7tq' );
define( 'LOGGED_IN_KEY',    'XZU-GA>&Z;o{lI1%4dZ[R&i9[F;sQXC7e25lK7 k;QRO# QW(kwa82?Y5q`_X;GA' );
define( 'NONCE_KEY',        ':cY|;4xjpObqEhY)8{/X4a|mj*7ZF1EY{>3y$VS(fxy)r6WD^q0-3S&G0d 5?:v ' );
define( 'AUTH_SALT',        '?v{}|)2nd:W@r2/TX^/]l{GbKVR?b;2sC1L/>,Iu>Jm=E^caX5U)WtdSDs/!&|Gl' );
define( 'SECURE_AUTH_SALT', 'uKe1~`S5B9t7 jq7dr |smve0YIc/36h@$t8K{&w`b},{Atii`9<da|R%m;A%GXV' );
define( 'LOGGED_IN_SALT',   'U15ASBBdJ:aj=3>$|Nkd57R8`sYfI$:z|pIWziE:Q?{B[79Y+2sb^E2e]v <!&4h' );
define( 'NONCE_SALT',       'zHbZBWQrI.4%{nL;Qs.%qF#`;O9(niFKfaxdl+p]VgGguXGo>f.e0EP}!`` ?_F[' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'zoo_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
