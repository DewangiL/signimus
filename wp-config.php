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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'PSlI13wMB1C/kGxkQqKTdTvJExUbfcgvO3SHX3whtUUzxyJn+53kYhLpby/bcTCHs2NmZqM95gHC+qtUFYF1VQ==');
define('SECURE_AUTH_KEY',  '+2gdm4Kcuq+xZNczh+vz+n8Y2TTNZaO6MqyZC3DP6F7Q0I9jX+sg9EDjDUPMoEi17wqEbA0uWMxw0pYpoNtluQ==');
define('LOGGED_IN_KEY',    'bPaAYDP3m3lkg2TFc+kEugfXUN8QOC1+eY3W7M24xctBuyTFwj7xrm3e4kczyoC+H6kjeb06xarM+JHTvwAz2A==');
define('NONCE_KEY',        'vvnLyKUUt8ssulpDwKsF5qP1sKGad3TZeAd+rx0g3aT9wG7ek4E5rRjlyA+pbRAwGSNE6RlHwS0l/0pz0JKsCQ==');
define('AUTH_SALT',        '6pbOAQGNyg0bYmdwpk6n3r9zAWV2rqucoynzneE62h5o3Cjqajg0WBO4V75dNVjXz4B/pZkxSGd25s5BwOioPw==');
define('SECURE_AUTH_SALT', 'YWGEuPw3oJgGChhKYZGYnFaBJt5OMByDLHMxc7NFmE+iyuubQCGdNtDmqCgFXC5W2Unn0fngmg/hiVRZUuTSAg==');
define('LOGGED_IN_SALT',   'xfgMIoY0VcosMTN0Pw17Wri8iyxy52rqgw8F3WPiBLOoP8xD2O/DXiXCLz8C5ZYjbnmY1aZ+h4gfX8E0TKNbIw==');
define('NONCE_SALT',       'mPoQz25wSCUcinVVGlAwrgZnwTGtXMf1XPzrPsa+n1W5dK0Uv5E9rqONgBaLvRXr/Ru+bOv2qYk/ydQzaqyHfQ==');