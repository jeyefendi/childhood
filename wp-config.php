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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '_FzL%<Y)Grt([9as_MpK_p7MgIf+ve7>tOi[a+_QqL{iH~iAr @uAVmOZ7I=G%}d' );
define( 'SECURE_AUTH_KEY',  'tbi@)l~v1e%?>+w|cJq7c3fs>B4XNA82K,FdKkOKKs/Ub2yY{S9/QyW.+?..IwOg' );
define( 'LOGGED_IN_KEY',    ']|&z5R}9<Com)ZdXe>Y|7V_0i{>TX_3K@vYMP}5S+}OC08(7;z]Ve0Zu3rR2A+C[' );
define( 'NONCE_KEY',        'T,myr?%;vUydX%3D fs(wq{JxcIbJ]vE$s/8m)oCHfM=${xDASgmlU/aH111v[d^' );
define( 'AUTH_SALT',        'Hogng_{H1`A2*x_^8f5-i],}Q~K-F>M7(bPITe;|@hDl;T@Z58<FY4`$d0}7$<&*' );
define( 'SECURE_AUTH_SALT', 'E4>Id>Ef&m|UDd+e sZR@_fUh(kO>x?-d&I.aO8iTZrpc-DZ^;_nH?[&9!{HtACM' );
define( 'LOGGED_IN_SALT',   '~sxR_7vk( V^<Zdc(fx2a`8`;bdm<Gyv9E77O3%[0Ys&yGbU]i2lYd*E88* }[[1' );
define( 'NONCE_SALT',       ';Pl.DA89PGB1fi.K^a]RfJZG{+1h5fs}o0.awl@-mP 6@!%^&[GSL!gSC$$grxd3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
