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
define('DB_NAME', '');
/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#OKa|dzbj]D8%S4fOV$)_?||mL/T+~G&{D8@&yIRhfKun~b2B}4!QVfnP)g?K+B@');
define('SECURE_AUTH_KEY',  'yq2GZA+_[sC>ozaZ`D]=g!<@5KA@o.CNh(Dbsz8BAw4v;#oT9|KH9$ie2Pbd(<Qi');
define('LOGGED_IN_KEY',    '|K?un1,cZ0xpVUE,#$/]2DPs7=ME3,bqp:^v8pwR>9>N+ `]*|uQw-T,IdvSpk?G');
define('NONCE_KEY',        '8GC_&rM+l5u!^o^tfE[{+#h.H*EdMDf[DWOAuSJ]]rb7G<a}>5KEH&]~iEZLm|!*');
define('AUTH_SALT',        ';8w~9aU&$;0WoBp-sNIo.^/G3PVJ32h:4~gv(%{5m?uR&uw/F5uRbKAcaQK47s3w');
define('SECURE_AUTH_SALT', '1wf{j#$--!G:X 9?]kavib4 f:dlI$2oL;)iy}-=KcqeQZt t81=Z(.LzKLPP;o.');
define('LOGGED_IN_SALT',   'f<@mNj`VD+}E(M]@gYY@`xO[E]92+h;oee-DVxgAX5BAgj-x~S6@7Awaew$]-r6!');
define('NONCE_SALT',       'p&>jBo?ND~=z~f+W7QirG;QpP~|%!^q$~MUuh|z;gozlM[E^jG=5E{k/{4?e vKD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
