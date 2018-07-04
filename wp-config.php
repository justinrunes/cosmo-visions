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

define( 'WP_SITEURL', 'http://localhost:8888' );
define( 'WP_HOME', 'http://localhost:8888' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'jrunes');

/** MySQL database password */
define('DB_PASSWORD', 'Solvenow1!');

/** MySQL hostname */
define('DB_HOST', '159.89.156.66');

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

define('AUTH_KEY',         '?m-YXObE7IIG8|-~B9iY9-Vn.Bnu5c;isiVeF15!Q1]@na*Q_vvUFk?x>!Z$k=WG');
define('SECURE_AUTH_KEY',  '^j/%XaJJsY5#r-eul~)aKURe%A2Yxb)bigrGVMBn/`&WN,5gE%|[/.33}!gtZqEt');
define('LOGGED_IN_KEY',    '?/^8He#Y?PJ.KI7?e/>AO_Tf4= :h!bUw8%?;~z*5w7DJCcqSbIl}-RUDH:l^n#2');
define('NONCE_KEY',        'J{+@c6{Ms-/5i$Jlg+2] d.)9&IV)y +e^|]R/%8J~yv]R-aNN{VpQ-l%B/&W##-');
define('AUTH_SALT',        '<,?|@zoWttZ5oJ$0N#y-0`<|l,1Nc0[^+L$2N%HrV.Fq7lIo4Hz9D&s<uD%1q$A_');
define('SECURE_AUTH_SALT', 'E;PP_,m-(;2o>}0fru9;Mg1PYw+gR2$EQKE&Bm%-`rH6+)lU8kh/Ij*RB3J.~la5');
define('LOGGED_IN_SALT',   'jQvx+3k~5vdk(m-}L^P{%NA~Ud1~6I-zkqM~=c,U9WKV=qP]{:V,~Fk,U !sy},g');
define('NONCE_SALT',       'JQ@x7(R~Qn?JDzAf1=E{:yS6^HMx3cKtB,<}#F*yF${Sf+(H+QV.JwKj}>si$4^Z');

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

define('FS_METHOD', 'direct');
