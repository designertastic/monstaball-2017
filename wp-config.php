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
define('DB_NAME', 'monstaball_2017');

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
define('AUTH_KEY',         '=k)a-Pc14XxIeBSfQzotVH+HXo+v)X]je?@wl Z$2$2t!,^?mmce,{Xv y-]2vIX');
define('SECURE_AUTH_KEY',  'ew&s)|b=mU(8fyIz&EQ/t )dCxzuI.CGu/5Hf4~b(|Hy(9x!NHwI1!yW2s7usl%Z');
define('LOGGED_IN_KEY',    'g_y_ fQ9K&d+]fVOGiwmd-8?pZB%A&^@5AQYB2wc2s/=su6EXH^r?k#niacDpb0U');
define('NONCE_KEY',        '}koK>/)&`z4E@nyH}+A@Rh*Ft7@E|y/+VGl|qE%d|/eO|!k}Us|)Z.HPbndarG2u');
define('AUTH_SALT',        '_N-UOc97VC0aJ%LCb(&KDqF;-ENg(--^`fj:uF/={{:x,5xPV=H~f~(hqg~J+vJ{');
define('SECURE_AUTH_SALT', '2!I[Bc!3z)7|-y=gl--g)1oz%y]AwX<v5}Gll,,I-td->v7E.B;2Wa@2yPYU Ly_');
define('LOGGED_IN_SALT',   '+tt4@P28; ^KEivEC:UdN%fl4`Xh)AyKUsN9+NxYsg3TRNAS#JBQRF$zJhY{rlPI');
define('NONCE_SALT',       '*T|TdKMlL/V =W2rOkcXY7L{>cZ[3yqxm,;,w^:A.I<ch1n5~|%7WrtkwE8T>^G,');

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
