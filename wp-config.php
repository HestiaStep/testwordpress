<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpdb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'wp.loc' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_~$QJ5uUBt{1w)S()Pd8Vf{( cu/G*v6^<+t*7%edd.w+(`zBk8CaK(]Nw6;*vzM' );
define( 'SECURE_AUTH_KEY',  '8w)]S+2W3I*gnVTizpNjD>o,6g)c.MPP}[^C1^apTWyQQ~DznQLi %$,cHTy/3h#' );
define( 'LOGGED_IN_KEY',    '0c1;nZlmj>G?GISbU-}m]Pp(qgF@h{yRx(KS{Pz[2y%FaTy}?5h.yay-9*1pYSl<' );
define( 'NONCE_KEY',        'DOXQRhAk~-&]C{_eDb5Fyi(o.WE]hGBDO 6:ysdx~.NoS=~x8Fh_j8oMd8FWDM.q' );
define( 'AUTH_SALT',        'N4H&jY0.-=s/}_ZiEUVJM6oAUj]i[Jlwk^?LnkHW9<l%x%*D)l2aDI0.o&l2?,v$' );
define( 'SECURE_AUTH_SALT', 'R&Jjrtw,!g0x-i=)mrXk]8h3IiMm/*A#B!iJrC,0wc@o*uQR&Y`(Vukbs/(ow#7e' );
define( 'LOGGED_IN_SALT',   'L,;LfOb[e5Ev#mt!09:7CiF1Ei[ZIW(S3_K8i>IWUZYd@T|{{/8WG[Dkay#i-WR$' );
define( 'NONCE_SALT',       'KBc{`&#e0!}*TQz-eKKvrWi`S5YQe,@;,HtU:!s4e*[KU74R_Zx^o~nd:J3$Zvy<' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
