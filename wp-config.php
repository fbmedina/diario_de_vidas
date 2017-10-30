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
define('DB_NAME', 'diario_vidas');

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
define('AUTH_KEY',         ')S`e}.>C=[!lGkyTk {V=W:?!ZX7ax&>rWo-P/mIU}zA29LklqHKPBcQ7CC~mD.%');
define('SECURE_AUTH_KEY',  'e8<S~@gbG??S6Vj~ P2CR/:[K)I8Yb$/GO5M{`JJ`}HInQEO1l}Yn/TR9v]=OX{5');
define('LOGGED_IN_KEY',    '%J!9NR`(C.^4WM(SrxsL:B[H}C8:eyy,}M_>BB*{*rt=MP?nXp)&^$~&]#6R}[?;');
define('NONCE_KEY',        '~ykn_IRnK!|mDX-`[h6e7PR>*w/bQEz>%}Yc@f=jt6Nz+n8Ec/~XD&?E8T$(s]`k');
define('AUTH_SALT',        '=}QK@b2LV9cP%F|q<z!~9W5t7hOqE;Ae,_ZwPDT>mX_B|fB#Y d}xTsP4$aaBjzR');
define('SECURE_AUTH_SALT', 'c6Dzfn1`u|t`qHSDMg^x,44XvoJlzu@4j6aTP/[+2AA_Q^uv00V,qx<t^o^TF,QJ');
define('LOGGED_IN_SALT',   '0o~:[~|Oa-daN!vOT]#ui!T^OXJVf>=Wt0n6@m| _I76BA5k-5dO%`$R@7)@ ~(C');
define('NONCE_SALT',       '#>X|#oA]k9B{VW[tL=%hBxZ$#]Rxi`o3AFRHgW(?2U~t%@eL0*iPm@h22rGBI*,G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dv_';

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

define("WP_DEBUG_DISPLAY", true);

define("WP_DEBUG_LOG", true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
