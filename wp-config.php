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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yasirahmedghauri.com_db' );

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
define( 'AUTH_KEY',         '/4@ei&u7<t&8J}X}hf6.;0-~L+50b!lyV+<tP`2,d=Eh7>0Mu2~.8<k +zP?gCiG' );
define( 'SECURE_AUTH_KEY',  '!{BE*67GPAC(2,!.(21~>$+lf>zI]q7=m.Ym3KI&:x|v3q8MRIcZ9VoBxQ{Vsn<+' );
define( 'LOGGED_IN_KEY',    'o3&,3R9fw`qT~O?jY.W^/<`Zu~O|yWU/q6UR;F BYVw]c!g]*S:?[yt8U1SMr+AK' );
define( 'NONCE_KEY',        ';}e}D83E_K/<n]uQ>0?ZMN`=B :f<M:{&NzR,1!rm.3}0B%#eIl|f2j:r]TjcIk>' );
define( 'AUTH_SALT',        'j{55j[(i:81p;EL|];^-{E%!<>w`76|zO~/(6!#e#01*xCFCd=%1s1:IT-5{ceJB' );
define( 'SECURE_AUTH_SALT', 'mz1i-HwXBKVi%zB0KyG=<+HN(/&;ZY1X^Jj+M;=Gi6d>+1FK1g_{h)pK8FimLXL?' );
define( 'LOGGED_IN_SALT',   'nb 8oI>#*@(6Tb/C?;?Pv,^kAyd`okXB< [GjE2qC&a=.]9fJRC8xr}TNc5Tss J' );
define( 'NONCE_SALT',       'Z#CZ<tkbay}ql7vI[.vq,6trdKE([TXtgvE3*]PQ3IbC0Kw]G`y|}^z4Z7&fI!fO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
