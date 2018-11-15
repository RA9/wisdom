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

// Sendgrid settings - Read in the sendgrid auth from the config //
define('SENDGRID_USERNAME', $_ENV["SENDGRID_USERNAME"]);
define('SENDGRID_PASSWORD', $_ENV["SENDGRID_PASSWORD"]); 
  
// S3 Config Info - read the S3 Access Keys from the config //
define( 'AWS_ACCESS_KEY_ID', $_ENV["AWS_ACCESS_KEY_ID"]);
define( 'AWS_SECRET_ACCESS_KEY', $_ENV["AWS_SECRET_ACCESS_KEY"]); 
 
// ** ClearDB settings - from Heroku Environment ** //
$db = parse_url($_ENV["CLEARDB_DATABASE_URL"]); 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         $_ENV["=<Z}xLe`,&KUTvnP%ur4]TjKrwU}4C2nd_|9;{Xy%b<#]fy%BeKrUO)XMe/*GZ&s"]);
define('SECURE_AUTH_KEY',  $_ENV["FPiC%1jd=yu5wJ`S)Z^JLesqci(v)1Oye->0w4/o1#b}t+`*FlY<raI3O$O5s{Xj"]);
define('LOGGED_IN_KEY',    $_ENV["sTN%TgPGlS_,Z|iG`aE!0Td8<PTU$y,?[!L{XDtU8cyg6GW/S|*?eHOf5)7#fb69"]);
define('NONCE_KEY',        $_ENV["-c<2Vs=-reiRrYn.%4?q9/;ZD]uEMYET|@Do8Tg)XobUaqK?z6&b2-DNHJH#.8O:"]);
define('AUTH_SALT',        $_ENV[":%&!Q|x/QU*wwG=|(:ad:P531/G3zqVOzM#H>`TFGe%n?@CLUCd+$%7z[];VF/=J"]);
define('SECURE_AUTH_SALT', $_ENV["{@6*qpXsMOa+}Z?Ns+m%^`2)@KmQ<$b9zq},opm&^6&{&m4yzu(v-0zD,f7lqHr}"]);
define('LOGGED_IN_SALT',   $_ENV["R+(?_jw=l*in|[Io{B;wwVeCB27o*bDNbq*w@KkYbTMWQFzE=BOB#<8K=dN:>h/x"]);
define('NONCE_SALT',       $_ENV["$n+[ay?5C)FtyD@|4gxq||tx,l,q)}/BRS4JJ_]Cqb1-^j@`{?D!*-ooH89ag@sz"]);
		

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');