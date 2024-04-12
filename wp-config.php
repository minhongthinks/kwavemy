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
define( 'DB_NAME', 'lavishsi_wp715' );

/** Database username */
define( 'DB_USER', 'lavishsi_wp715' );

/** Database password */
define( 'DB_PASSWORD', 'F!M3zS65.p' );

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
define( 'AUTH_KEY',         'ocpctcvfn0jfvbzbx3xy6jcr9duaxivxc6lgryyjgmdl33avzb5lqxkx3osg0co0' );
define( 'SECURE_AUTH_KEY',  '0evbjmt7elivfb07kqjyfak5jgg6whu9u3lkloh9cxijbae6ihksrlxyleiblt26' );
define( 'LOGGED_IN_KEY',    'cfvcdujahybq9rj04lekgg6rcvovgwrkvrusu59fpr6r7xga8jnyt8ruw5xe4fn5' );
define( 'NONCE_KEY',        '2c0h8ady6axotwta3wfhhrlekfltnwfg2sldqszcctah7mgnbcfgqkshui94xstp' );
define( 'AUTH_SALT',        'qabvj35eqymdcnwbunyqbmyrsoun8jcu3oyekolgr6ou5vo4hxylykhu1jdiwdtf' );
define( 'SECURE_AUTH_SALT', 'lxvh8aitxhvw289hgcksd3qct3ngpvgp5rlyqijcjvbmcefqwfqig5afaotqsdbg' );
define( 'LOGGED_IN_SALT',   '3bi1ie62savuwx28fmft2eyoa4qlsqqguwm7bvevhwdvcadvfm9wrvmlg6ybn8aa' );
define( 'NONCE_SALT',       '3fvg8ehogr0tjwgqy7w4gfzcofypbryeu9eqzxbxypsuwe0gbapcmxs5gdhllvhr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbr_';

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
