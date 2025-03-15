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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@_YJ]<+L7Nobf%nJ$XT6x0d~wLI7N!3S*s&u0S<gLVBG>^Dvl, UD}bx*mN`i=1*' );
define( 'SECURE_AUTH_KEY',   ':F1Z:h-{hBzjz f*UP];64IF^bO,.q:CRjA0rMSFu(P op{?-YF050Y3hnD7]dMN' );
define( 'LOGGED_IN_KEY',     'Bs*|a,d N{:|BX*,P%W6<]%Qp0?v`&_`{qT2B`c|/l{?sefgzU.odx[K<AMmXnJT' );
define( 'NONCE_KEY',         'oIK)a8>3#QjEsvTdYUQ:]2|zx/1b~T{PiajF|bxxiSOGRo)iolT.] w+ 9CPayPI' );
define( 'AUTH_SALT',         'Zs^8uu1nOwmrlK7,U=5%c+I2BI=N^+u,9]K?S*5cHAd;0?aB~c.lj?&XA?5MvWt:' );
define( 'SECURE_AUTH_SALT',  'suAPBG#rQ<J7d~1R+!*$~;xVMqoMM.8K0Z<qd$I.vOCjVt%|$2r&gZ.g^9(XGuZq' );
define( 'LOGGED_IN_SALT',    'dm51k;|2)5B2ZnH1t&2Hb{+ta-rU;v=o:Y3W>BW}u:IBRTh43zkCW>,LsFKDrIsH' );
define( 'NONCE_SALT',        'ys)}2;.9td6M*`;84AWZ%IYHenxl5HmD3t/`vmv>u~Y{_4k3Nw3x5BKqAjS,!]uv' );
define( 'WP_CACHE_KEY_SALT', ' 5%/o0.`LKn?xiSO^W[MP`R+Dig(cn=#enpXgYT<j./@|F;M*;Sr^<m]TBN.<I)!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
