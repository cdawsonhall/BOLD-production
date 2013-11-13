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
define('DB_NAME', 'bold_wordpress');

/** MySQL database username */
define('DB_USER', 'bold_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'pa55word');

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
define('AUTH_KEY',         'pd0:.NP|AB&x>4|vS]>U:78A+yv*Mn0B6&%.fok:*1A43W,oQ@z+~K1T I~uw-O7');
define('SECURE_AUTH_KEY',  'pFCkoUaUR|dww,n]gNS8:=59OsIN5<c4hYSEnq/)+#&s,p~HMF.TEK!:$ w>I(9<');
define('LOGGED_IN_KEY',    '!;:G--eWJ]#+wsIBJgrXZLb^u~P!+wn9=j6,q1djU_41wt7Py10MgjtI!5&qQi y');
define('NONCE_KEY',        '+$*sdF3FC$:|57_ea TjY+&f/`BhQ@.0MoO-Tr`[=S3 Ot-ycWVRPhQWHGiYe!dL');
define('AUTH_SALT',        'xQiK2:#YK($KV,@9O/yC<A+cvB,JC_[)7N_t`S13P`$H0IG`$VjpdS/q;Jf#,b%M');
define('SECURE_AUTH_SALT', ';`Sb${ya]Yd}w=Dn8WS!1h$JC!XDW<oF!W`=tD4=mYx$)Nl(!d_=x;CXO2S^|R=U');
define('LOGGED_IN_SALT',   '[l`lR#eskqZm|7*ZtpDWO^EP6!/Y67YD13{%$lLO7)* 5|+hlbI[+(3odJ=lT[Mb');
define('NONCE_SALT',       ']46}(L=SPaqF8-Zq@Jk0wU[D2Wm]J2`)_fJ$5P#?6p8wqZKDBg:1dKu||2L~0qUx');

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
