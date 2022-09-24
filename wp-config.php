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
define( 'DB_NAME', 'greenbox' );

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
define( 'AUTH_KEY',         '7G,$hHZm!tW!$u^jRJV(okWq:?6f<Q9Lnn,]oN,aqsHW!d?W%=)kAj$6]3pai3(`' );
define( 'SECURE_AUTH_KEY',  'dc![Rztz{XL.51ZgUCp.o7M|+cv=_,.&MTWMAHJ@_%^=6qh)G@^t EZeVTwx9FB-' );
define( 'LOGGED_IN_KEY',    'r9-z,EC5YNA{x)`M3Mts7iUwdy*Z41.B8{r@$IQE]HfSHf^N~FT0:*;?B:eD(0n!' );
define( 'NONCE_KEY',        '-rTN1]9{RS>rl[4-Wd&_#K1>D*F2J8.Vr ,e!|+X!)$)f7<Tk|*_~l3_1`A@$: >' );
define( 'AUTH_SALT',        '7:u38O~EkC.LSTXbvI2L?a~*m1T9M*NLZz(VKl~  B5Pe~f:.E2br9SjA[nCnUe&' );
define( 'SECURE_AUTH_SALT', 'Bn;21sJGd`7/e1^j}S([O3Rz(2-.@(Fof%/uDu&ks&/Sn=MR,0q*0nNDxdHyopIs' );
define( 'LOGGED_IN_SALT',   '2Tmf)%!wgsFIdu|nrt|3B^XP8]J&+^Y]Aw?[0I#cb/F0dNbT[XQ{1|[8{;]^APST' );
define( 'NONCE_SALT',       'BeO-6eQNZi;66mufZ!bg+5NvT]YwrYn6n7h!52ZcvNqwVZD4 =7E_{c4)kND&VT/' );

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
