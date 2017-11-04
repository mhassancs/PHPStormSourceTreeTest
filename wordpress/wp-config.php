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
define('DB_NAME', 'sensorproducts');

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
define('AUTH_KEY',         'KusjSXRZ5v9]tLwRowUt/v#l|8k%Toaj,TVG#g%0K.<.(hj~C#Cx#MY;#D3LVVgQ');
define('SECURE_AUTH_KEY',  '=&b[dq3vLT#q[ Pk^I&K9hei+2UF%!D}2o4A8 06,j|#J_?0]|gu7Sywea!XWm:$');
define('LOGGED_IN_KEY',    '1>L[>B<0T8J#3|!#hDfX*0:$%}UK4}BNL:H=ik-[T_0z~oS:b{n]ytY)~1B)}$B&');
define('NONCE_KEY',        't&L.fv@XvS_.Ppo{nplv3sNSn{ACje%+A`h.TZwmor8]g`C(%=+i5$,DfM)pk(}L');
define('AUTH_SALT',        'u$M>m$uJu%A[!>d3&)) Z=G1_kI]^&<ksKW+Aqwu)BcC-`@b=]4:x#?_}J%_%c6r');
define('SECURE_AUTH_SALT', 'WHQyGCr0S./-b/se`Eb:.sC IP5MFQnDMIjo@{T;c#m@bBDM`K[B73m6.Gi{LU5C');
define('LOGGED_IN_SALT',   'm~$E~t$!Cv*!mv3jM`03+zmVLoavg=vDF(w3dt7,ow,RAp&IIUY9v5ke2.(:{k0,');
define('NONCE_SALT',       '*_^6_q%HM`Bhhs,u*~RlWtxhQTH[M0Nxh_0-uq,```7{=mwhC:<?!-6^S,TC[^[J');

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
