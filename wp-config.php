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
define( 'DB_NAME', 'wordpress_10_most' );

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
define( 'AUTH_KEY',         '.Rf=`:a>6LJO&*5PU8q#OaUj(k3o;LzRHDftC~+V6O^ND}/kbm>i#+Dc$WMBVu# ' );
define( 'SECURE_AUTH_KEY',  'hUt02MDU=GTMB^4Hoj[Kfd2B7@u|yM7eyPXFjLD72J~%93u^^J*$Tu4cl57Wa73i' );
define( 'LOGGED_IN_KEY',    'V~>yRgbN!AAQQOjW#u*mw0{p~:}StglOfM(-bW%|pfpI[i?UFDK,#n;:+{2:^[G6' );
define( 'NONCE_KEY',        'Ar`qU<unvz#ok?IcApc;S/Em:H?ckK-|yJ>Dneyvf^b^d3n]v@>nJU6f8v MuPC>' );
define( 'AUTH_SALT',        'HO{SdqI/>N(:/Nb0P{m^uVpxtZgi8]mx]MW&A^]i0vnq>4aZ1ym [ve],QukW]=w' );
define( 'SECURE_AUTH_SALT', '!}f}r 9(w`S;B^olBGRd{5;y4BSjQh5Q_+gTK1Ot_Ew]/1V~J:E6oT!.ee#xv-n~' );
define( 'LOGGED_IN_SALT',   'g2VW6^<-^-myJ.$SFZ$}[nEgA8Ot:YhCjLYrN1nk{sJSbM-Ap->ECNJ?:0x]38mw' );
define( 'NONCE_SALT',       ']+E/6KYlhs%WaP.{;S=]n4%~rUQh-D@0J-9lc+j5C!O>=f#U#EbrA*)wj8&aITkh' );

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
