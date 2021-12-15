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
define( 'DB_NAME', 'WP_DB' );

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
define( 'AUTH_KEY',          '5g7jm`ThmybQJP-yi<B/J*kq;Zwvvwa;~fbtU/=h.zw3,yHV5g&tf>0~n{>Od% 3' );
define( 'SECURE_AUTH_KEY',   'H4$U;T&]OGg$~I%S)^I,%XZn:OOf:w*H)V3=wBKsQ6l+#A]Q_%!#2mt? BQ!%>Sh' );
define( 'LOGGED_IN_KEY',     'mB~Sond/a ]t5K8/!]J!gqAulR2wyZ!u|Mqkq}XH{%b4m<L1tpG,1OHV<S-yVEbP' );
define( 'NONCE_KEY',         'syx[NjY0iql3 zKbG^1q?B%E]&ZF%ZtM4N,^B_op^aW1IT@kWgF8Ke]BpUCN7:[J' );
define( 'AUTH_SALT',         's.9cdE+2R%N$EQiBl;w@9o`9h %jn;a$$`m1G$WU+9#t%a@PEAk1(EY]s#`lITV0' );
define( 'SECURE_AUTH_SALT',  '3##?3DMfn,QH)(W*J3ZkKSs>^R:r9.D|,t/};(V,P0+7*+k/hZ;7!^y_qnAxnY./' );
define( 'LOGGED_IN_SALT',    '{hsHU;nM-98FkGJXiOq?OY-Ojew#@~_9[sy6,sW{x&:82+I,=$)6e]h3Gl;3}dUM' );
define( 'NONCE_SALT',        '46D2|l{onln1#hBUkcTx[t.bDj~)ejP=ncO8z3oo<</,DXa~PJOmE kfr,18P#.t' );
define( 'WP_CACHE_KEY_SALT', '2b5HK/92?jP5t9GJ@qic_69EDZ0I{+j(@KE|,}k/JK-`*!zxY1QMgYR:Nf5:zg}D' );
define('FS_METHOD', 'direct');
#define( 'WP_DEBUG', true );

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
