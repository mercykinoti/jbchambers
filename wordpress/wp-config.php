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
define('DB_NAME', 'jbchambers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ig,U{#es/^[AxU96{M-bmB}?Nct$CG@X|.pvE4v+frA5sD3aC_yE,cwpBG5,#;:`');
define('SECURE_AUTH_KEY',  'W%lE]p*&%%&0O<:;U{<Fn!+lI2}jEX/#P,H1M[O-]NCHA!yb%fO4q0+I2lZ$u:5E');
define('LOGGED_IN_KEY',    'L|L`v7<$412oem~12F6[+U+(-B)3v0p?4N_B]_(~J|!7hG-$VrEX4Yz~__?,ar9C');
define('NONCE_KEY',        '=;~h+qJ&6WRlzgnu>.b:To*LfIzacDyD)A q@qJ{n-`uGzl-+Oo&,L0HaK,93e_Y');
define('AUTH_SALT',        'gnbX(.j~bFf>53_2R6Tc0c7!a7CZ+[2{i}-w{fQK[;3FUR9<>3ZnKpZ #>`$qQ=L');
define('SECURE_AUTH_SALT', 'Hxx*AJj3NB7mq~LDQ>d[8Vp=/QMX$GCeJNI+pOXUUH2x~ofh|qElH;$:`IzV``(o');
define('LOGGED_IN_SALT',   'h_@`!/<Wi^cW@E%a(ZKWC9/6lF`4b3poxdvh3@G%mKd(J)&F$3_(#H:Cy[n#<#m^');
define('NONCE_SALT',       'Uu?v[$w2+KzB;yOdEQ*i*SHxeo(2 7MUS>e+{SPkst]NhD9^%4*ST^]|nJ5~R(rH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
