<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hrach');

/** MySQL database username */
define('DB_USER', 'tasktestfree');

/** MySQL database password */
define('DB_PASSWORD', 'tasktestfreE123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!-_f]FZ+8S,QAxHL9y0WC4]PeMG72Du_daY*5?uj.f&1GH{td;!.x4Z#294Vhmts');
define('SECURE_AUTH_KEY',  '`eLI5Hbi0Uiw_Ijw<Z,MI.O#87&`?xs4On4x]|l(Y^lD4@2-vETTb^fH-!fPf;|!');
define('LOGGED_IN_KEY',    '-S4 !y~dHC<d9rq8W-Es$KFf|F:ah5Fjm=JsGN^#;V9HU9?3-]y[D*29|5&dWCp`');
define('NONCE_KEY',        '(c&5Tu8tg)>_weYSPG.;xb:usGv[32Kgz^ZRCxJ_n[$&V:k6>|It~~P7_kk,1D/>');
define('AUTH_SALT',        ';(HO92(T~C~9($]fJbn`qMm`F]-zf&ErwDiunSc g,Hs)$#Y!((gAIM6^OR~?!}g');
define('SECURE_AUTH_SALT', 'LHrE@~ov!Vs;lk=X_IW (.<NaokKKyTM~:)%ssvU1{n/@8<j^m;kdQ1wX?H0lP<v');
define('LOGGED_IN_SALT',   'p[}OV!3d`Qxyrz,I^lcq:eW[Kc#NGemdV`N(FywV:C4#tI5D:~rgb-^pAm9v:oOf');
define('NONCE_SALT',       'i|vQL8J+{4YnY8/&R^]R&zVKj{^:Ll^SD7|EPW )h+X wH./{>i,zdC)iNrUoftu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
