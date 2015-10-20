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
define('DB_USER', 'james');

/** MySQL database password */
define('DB_PASSWORD', 'whazup1234');

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
define('AUTH_KEY',         'H]Sf[,_T-3n+GGRfCv`lssa+Pt<im!&zi,~99^nH~UC 9L1M&%FgD9D?egGnPE;L');
define('SECURE_AUTH_KEY',  'JJIa$oM<QML:_&1myPXgk9Ir$(|K?t8)~L-%SKhvisIRe7.@[AI7dPCTw<y^Gt(%');
define('LOGGED_IN_KEY',    '}oPrk/n^u}6|A6t;BS){&7eSlf|XK =28w?t7h1bh_aoDi1Z] G e&UxNS18f}[T');
define('NONCE_KEY',        '}B<:iZB8!Z{{w.5xgh~/b{^A.g8c4 w_@kB:S@:e)E~TqTuqf|%tuR-i8NAMWKPN');
define('AUTH_SALT',        '/<.]E{`:!>J+BYZh_Pqu:hryGNN?|iKpgiFeJpkAolInp[dW+7;dkL;+I2/8FN34');
define('SECURE_AUTH_SALT', 'NRm%0NAA,ml*k02Mw.J7nFr6Qph|9?@k_9==f7|VLPjS9X+`fmQI?T+Wrda^^Ght');
define('LOGGED_IN_SALT',   '}X}AfQig1h1bTB-r-NO]REJ%pUZnzTcL<@||]@+C+Au^6*-|SEvg0YxR</5`I-eC');
define('NONCE_SALT',       '#AP)1/r(BPeE[De4.|,)/3`(mdx [f]1EdggUXOlQLKM{?7!iRg_j)b=:r#c/^fR');

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
