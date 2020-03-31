<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uQHaRHGVJHM0zSrGmVwsOgL5WjvjB0pgyYYL8EYOYpGRzKaR4w8u8nC6NxqML4LLopF+Ma45UgA6UmAFq8z5lg==');
define('SECURE_AUTH_KEY',  'DDPDQrv1OKW3Bz9zZef6Z87lEtU1kR5wA9WXzYPP9MhhlfB/Y6qurJ/JxSQK7DNYgVJgc4AzWhasMOXwaFLKDA==');
define('LOGGED_IN_KEY',    'BzVtmsra6ox9lhuITQazKHEVbiR1ts4y/QtFchtHOLybfdlH7BFCiTCDwcFiM4akINlCSOkOxk/+OxSIgLKKqA==');
define('NONCE_KEY',        'j9LjAD6f71v/Fse4bFqUXSnMr2Q6YQRJpXFGqCjqhjDgQgcH2psKAzlB1ZWVhITfvSdh8QsKaZ50HYqjwpObVw==');
define('AUTH_SALT',        'QiU1VusfnatuRC0/11rD/m0Ti1WxIxScnjTiv39QByAE2XFlrk8ldzgwUYqJAudx+GnHEA8O3N9UutzDgkwvyA==');
define('SECURE_AUTH_SALT', 'eQjgxi407RmkZRJeTqvQ4CdbCHTFijvUv0XTLdonXVKQFluObw0XH4BAYJboMNpi7mWvzcVF8VSq5GbqBui3Rw==');
define('LOGGED_IN_SALT',   'zHLlIxFizilKSKzxpeTgE+XHSrKbooXLhQHuXcQoCMHeA2OlqhAzn2Cph3Gm8uLl2JNnMgSMxu9GRAILsRXvtg==');
define('NONCE_SALT',       'K+mSpjMpec1hwCgVoC/YoyH7iu5WrVDDZtGjugLpz+FkNiP6um3prz8Ka31zEzffEGtIsJLTXVhd/y90EYm82g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
