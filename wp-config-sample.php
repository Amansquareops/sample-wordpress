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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DBNAME') );

/** MySQL database username */
define( 'DB_USER', 'DBUSER');

/** MySQL database password */
define( 'DB_PASSWORD', 'DBPASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'DBHOST' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S[Pg+dAt#806`vQ@RLH*w&-(e!uFg5e}}G7.cY5+B<RFVQ}|m7;:uLw[mhpIue,!' );
define( 'SECURE_AUTH_KEY',  'B(*D:-+YmR/ -A4.t&+Lbg+^BqBV20Tbd0:o.SO}cm&[l_]k:w%te:e*Bt,tR)>z' );
define( 'LOGGED_IN_KEY',    'Z4iSH<[J7u3 H`nUU?&<l,@ikRaMH(opT ^M.QU6reB__59B2^!H|M5aTT,@hj6N' );
define( 'NONCE_KEY',        ' &i}j.4jZK]|uHand.+J*>rfKPqB?w5W7L/LDS@^+%y2Zs#0JI8B,PD4=Yt-_:Lm' );
define( 'AUTH_SALT',        '<8Ct1^Q[!=Dr>>s|-lgSN@^r|Xp8rH_h{ 34-SsmCh& HM:~r:?,V|lx78<Xd]EM' );
define( 'SECURE_AUTH_SALT', 'pX7%yW7CSA.o`D4 X[u!0+q-WVJ]dI?blZ.F{o;9 Ap+XjGT.eD 2h)Rd -U HSz');
define( 'LOGGED_IN_SALT',   '|7M>%etO{_PAcXD&|5xus<0m(=nh9-P7!jXs8dt`>3oxUljvc-#@UF8O7K*/,V:q' );
define( 'NONCE_SALT',       '<P4|]HyAz%0JAPQ2)S/T%|L~UTm-1L(//lOPnx_s6XD;/+-dV ~$N|_9+>3.|I1%' );

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
