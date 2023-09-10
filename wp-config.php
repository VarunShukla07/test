<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OgB1J[)V3CtusB,+3i PXVtq(Opa3WRnum7#@=(JuM$*dnE1rKD=;$9bwf}RsFC)' );
define( 'SECURE_AUTH_KEY',  ' Lv*)%~|GX7nN+pG=6hY)THe=+07|7SFO)xY;X1TBwMB,+O|f&HB18pQ/ jH(bS(' );
define( 'LOGGED_IN_KEY',    '+R<xH:6n~lbKU,HF}5MTm3oi-|/%J4H_4NqrOE;3mp^:Ut_x2;dY1@kMe#R6?<HS' );
define( 'NONCE_KEY',        'JC(NFB8D)quAYZ{ aw<d/2+%uOkz{ruV0,~Q]RW1_uf$XShCu)[JYuOdd59ZM1O8' );
define( 'AUTH_SALT',        'y4n+b7j3U(/X29s+lX~BtMAH3l7`6BifWS/n0:$%EqL{H+n<;31n?[>ardGU!_.P' );
define( 'SECURE_AUTH_SALT', '+=n{WAaw*W+WexyTFn8tN+ZsJ%IybGf Si=BJ_f@[.e]V*MjaB<OdW:UcJ(67dSo' );
define( 'LOGGED_IN_SALT',   '!5L1|.5t]L9YR`e071Y:-|oT!%.q3|}esWt]`SZ#6]jL{?nY3cS7FW)k)A/VkMxL' );
define( 'NONCE_SALT',       '0FzTX,)#&0tSZfE=<2rdt#/HIxkR[^KBBt$QxQ Zy&/=!uxL|{dlZM)/e.DL$iW3' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
