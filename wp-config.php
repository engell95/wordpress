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
define( 'DB_NAME', 'platzi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'h#vXY44]p[oF{CnV>~*2K+Cg4_F7<g~~8)E|3u31+Te&alOoLcJhrgf>kd(<c!F<');
define('SECURE_AUTH_KEY',  '-:=]#pLb^31dK@53x79S|y@!Z% l-Flw%G1gSPReL28Eg+nng]A^b^@5KBO|-@6k');
define('LOGGED_IN_KEY',    '<n<RJ.Q%$>;,{WC}|Wi(>-F}-bPib_90c99tcyV(cHrH-RoMS}t5la*IXf;=*fg~');
define('NONCE_KEY',        ';(*=jnm,@U}jT1u/&rBQ WgBpO)`u-fB^8=mCGaqJ+d-1 buk.VW^hC|ma+xeEn6');
define('AUTH_SALT',        'p~uxZx,|`}P4|7e|f%Z#44;`eTo[fgPK0p-&|Ez]|C+V[(,+m*Zj82J}?E9rgluB');
define('SECURE_AUTH_SALT', ' l~<>>B,hgohT*[hSg}!J|tYxNBr&D5sc+UAZt,SEVD5MQNT!gJFa0]+v~52`GIF');
define('LOGGED_IN_SALT',   '#r[`YizA&LS~,]O>*Pyx{6so9xPt:({f+VLsjvWoZYX&,+f:<q ++Wvl|AR{4z7y');
define('NONCE_SALT',       'eWPBw<WZt#$)Xby[/N*R5;AJbDUvd8iIyX-A>2[=,Vj,bV_coeAlAT|jv-0eAS#f');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
