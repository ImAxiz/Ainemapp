<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define( 'ITSEC_ENCRYPTION_KEY', 'MkpAMC0vMyFaMVh7RnlEaURIbVMyLSZ7eEZdMy4vfXVpP2ssLTdofSxSOC9RYU1GRE9gKG5tLSUheiVrKGNyWQ==' );

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
define( 'DB_NAME', 'd132392sd583377' );

/** Database username */
define( 'DB_USER', 'd132392sa530930' );

/** Database password */
define( 'DB_PASSWORD', '79p8qBbRuTU5EH529' );

/** Database hostname */
define( 'DB_HOST', 'd132392.mysql.zonevs.eu' );

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
define('AUTH_KEY',         'oltYU2Dft2hGXBmg6PEjc4Wsr99jxNSuRYHhnvRABeK2yrsH9l8hZeG3k5Mmtg3X');
define('SECURE_AUTH_KEY',  'kf7EbwUhghdFJn4TKVTwHPONX72olWYEUHm3IMMNhwKAGzHtQEIzXgzdkxd2qQhv');
define('LOGGED_IN_KEY',    'jQZtVZqzfp2xyQnDE5FFKpp6K9Xzu9Hf6PU21GbtI1o1QKrP02wtKKjM72FhQSE3');
define('NONCE_KEY',        'F0nV7qWBhdulCJPXc76njEuAgOiBMHPWE5wOCzICJ2zBr5pdzD9cIaC07qLBchXC');
define('AUTH_SALT',        '784jxZD4EHsLaJHk8z95SyRiCKDNfQvOIYyu4NQxv0JizYMLgKekHNgwDloX3AJC');
define('SECURE_AUTH_SALT', 'PFJMfnM34gb1G4CVXTjyRA44JC12wwPQhgzSz2CuVK7G8D2D3zMx1kcbDa4DlfQO');
define('LOGGED_IN_SALT',   '3cxXb2UK8LQbVgAgdnUFsdlY3tjnwAeAKdTxsHWOXDeCyVNlaIgGReaFEfFnFXMu');
define('NONCE_SALT',       'mLFmeiN8ratKyHuDHQQOFQZVEbnFhFSGccJ5Ns1QInc4DRU95qIbZ6qQS2bKJubZ');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
$table_prefix = 'z6gd_';

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

/* Multisite */
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'markovassiljev23.thkit.ee' );
define( 'PATH_CURRENT_SITE', '/lokomotiiv/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
