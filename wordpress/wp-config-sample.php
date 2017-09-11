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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':,SE&4O8CbC`|:AC<kO2qm jb,+cBaVpLCpS<-zanG^ce-p{0vT>ZD4ekA+@?Y/e');
define('SECURE_AUTH_KEY',  'rc--(Gq,l,1ylTM3H>Ov8ik+KhH+WWgD7cY^KOymk<2|,EQ1_JM[_%|m+jd(As|4');
define('LOGGED_IN_KEY',    'J$d2M1{/-Tv`0,|B.CA$4KOac=l@M*Ej|4GVROMpkDO>mHn>Gy.,WETLTnm~<*,_');
define('NONCE_KEY',        '4U9E %H(4]VR/=EsOt|%`s<ZJyDM^$%t2mRk)1(nVw+?{C%CscLvC^)Azo.9Li%0');
define('AUTH_SALT',        '1X6` L=)/|gnvzX+iexY1ssWtM>:>)Ojr/-*m)lJyW2fAt>HT0LI-V-PO-2C;PxF');
define('SECURE_AUTH_SALT', '=>w0UIF!?TqYsTc3: gX&HT}RTcb3IPD7N*g6+dzrc+XVXm3qF):{jaLD +!N58=');
define('LOGGED_IN_SALT',   ';Mtv6!Me&Pa|xt.++l]mKQc=uhQwDV2V0})#+jG%Q;/l?i;E.3#HI-QR=t`8<-lK');
define('NONCE_SALT',       '$T,JGdhdA#+W+BTW+138uc.h+v.Ps56s0NC&@$]=Ddx#WMPU@t;]Xn|IQ>k0TnLV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jb2017_';

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
