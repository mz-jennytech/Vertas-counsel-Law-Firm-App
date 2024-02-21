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
define( 'DB_NAME', 'lawfirm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '/^B:03wJkXjV[w}Nf|ZTW/?:j(@jiBUgn5L`6#?RM8y%ZDE_l+NgmYbG14i/=1>U' );
define( 'SECURE_AUTH_KEY',  'g[}s~<Hn5=4G08!GKPVoOQX:%tT0|ERzn^?1iF d-o2U3%xt|D?aL=UrsS_J70OB' );
define( 'LOGGED_IN_KEY',    'j09J5Yt.Rf6=QpWZuePc&d,PJH[^$?;qgq$jPaY7VSB^L?X@BB-A5LkKdqXI5Ifq' );
define( 'NONCE_KEY',        '4Fg*~?DCFY15uF`HR.dZy4/+sQH-EL3KMy<co/>r!zy~k@{af2*|_XvAP?!&cc=b' );
define( 'AUTH_SALT',        'hvJ+P2<x31Ylc<z.?d,&r/xh3he,6@q]~b%lSM E?7>?XwGojsC1y`YTQV8X*oJ&' );
define( 'SECURE_AUTH_SALT', '%fn=g74e6y.bgb1s{FFY{M#1zK?tG47cV)K#v0V~.KU=J76bbp`Df~fN+_8V(pSj' );
define( 'LOGGED_IN_SALT',   'ttrXWhmLW3GO2wqI]ouR{iOM;sM#Pq$d=o{{eY==X#Q[nY}6~Oet@Wg9t^<.kW4u' );
define( 'NONCE_SALT',       'N>M7-3ei,g%wUOh[rq uH,<M^l?|6~zz^=Fo^wQiBX=QU JVcfwiCDwP1r[1p$+Y' );

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
