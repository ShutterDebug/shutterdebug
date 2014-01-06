<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shutterd_blog');

/** MySQL database username */
define('DB_USER', 'shutterd_anthony');

/** MySQL database password */
define('DB_PASSWORD', 'pikachu');

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
define('AUTH_KEY',         '7D{x!`+<`uRrZyIA2DJYBsAW.+zL~R+jvsDyU30t_qdE|#LV8J[#~-7TB0O9M%5<');
define('SECURE_AUTH_KEY',  'LZ8SfgF9X.eQ (H]eRw`]1i-2?eQ-_8)y+q`b1L]+417+,4]>6C~[tL4|^-?WaLD');
define('LOGGED_IN_KEY',    '~%J|84}B_O^|=fn6++!yo8cdSQ;dg?^Z T(BK EnsfZ@4kfS1LCN ]S:&*h6YN[[');
define('NONCE_KEY',        'txgl{||*{WS>e|3@hKF|`yzlA*-9{D6tp+{|_3WEg*HwPZ3+e*w|{>84H9P^!dtB');
define('AUTH_SALT',        'AiK<k1Q5M/pYwuT]&+rF|x-ZHI*,pFk*3b:Ol+k@+e +:j4 3cV#@I.;t-lj+  L');
define('SECURE_AUTH_SALT', ',]9bwLH_$tjId~W@5ZI3}o;]|<V}{s:_=r(o8,Dp4X>KhWA[SV&^e-M~n&sk<m2A');
define('LOGGED_IN_SALT',   '&v:1+b-T3+`InU9nGT+FCBD =<UToyoU|2I:aQ@4zL*oMAU3^c.+H,vf B$wL0M%');
define('NONCE_SALT',       '<R[9)W-i>]yxj>``XIG}?W|UV-cL@7~JIxFw[<abri=Ht$wHLou3ThvBvV/+=eqg');

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
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>