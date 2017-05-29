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
define('DB_NAME', 'JmatDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Simbit09&');

/** MySQL hostname */
define('DB_HOST', '45.55.93.186');

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
define('AUTH_KEY',         'ZI_~5&W T@B&U3Jyz]>nQFtv,uK7&V$v!- 4_@:w|2MBORi{m0/ggFEwhE7k JZO');
define('SECURE_AUTH_KEY',  'vQ?`w_j_S>JJt/j7.S)FxLy!UTw#NjR;$qi`S2eSsQ2Nvpt0o1pi2Y^m~bp2dQEB');
define('LOGGED_IN_KEY',    'DWb5R-C`(hp9VwlVL$nc:%B-OK7B1W+JM^3_Wm<bu{|Qj#w#l@JZ1JDQG2W;M`zr');
define('NONCE_KEY',        '50L,ec:z8H|j@Wfxz:|~2p 75t+ZUfqB,ZqGw 1LSLXW<TfyQfRlC$g_b+!xoU^%');
define('AUTH_SALT',        'lgacVp,GKifc(q],e}x{WRc>9nFsbi+.F>U`Qa?cyBG1e/VmOG<[)|np7WNCX&E+');
define('SECURE_AUTH_SALT', '=8ij{GJsijw9OIzf2r/`=+9&*225_B;LNbRI6_-CuykFJ%apj_O6]QZv@yj G_5^');
define('LOGGED_IN_SALT',   'TRL2]T4@2+#q|PF3O{rxPX;th|Uoj0Q:G(by7b[co{!O4fu*2M1.XaiJK1-tQxZa');
define('NONCE_SALT',       '8Q(SW*duH(XCFt R^G?h+w]}KVAQK.F[.N&mV Vm;C$*sy^B7<_,i>K^HMHXIv`E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cm_';

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
