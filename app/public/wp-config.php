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

// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' ); // <---
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' ); // <---

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a|&mN_RVbuJNaS)c-j)i:;1IkZi|c-a`S!8oNfr?2Jv~alyp#eNYjuhcY$RpPC66');
define('SECURE_AUTH_KEY',  'BaHt!|g2S-f-a|CQWxHU6,HeL3J#PecymvL D`-g ~t6}jJ;(rt(38vrsalU>D{n');
define('LOGGED_IN_KEY',    'H/KGobWvi6(790V4K|%^(HYcj8t7-uE2rKv`rg-pxMVnY{ GqaS?Jtafmi:)i{-E');
define('NONCE_KEY',        'ZAw}-14:lQO2<./~>f-+%Keb<_9~{LbbBwqG_[S0luzaD~jJ,yOW;@AiWO)y4JCA');
define('AUTH_SALT',        '++z+oX#x5F^B@4x)d<oEZLdbS(qUXN>__1bu-nC@W+g9-+$W1$La@Z[2._^NPL+8');
define('SECURE_AUTH_SALT', 'HbUDA|( )FV]X*4+dK.l|W8c11iXk3v^?P,aL9FS6}]pswP+XY%_b2Nw~4O~~XqO');
define('LOGGED_IN_SALT',   'U(IZ:bD;F.J:UXf`4BWQCHK`lui|hEM4F3D>Yh=R1jey@`ZbPt[Fw{B~XH|3JK68');
define('NONCE_SALT',       '*6{:7M^BlNMj`IOO_hAr1|W=XIm2[$?lQm;jks^z]-B|}H9t[rYo,BzYoSo){^/-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' ); // <---
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
