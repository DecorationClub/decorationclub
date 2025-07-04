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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Ahmed' );

/** Database password */
define( 'DB_PASSWORD', 'Ahmed3&1224' );

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
define( 'AUTH_KEY',         '/P]zc.PkM,J>#:pL`[1Kmmc8JuAXWH%z{=v1uAU]F1G9:O+,)m.O%b2Md8WPghs*' );
define( 'SECURE_AUTH_KEY',  'SVkXRUHu@YI{?e?4j g]lt(72|.WL6hM%0:9=<[ImOnf:wH11[F6dd?/IktpK@X{' );
define( 'LOGGED_IN_KEY',    '?~z:,2*aunMry<uI44d)AuUe=jizf3]WwqcA?ZRu-qITm7<e%>M}gks&jvuE-*%v' );
define( 'NONCE_KEY',        '4GV?M7TVIK(+SZ!dLAjd4 <V@|PeCk4&0SzrNAdKtb(7t3pq[ahb,t@k+{u8C&Fe' );
define( 'AUTH_SALT',        'COT4=m4Pk~3j/jEZpwU_@P7XIxqw_s<eV~J8f0?# IkV8SZ+t0+OR$>fB=gX^_x[' );
define( 'SECURE_AUTH_SALT', 'QkYj`T*4r:UExp_H9^W%sE7ZkK!45YZB)0k)**}dT`~_G0 J.r^tI>s`uNhU1aJI' );
define( 'LOGGED_IN_SALT',   'VvpE30H.Xq):P3^3b:9#%Y^LBH~aM,K$!!io]V*<2X(U^06IGW726,;_:^aS&arS' );
define( 'NONCE_SALT',       '4RbeIat|!xI}6er)#pdm%RU1Pu&Z^oe)S1?Q_gl_=KSO%]{QZjRFJc#jsxOX6Y0C' );

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
