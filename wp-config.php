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
define( 'DB_NAME', '3.7jewelry' );

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
define( 'AUTH_KEY',         '<{?O.W[C0IbQ3S6Vq5?0g@QNK1RI?QY}[oqn%5dd8+JZf8.[=E;M<5]*&epa1bjn' );
define( 'SECURE_AUTH_KEY',  'aZxNSOsq<JWbn~V+*TOmOCd+U~nI*Prl!dd`Z1T$4fk9Lgs88XMw%BZ9wB7OR/:W' );
define( 'LOGGED_IN_KEY',    '|NMbfRuwP/ktncXalDLrxv3QGV!wi_Imo`P~Ay]8Wy!w>gz=1;i%^%$uXZiabA<*' );
define( 'NONCE_KEY',        'p:&zC6&Li RrW#+wU0J+Qt#N#1T|ytv_}Yflp}l<p[f(F]5ykfkal!s}O*wWqx7x' );
define( 'AUTH_SALT',        'yzSbikx40I1boS2G,-7EZ_,Z1wy1g]r/ph whoPwly?3yUXu>rY#sqYhoyx-^Z+.' );
define( 'SECURE_AUTH_SALT', 'f:pQ/h4>>8-95t*2K^2cqiDxA+fK]d.D2MJ[^&CYAT79%<%9S0*l0kIn] MclSpy' );
define( 'LOGGED_IN_SALT',   '[k=MmiQ>~o{@SU~_d%K0QEofsebzxawbpG89nk~:q=X9&()PU<267?;#|5(8FWWO' );
define( 'NONCE_SALT',       'f+@c?b&RM+_4=2dN]?V5O!?o1dya50QlQjl |Ad.=j V,jzre$iIl?wQ$ay;WSHq' );

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
