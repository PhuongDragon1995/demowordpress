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
define('DB_NAME', 'demowordpress');

/** MySQL database username */
define('DB_USER', 'demowordpress');

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
define('AUTH_KEY',         'GE rZLV yiX||@==]<GC:ILWT,W|FVF!.Mg*Ssw0zgVoKg?5z]PUu??H*S$%M+jV');
define('SECURE_AUTH_KEY',  'bI*!} uWK(X7-H6}^~!%wo=@`.#X<>(<xC16~ 9)4k<?GqH/jJtx$CKN%>11$diF');
define('LOGGED_IN_KEY',    '9nzYS-E!>b`*3;_|Tr{WEr5^r]lczG3yMta^R6[RiXu)UWAd;.6r(u_jy1hb,C`(');
define('NONCE_KEY',        's08{(tT4nFh%P{#!B,w.NfKT1j)e:+YA{cN/$8eNG;5)B+` VzJ*Bb.}uo-t`<7B');
define('AUTH_SALT',        '/qv#AXZ:/klrl!C;MF)TF0*j7z,Mdwfr%e7e,68wZ#9:d|BxbB{,/mS.@!#D4F8>');
define('SECURE_AUTH_SALT', '0@@[c& P:Hc&&R~04 Zpbtv>)9/-UO3T?{G:M9[^6Lw1Izi(=|z+O*@OQO)RVZia');
define('LOGGED_IN_SALT',   '/i:GvDBQ0Qr0pF S q|F7O;O!,i}st4X,a8y4UUo=5P&Ay^[k*xm(c{X6wEL^eNh');
define('NONCE_SALT',       'J|,GUfu FjhvYa8nC~%eTjLzu;Y^m@qSqN=g@T1%W9kefUiVCkkU:Ci731T76Ynm');

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
