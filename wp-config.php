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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1111' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '8h.8(2eMfm+#yO92=7xv;++n#:U0nUpMd]eDVCWV?xhFj%^nF1XCoxndiCix|mal' );
define( 'SECURE_AUTH_KEY',   'd`GiGLmABus4p:Dw:rd:dF?m(AHcy(kp~-%a*i?MpWB[cK`C$EH|@^j9|DpP!!jL' );
define( 'LOGGED_IN_KEY',     '|fdxQv(dA2o_|A8z>L(sZ+UKC#eFI&[ubQ]XOQK^o)[T/D!vEIY3d9Rh,o~kPTI`' );
define( 'NONCE_KEY',         'p,vnS=~?E4|{rs7etZ$1QP30]TUryT1Bl8UL%ZdLJz7#NO1^KiW8Or?2wP+L*(nN' );
define( 'AUTH_SALT',         'R[F@l/eq-$5{Oj$t(GEOT+_P]W_?I4GC*lhFHp@:iPR$yX;bZAG? g8Aai.5pn#X' );
define( 'SECURE_AUTH_SALT',  'z`*BY%@91U7Js#JcAFE?-`CxTF4cdYFGsq8[@]&X!!VWynuce<<!cjQt(<?SM+O1' );
define( 'LOGGED_IN_SALT',    'Z2[dwwM<g>_HtemhmAxm&hUVl+Cn-X4+2!|uL~>S#,Jkj6O7rBN.A[MfQ*Eh(zp#' );
define( 'NONCE_SALT',        'z6O_/36/ Xw1F2-^`FEM=)d#kwp8tlUyHyX?7Hdy!|EI{X7}S$/,;E$k9yHnYu&P' );
define( 'WP_CACHE_KEY_SALT', 'lb,q$F0QOJ&16&@g<d$qYBR)TxWnV,TmZ$fCKqspwz9/a?z[;&3WbOed@ZhL|YIu' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
