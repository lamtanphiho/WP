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
define('DB_NAME', 'kan-tek-info');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c(8`jfp.7<!$G2so?*0$%w:DktI_#z}FF)v~:xe7|m*Nu7@N>hy|1Q{PF+o/?6u*');
define('SECURE_AUTH_KEY',  '5P6rn?CV_yFp6~z=/Q.D0J%}u59(of6R2v74S(;*ea!E3dLsNX0Pp>a,VE[ks*_%');
define('LOGGED_IN_KEY',    '+vZ#8[t>(mY1?Y4<medMClby<1%@Jr_/5%5P71Hw6<X^(nf!RRjFH(L2 d5*>J%H');
define('NONCE_KEY',        '0q24uV:&8[9vCBhBc`>3~f$,Dn%ABS|_@MtD`!26F0Fo~rYn*~DlIYNni:etOq}{');
define('AUTH_SALT',        ':e05{3h/)r32)hqFd.M!?@&0ebu<0F!O!^&#!oMM>UPyj7A+cvfzMD3bJTO0~W[/');
define('SECURE_AUTH_SALT', '@Z/4yPT<H=,Nse#VGQ~r~[I1cx$U&t7jA4T{f9;2+Y=raud`j&&PFVI)i=_[{h%V');
define('LOGGED_IN_SALT',   '..`q!>{c}cmX.%O.BEJj|>P(wQ,=2m/#,LAgpXk|:vY]VZ4$*v.:dZ4hW2|}O;%9');
define('NONCE_SALT',       'PBwt&!*EJQ*!H5eE(biW1+C2f 7sfUYX@wSFB?=7 Z1+AjK|8.sB</=cwvg!Y|Hm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'k_';

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
