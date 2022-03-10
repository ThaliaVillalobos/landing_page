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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'Dc4/8abGlqDInUxLtVJC3UXmO/cemQmmQVcfE2POm6kahuXFwhceEuSfJFzwuzWWM+rDpuwJsc4nPKEvkzX62g==');
define('SECURE_AUTH_KEY',  'k54zu1fURybHvufVAuABH88I8hj4+kbbkf28+XVOgWc9fuNyMvQ/8BVmaxkB97MTmzTX0xQjwzffUZ8I15ysBQ==');
define('LOGGED_IN_KEY',    'mWLXgzuTF3+q9553IBFYtc0v2gZOU1uuU06VMOigybbv4AjzpwDXliODN1JN0j66saz3nKemZRyuzLE744mSBA==');
define('NONCE_KEY',        'h5PWuf4Ixcqh6A02qYPQnFzHe6b7m9qB2EQ69Hqgpoe0keYp+3tWsC+eMy4+8vSa8LSPZtoe27AIKspEvjgYAQ==');
define('AUTH_SALT',        'uXsBmVcYh5xxIpkjB2C6rFvO6lPaMLJZxY+eGNmmuu/W4kR4g2Wuq2ylyChKzlMXsZmP1TaktWpxMhf+4/7log==');
define('SECURE_AUTH_SALT', 'gWFveCiZcZk9OoLaqbd6FJ4QLWqcivqTw8Q2yY6Bs0cfO6jiqAtKebfufEdqOn7plSIutXHrt4+PotIlpS+p3A==');
define('LOGGED_IN_SALT',   '7NIckT1WKdfZa44WROcji6araMLRRvGtn1GmNyNDwDiUezxS+pRcr06U2c07JPz0dXotO0bh1fXgSdYKRRKvhg==');
define('NONCE_SALT',       'fypPa1drAPf2Kx0n1LMopszJFMeFHAXMIgxP/nfJOGKLkDnEV3YcEU311o3LIvo70im5Ej+otfMAhlrzLu0RSQ==');

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
