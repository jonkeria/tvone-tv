<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tvone-tv' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' d@4]HcJ4c*,eT~|!p)i=&+EO#Ec>-)YI?7Dgs*@tW3(=4:3ME-f2`[d3/) mL42' );
define( 'SECURE_AUTH_KEY',  ')Y-aM<}~Fw8(&CpgBzk1F73/weL@&9-%L2w<p_/cF`JtHN[|^bLEMsXN,zM+prn#' );
define( 'LOGGED_IN_KEY',    '}^Uf `{p-b1.Ba3hpMJG3fmYbUs <$,gy{h=G?XSko*^cyO_$nT<QjE|hq;]K_Ea' );
define( 'NONCE_KEY',        '8p&StK1,uMS@~Tz4&;*o&pz?C#fy1w.f0vf{X:pLT^SFGQ=e2rGoEU12MS]-AWHw' );
define( 'AUTH_SALT',        'r#z-/? PQ23T_F[bs!/y3LZ|c0+O4PoS+N<vY#X+}sQuWJ=C]BaVXK~IfDy~SI3 ' );
define( 'SECURE_AUTH_SALT', '?5eh[-X+762K;|YCreIgSCS4)(ZAcm?RZspzT A}*eKI`M 5ltyN.|jF1/&Qva~F' );
define( 'LOGGED_IN_SALT',   'bISHo@b[/{yVcg2h(Oo(*9AAG}^rpeF7Lrz$Rq^%_k3Bkb>I]QK#0UN,t%Qb5a@H' );
define( 'NONCE_SALT',       '1.dl 6s/d7d1$l?r/fetj.g`HT?s<+WsHSHYmd&#|:G?qLL<5hJ^AGdd%/e+vr;7' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
