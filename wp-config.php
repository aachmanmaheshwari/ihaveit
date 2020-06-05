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
define( 'DB_NAME', 'ihaveit_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ybb{6j8.# Asbu  *8Q]:XhTx==y{yL?eYW$?bLnDW7/2Xh>llW$XnE:=.X@C{*<' );
define( 'SECURE_AUTH_KEY',  '<T/NMLA-nE}@PL#}SrYCwVIyF5b(+{d<:8YSG2_QvA54M).U]NOLM]FJkfFno=+&' );
define( 'LOGGED_IN_KEY',    '<xm.Y[#DYw{;*;E#r>-DSpF,LiM+PpKWF+cAE_6Go*a@t2W!bUcW2^;kv%[,WS/r' );
define( 'NONCE_KEY',        '`EI]rLORsx,V^_c{?s{aehj(L}^@XRR_0a=$vRex.kjz:-T&7tJu}2A*q;[0T]&6' );
define( 'AUTH_SALT',        'fK/dwg<L>N|gq#QWd]>N062lx$mG_AlqB@W(Kxq.$`wj9&bUn+Xz?k)^)^St]5-q' );
define( 'SECURE_AUTH_SALT', '1jBVx/i)L7znv&x){xN}&J7mpD4[B`~6|x+cr|<GxJ-QZdwH+@g;vjX<V-w[?&}:' );
define( 'LOGGED_IN_SALT',   'hQG(]0$AR2E)^:)]px7Lxv|gn&4T9}4dl8Ve4ea=u!(e337X_XYjKq.fFnCKwQqp' );
define( 'NONCE_SALT',       '3 `5FqN.C22+(vLP<}Rxd-;zdqNMxl,1(bMD1zv3pS!#T^hCZ^0shBZz^p EyYZp' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
