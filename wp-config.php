<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'quantumtech_db' );

/** Database username */
define( 'DB_USER', 'quantumtech_root' );

/** Database password */
define( 'DB_PASSWORD', 'Quantum2024#' );

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
define( 'AUTH_KEY',         'ndtbqzgzp3uqbru0ui9onfowyjzm5i3cv3ecj7n2mnthrz5wyaviohrgxkzgszhr' );
define( 'SECURE_AUTH_KEY',  'ihdiyqjhn9qncdrmtmqbm6yp0drtstnmkrwk00ryriu7kkyeyzyo2hulbw5iinbq' );
define( 'LOGGED_IN_KEY',    'v1j3pskrvj8irqhbm9mu0sklefuncvibzyhp9x6zjlrdemqs5wqgeknryqklzb8g' );
define( 'NONCE_KEY',        'zcx8ch6jjwsaatd12g4cp89wfwehdhrdlqxtg42p9z1cjvzmnpqakdgql9jamfg6' );
define( 'AUTH_SALT',        'lyliizv0ieoujguq9e4od2d3wizxauszyyll43oifgowoyoq1b2x2qqusbcbwk3h' );
define( 'SECURE_AUTH_SALT', 'hybd2vzzmif7qshgxtvimhg4eyohmwef1rzpril4je7j1mdrh4qvl0trtbvkibkn' );
define( 'LOGGED_IN_SALT',   'qt7kb5bc1q1wsxgi2l1qruhegq7prbisaxq3sqcvgxeh83r0tt1qcmbdcnzw11oo' );
define( 'NONCE_SALT',       'u9yyhl8kdvqedpdr5bldkqbdjoptwpgsahzqshnylnmoy3bqu7aetyn5mroubgu4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn9_';

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
