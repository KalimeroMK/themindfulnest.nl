<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "themindfulnest" );
/** MySQL database username */
define( 'DB_USER', "themindfulnest" );
/** MySQL database password */
define( 'DB_PASSWORD', "owe04gus@.!" );
/** MySQL hostname */
define( 'DB_HOST', "localhost" );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb3' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b3zqjlihx7bdqY4WpF1RpIAulhfN6DgS43MiOMH2BZr8l8QF3YkmHcrl6NIjwLqZ');
define('SECURE_AUTH_KEY',  'Y0a6xk9P0nzB5eEIdEYhMBA5QmXdOt66tLMGIQ0jf4MOYh7ATSueOHSGO3lQ7eyJ');
define('LOGGED_IN_KEY',    '6TB8yXBr5AftGFp98nrnDtiaM7SIbwiO68L99Eh3Mo9Y8kDFB0Ug6lMAOBdjTlQ2');
define('NONCE_KEY',        'Y3q2lh6TSdUfJmemfzQ20Urt31Bb53SFiAd6zDCYdXgyYonXvBY64S84dn627vRe');
define('AUTH_SALT',        'lo4ufzk4fPaCWitbR2LCnPcSe1V1AmxN3abOzySamkfC2SctGZ2kpWR9IvriS7Zx');
define('SECURE_AUTH_SALT', 'dd2ppT1qJFfaARQX7ZhxVyShHhxfTNoFYjQzn2dTaAdyM9hyuKEUJKFfuV4GY90h');
define('LOGGED_IN_SALT',   'bVQ3w0HdJqwZNzhj9aagsFYKp2VkoFkWBxFvM0a3wVDqVhZb58V9Uwn67UtXbJp9');
define('NONCE_SALT',       'eLR1zIXKCrQWnjPxYlqXbiqDMBtqFV2DqPOvHxB1goESrCpYNj5DIPoaMGaRfR7J');
/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define( 'WP_TEMP_DIR', '/www/wwwroot/themindfulnest.nl/wp-content/uploads' );
/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
/**#@-*/
/**
 * WordPress Database Table prefix.
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
define( 'WP_SITEURL', 'http://themindfulnest.nl/' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';