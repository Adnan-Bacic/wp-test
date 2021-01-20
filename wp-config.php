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
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         '$JjxsD([<)umS?6m(YF,mu5+iZhEw3|6}4>`gI-S{Y`PW`Z)|E7FOSzT2j-9F/I3');
define('SECURE_AUTH_KEY',  '[J_MNVl-:cYDSO2zyL#uptO3.CP|/{4u`-cld]<;u MviJ;(A!s3 mtw:i<93)W$');
define('LOGGED_IN_KEY',    'zd|)Uh@wK{}BFj#gQfh$Q:YRjyv?,;[1mrQDTW@N)5[.aqln{PYo*vHvnuSe14{_');
define('NONCE_KEY',        'S%+_C!!LP7,?gaOAo|JMljQ(9lP_#xzD[sp>rJ7kj6Tafh7j`wr3w<Mi%f(8{!h#');
define('AUTH_SALT',        'dcgTnMLo:` 7(-=>KW+ujO$Tx%Y/K([P17@exV??KQ1#+4FJ28d[K>.Zb#p:7BDv');
define('SECURE_AUTH_SALT', '*pje#6n o8rTdv2I{lgg}clJ:M,W5~NyQ<W1,CM%pYq )kbV<y(U:svQ2*,H!?K;');
define('LOGGED_IN_SALT',   'w-BG)r!dGXVj{Y!;e[$K?mB0|OtwW{;(!!8{%#uY29c}z*(x-q~j9vF!$A@~RMX!');
define('NONCE_SALT',       'F{CO=ZMAWxWARpTElL%-.d,wxG/qY(Ho/1fB&{`WqaDxjsegSTu$zXBRSS3.di2R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpt_';

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
