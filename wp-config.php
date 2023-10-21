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
define( 'DB_NAME', 'wordpress_new' );

/** Database username */
define( 'DB_USER', 'mavin' );

/** Database password */
define( 'DB_PASSWORD', 'mavin123' );

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
define( 'AUTH_KEY',         '`Q*AXBNA z;h:C@EwmP>wp,/33(?Ho}BjO}hp[-7:P9!DsO?6^n&27QLp)z0B=;k' );
define( 'SECURE_AUTH_KEY',  'eQSB@RB~;FqcR?gz.Mq-OR}G!72+W!!=,Xsh[b?W.~`gzu{K3#v0$Nt=,GB{%;+<' );
define( 'LOGGED_IN_KEY',    'ys5lG~Qb~S3el<OI+ ]CV-f#{_jKR|HnI)1GS[-<=?5At1}F$iG)o*RPwA5p2gjc' );
define( 'NONCE_KEY',        'YwgM%v@AV&({OJo4q3)//Ff{!_o8E=]REf1dyWSHL_!}>$wdYMf1UPE)fKnU{w P' );
define( 'AUTH_SALT',        'J)MJ_&`NA<5L?p,zd_5}ti,|k.sYj+bXv&W8x/F~OI0Eo]Aklp5{q&4_?Kku@iw:' );
define( 'SECURE_AUTH_SALT', 'k-<??)v@fL;T58U4+ F%`0PNlB|%WXOjR^T&Ume?eV)Jk Y~%?^eM=)-l@lU4_4[' );
define( 'LOGGED_IN_SALT',   'sOV?a/|,!]Ey@<)x6%[6q`*B=ttEANR_kSs6CQ]TFg>?`zp&{pIIY/72(+8RR5uJ' );
define( 'NONCE_SALT',       '>S$5S@_m1wMHYLI.W^VRt(eFKE$!GwtMABNC~E#W:o-Tgdny!?i:qg8FWstt9TNz' );

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
