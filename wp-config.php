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
define( 'DB_NAME', 'wordpress_db' );

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

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Nvx-=FQ#Fw1gGNm*Y.KYHFznZIG ZeO$Sj(5mw8rH!x^]F B W[:<+*u.(9f#D@m' );
define( 'SECURE_AUTH_KEY',  'F+~:lX_zeb{n0~RN$4/xI?6/V@[ju9`|rV84`}?U3x>Bjn4eH)X |H,h^(9_0?:k' );
define( 'LOGGED_IN_KEY',    '<04>(o<;1;5R/pKS$o!F!)}5:6S?qropL)N#{KN;~t%G?9&G!:^=1U8Sk_9}vNA.' );
define( 'NONCE_KEY',        '[T4V5kBpSDZ1[,YV8W, LGA2Z@9^ e6g[tC_FbX kaz8pMW<|5L#n}$dM0u7&% &' );
define( 'AUTH_SALT',        '#6F:`z3@c,}(+$~NP4R%-dAV[Qm-f0J%/^rn7?E1 4|C[b}UM: y?fA#&|!B@c-E' );
define( 'SECURE_AUTH_SALT', '5jQo$xGBu}[!>Lm*`}xZ},)YLB3F5o=s95=S<Ahy8$x/qq7{0(Bg@98i+5D6wCMe' );
define( 'LOGGED_IN_SALT',   'RrbC2v?4JvSn}:SL{7k@tsgDEG8:3rDGgl_1.|lE)S&2Ksq<H #L8-(%)W:hxi1)' );
define( 'NONCE_SALT',       'Nv`3cthn~  ?-iwyT8/,pQ=QCrBEKvrLSw^PN,m.l=G|/_ThHFZ>+J&T)+.40PW+' );

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
