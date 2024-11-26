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
define( 'DB_NAME', 'aaveq' );

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

/** Install plugin without hostname */
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         ']^T,s>#0XR?|8<9_$$@g5Ww!5#PyH6czWXoiv1~[:1({&K-kgmJ?+MAInXZw),g6' );
define( 'SECURE_AUTH_KEY',  'g@>*iXaZVclOHaD[aI2l!V_Rh^ukGA]rDXH(z9A$NI<RacmBAZ.>TERmy!gdIt2y' );
define( 'LOGGED_IN_KEY',    '@LeCU20)|PorXkmxn)4C];hyF!g:J{/q,d%3i$:5SF#TO,2`?S!Cg5A*r+({j7_4' );
define( 'NONCE_KEY',        'jYUHMPs3$Dzl;(>HVOdRii5HGI|gaJWh3Bb|5B!mHw]d~Hg Gqa 7A]`sTTg3|A#' );
define( 'AUTH_SALT',        '%{zsX+gp,ph5FEd-k +(7ny|?*87cKDBeE`5dNh7)oz}8YR#c:$8jK+>?0YOv%D?' );
define( 'SECURE_AUTH_SALT', ' [{t,6OwL5d1!f@_oLGric$5Y2yQliX1{XS6rSW<QIejQpytfa=:k;0 nYzXu;H5' );
define( 'LOGGED_IN_SALT',   '0!>EJ{7PRB])I]QavH:Ww[,MYN~kFICN}CO[4q;vz~]*=&M~+ib.X9,C*Ixj,YYj' );
define( 'NONCE_SALT',       '|na?F05AQOL9gcndxwqmRZki`7C:g/8jr} T< ?2JK;:p*kIvsJ7ZBQ7L*zkyK?9' );

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
