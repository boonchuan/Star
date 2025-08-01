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
define( 'DB_NAME', 'starfa991338_wp393' );

/** Database username */
define( 'DB_USER', 'starfa991338_wp393' );

/** Database password */
define( 'DB_PASSWORD', 'Sb[g24o.g1M[!p]R' );

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
define( 'AUTH_KEY',         'aylaxltbaaeknmzxvqoaj7nd9lkgguc0amsitx5peximkowcp7z1s8cpqwnqysme' );
define( 'SECURE_AUTH_KEY',  '5nouovuj4ths6wc7kjuafe6onv5lrpj8mp00wtic5rcwv4vlj7dk15zudbykkney' );
define( 'LOGGED_IN_KEY',    'arjcdcvcyvfqomt1sdp2nhcbvrhihjy0yortpsbqwl0cd3t1l5u57mbtf50royxn' );
define( 'NONCE_KEY',        '9s6iirj8irrafzozueu6wal78aqo6zmvahoelbj4z4hclcfbdwdhi1xnb6t6eiz4' );
define( 'AUTH_SALT',        'oa3ggr83usqvyhz7eodqfoymttxff0epelqsr6pbwt0idapakhou63akaunhyqtn' );
define( 'SECURE_AUTH_SALT', 'osl3up6c0zku3deq88sztjyf3o8daglqirofdcxv2fnmoclhmkafrypatmspjgtm' );
define( 'LOGGED_IN_SALT',   'gmgcmai0dpvpiox5tfwme9tlzrgrefv86uxennwsrkwlky9hl3uqt5iuxkvfjhcu' );
define( 'NONCE_SALT',       '498ueqef4ajcgi06wtpfvkvbye3uxuj4ygbvuvccpvwa2wikljenfyhmftnwsuqb' );

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
$table_prefix = 'wp4y_';

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
