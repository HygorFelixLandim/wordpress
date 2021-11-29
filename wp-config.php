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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'uHH-ru8?h!FwYH5t.1^tO$/5IC<J+eHO^ZK@MN~njd%mbAi+Ti-U<7o0-?4;:M:@' );
define( 'SECURE_AUTH_KEY',  't5X1@3*=- @W5=V[y?twiz2&>1*Jn]Nqv(mWUPMk n|4`sW97G=}AdMr%ByUhT0h' );
define( 'LOGGED_IN_KEY',    'QBCe>D|o%>:j8GJ-zC dl{=`4Sd}W5aQ!PH%u2<oUy9TnAQkUM)x;m*/qV4XP!i&' );
define( 'NONCE_KEY',        'LD^F]PTxpCrY=FmP%eDRn03t.oYjjh9{eB+~,H`}Yg@ZV9P9zZQ4k!%7RJbv%Ewy' );
define( 'AUTH_SALT',        'r3%,J7hH?)W*6/o*!S#myQkDco$)Q!PJ><Hk?Qy/>OHRpY&W1au*ZUSut!UCOTL%' );
define( 'SECURE_AUTH_SALT', '/W[NHl_`K9?MKf>U2 JL:f/b2V>/Wow~E-F,ugK,@0$sxvXqs542%%G3N)sUeL?j' );
define( 'LOGGED_IN_SALT',   '<7uOG&Rb(c,N5*UaJx<<i`doEYH;LV?{lB-5t{>=D>y.MDv*PM9$ikGgG41x(HI{' );
define( 'NONCE_SALT',       '!hsL,_(,,7LC G%WZslZn8EFw%^b`)7ZiaT4EL^&&_N0Ge2[G4NqD-FaO1)[cVD3' );

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
