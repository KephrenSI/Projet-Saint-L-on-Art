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
define('DB_NAME', 'kephrenssl95');

/** MySQL database username */
define('DB_USER', 'kephrenssl95');

/** MySQL database password */
define('DB_PASSWORD', 'wMPFIEQ4');

/** MySQL hostname */
define('DB_HOST', 'kephrenssl95.mysql.db');

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
define('AUTH_KEY',         '!/WXigf..c6k5~cT9;%+4I+~w%EB!FJa>a=mg*Gj3u{?x9-^/jG2str$l>xY5X5)');
define('SECURE_AUTH_KEY',  'Er6C@_XT)iSrF$vBavkxa^o5+_^+%8|Yve>h(kBMzb5_3:]p[n*$X/mTLabs3-+3');
define('LOGGED_IN_KEY',    '$q{m7FCa2Y7O}G;wz*dQG52S>?f+h@,Cab-kW@T[yK}q#cd{g8n&!7d@?MAaz`B3');
define('NONCE_KEY',        'd=<@u(0hg4|?#5r-V1-$DR-/-aR.Y1mSDS=3U&W7s!mNbu{l9$ENOW0FY~~zG9ul');
define('AUTH_SALT',        '9nL{91QG72l+{&oAU2HbMY)fx~`ZYarS=8Y})h6a|%oE)q^61v#pROuFa,M67yrK');
define('SECURE_AUTH_SALT', '=+>:t%S20V;pux^t*3J*-=cxyc)o@gdG`vDv|k|*b_wY11)[6!a9Iv(0Ad]( +E?');
define('LOGGED_IN_SALT',   '}&Q2%s3|*$dGBk@D^y,$M7J_(psolW;;]RsvZT+Jw``-$El3ZD-Uh#)4dN/XB9#[');
define('NONCE_SALT',       'BkaF0ge-ZS6dU.a_ mYhGWF0x,oN[&d4QXg1LnN<{>EH|rt+bN)xfOD=h|-U2-m)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sla_';

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
