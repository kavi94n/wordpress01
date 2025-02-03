<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'la vie des planete' );

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
define( 'AUTH_KEY',         ' dmi}<Bo5mk~kgtbrZ0}NK81t/-NiXU[)bn--azaJgqH%;Q$iOrDNgTbN:Y})}cs' );
define( 'SECURE_AUTH_KEY',  'p_?C]`b`lGy2##CiHOX|yB.E#<vp$E->VLq%i,#Pm!05F0<=7D(Zc%xN}hj7ncW!' );
define( 'LOGGED_IN_KEY',    'aS/cU{)f):O&pHN?PmmDWzfVguXGRpKzomM?k.`3sLdn}p%)t_IW_t:-p}E%KqQe' );
define( 'NONCE_KEY',        '0[JV$~db^1 JC;yb+>cv~5mfq329-UkAdJ6|:W99i/Q^~f`Uy R6xX^`b@=9H,Z&' );
define( 'AUTH_SALT',        '!<E0!SN-mf[iz<H(#ii) ?_P60#cx+@d&W2XV&<[zJA^(~Hm$nX^/0HrV?rr(l)y' );
define( 'SECURE_AUTH_SALT', 'os6#2=b<lUkj ,zm#>t^QfpSdED2s~%M[KMZn-zvWRhE$C/3O[sZ-Tb.`H3&cQ+1' );
define( 'LOGGED_IN_SALT',   'Fz-FBM]P/BoJv>V9Ap--iNV2o1Dr>{t~RIz)]2S8&&7QVgysf3?Vc.cUh!p]C2mn' );
define( 'NONCE_SALT',       'U*ymaDEMoX;qRNQY(Y&sL,V*J~0EU8rr{zs&Uq-WR@g5k~<$ nt1yNvy4HVyA;xA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
