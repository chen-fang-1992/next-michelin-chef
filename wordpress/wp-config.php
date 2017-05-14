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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '{:TS`E9dR*a`0E=]bn.~/&5s+4O*X&^a P(UG56I7OBt`j]>)~>=M6IKxW#dToE}');
define('SECURE_AUTH_KEY',  '1m)L|M4zp5VmG#EzR0L/*:TU116Tu2_/mn%k`J3LU59oogZ~JgF19QWq+FaIq )%');
define('LOGGED_IN_KEY',    'PFFqj-aA1.{0pl8tr:k?>RNv@?-f!8QUt}Fxf,[n? 3=<[B+(ZT(/Aubk9knj2Sm');
define('NONCE_KEY',        'p{3GEciSROVUeGnX+iX9tVdE(n,]?P};pV5/<c4i&(t).ifu a~jj=)yXJ~Ej.:e');
define('AUTH_SALT',        'M4B^h*x@J}?9Kk ;l0mQDu?qHJ:l[-PZ_;[9>1H-T~~+#~~aXyM{qid6#Oq)i_r<');
define('SECURE_AUTH_SALT', '?UD*5[bK=`c:3<iF.phH:ptUDj*~(GZBdam2,r#FAAvShZu?,}3QS#$VGnA+Yn<c');
define('LOGGED_IN_SALT',   'SFswa8UPA7m^#/4&p+5cuwd^)]EY>_]KI/r@&3}!w0P%>}+7xJ?n}cj_Hk:B6zbE');
define('NONCE_SALT',       '0Np_h9.?Ut{!5},o3 4TAWZO#mSJ 6<P<@A7a-(tJ( K3;V3i38#C~p!3mSgP,[k');

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
