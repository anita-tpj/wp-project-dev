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
define('DB_NAME', 'wp-project-dev');

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
define('AUTH_KEY',         '|ELqBgjOh+$JM9U}Hog[H`|v{{bG3qi2Pm&G%=2TM@B7HU9Vt7-/~Y&hb@$cib}y');
define('SECURE_AUTH_KEY',  'XHV_s9LgyJ.JY#NJrqMo.m,4_j3,vt<MBO}19#HB6K7/D/!~|c[V<Zomg[mCK|6[');
define('LOGGED_IN_KEY',    'dP5jvj?u281(</v97@PGK_zaiW.-1G$e7P,>(I 8,{I1$G#IQE:LCuId}ph?o 2F');
define('NONCE_KEY',        'c]u2_50Mni!AbsPJ~JIf1hBH+/} tNU_>)[#Jm94HW:kh+_EU.O@L6T:Eq$L^{M_');
define('AUTH_SALT',        'Wc6?X@A({2S$%=mke i`3^4*dO9~~~T(Do]4VIpGJP{7jR0,Sq/l%o*$+zX31|<w');
define('SECURE_AUTH_SALT', 'MdZ`n(FQ^tM*)qzn4Yl!W.I|r4tiXYdY3BaTSPv@|}%=*)NAkz~L]uRggb8`G}Q?');
define('LOGGED_IN_SALT',   'Mwk^*iL.&E~pk+WZA$ 2udF1^U:2~hs^-[M5!ClkO;{}]+dVS%@)>te(g/zhxT|q');
define('NONCE_SALT',       '^:X5 gdcZ *y1D=C%cldGTHZToX40UmxC)2m%5p60$Ef*`Hz8)yQ} ,Ws;.S[3:2');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
