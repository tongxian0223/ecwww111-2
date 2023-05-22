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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'wpadmin' );

/** Database password */
define( 'DB_PASSWORD', 'nkust@0000' );

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
define( 'AUTH_KEY',         '_DrVyrGIq>x>XoU*Zs|Paw7*zEdgnu4*Cv1Rq2F`wn!UegebX!pF+EP%l=BeY}!:' );
define( 'SECURE_AUTH_KEY',  'dq@R[#&428^p.`t1[mI`7,|*[_p6{ZuM7]WhD6>Rj/Ugs,zI/X!TzT#(]!gzI>H4' );
define( 'LOGGED_IN_KEY',    'ZR67Cn=^[*OpP,Cz*R1D*)q>$`m5~P2`urOR]3v/qg,[segYu2]|~$IZ|X$GZH!X' );
define( 'NONCE_KEY',        'oz$|S_{eC?,$;C&gWJJ`!J+Ig=w0~3}CLgxRgvkq.*Wej2Y#+:Kr|mk!}xqLH6u&' );
define( 'AUTH_SALT',        'SAC90mn[6,QO%}@<N)>wMaMCS5u?9r#zW:$$Z-34{w$hu9TstBtKRe[2nBKFAHmD' );
define( 'SECURE_AUTH_SALT', 'b-Q^0DA%nCA6~fmnVfS)+.Qs_tDGts1Z3]+4pi?I2Xf-=vIn;[,IDI+-A!-G^YRW' );
define( 'LOGGED_IN_SALT',   'PPz1OCObXo.V:y1lPWN)q^4[5[q[8`a9_Za&jWQQ7=elZ=e3sRG2nSRN0CxV5OqK' );
define( 'NONCE_SALT',       '6]bL=Vp8O4=9kH*rN`H-Zbv>$tKNaN~.HK|?EtA=Raq!W:?u$*ITj>rWK0beS/g<' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
