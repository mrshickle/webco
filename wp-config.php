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
define('DB_NAME', 'webco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Kp6o*0co%F');

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
define('AUTH_KEY',         'D_gvOLAd-o$C|v@X:`eq,5[IaY`)pod+>QWg.k+F][nm8+#)cg]:|Ig_(}Zt7t?N');
define('SECURE_AUTH_KEY',  'GLKRACV~7pI!@e}sp-:5nJe]EBg,]2jB/eA1J0V~nM:U^=zbnexeT.bsT|5qi>Ic');
define('LOGGED_IN_KEY',    'h,4)4tQ/+Eh5H%`-nKH:86>|mDkl,uE>Z73MjTGHCF)>ny#u+0di_O3[|j2p}FV3');
define('NONCE_KEY',        'UYR:W3-n/zRIYimqcl4i+n_!)U;RK:Rs lL$[c1T*j/M9q-sC#j9o-5Xb1`&P6Ve');
define('AUTH_SALT',        'Ol2i<)6((B[^/+PKxi_yDjloRJ%lgLESEfS#XSlJ&=[bEJATK._Uo#Fzjw&<Iqmi');
define('SECURE_AUTH_SALT', '4dwc3Sl*_wY}er~$m1`eX&57+:fwELnu8r%bT_~&<40X=:An e]bg5W3.D}G.W1F');
define('LOGGED_IN_SALT',   'cnfIPc2~}|pJFhw:M}|v?542$2NqM#F2+^>P-9BBSb.GU  D[`x-qZu0|_D_~gw?');
define('NONCE_SALT',       '8w~|8?vG1f-NEjM$-S$?ew_`c*/W$QH3 ;-JhNI(6/AA|245MLI+e|?ioB}WN)a=');

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
