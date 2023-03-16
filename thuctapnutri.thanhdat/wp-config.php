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
define( 'DB_NAME', 'nvwurkwjhosting_thanhdat221102' );

/** Database username */
define( 'DB_USER', 'nvwurkwjhosting_thanhdat221102' );

/** Database password */
define( 'DB_PASSWORD', 'wFttEXw)_AgU' );

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
define( 'AUTH_KEY',         'y4K?p9y$rF+gse(re<ZzwbE plJMzV|_]u=$:YouhQcjff<V+`c};n+xibG&w96{' );
define( 'SECURE_AUTH_KEY',  'tR]:K/KyL5#vq!& BJ_YR>}@%O$/K?NL^:_&&m>Q1>}{jOSn]<p1Gx+P%N@[pZ<j' );
define( 'LOGGED_IN_KEY',    'a%47BeL4&#fhqBFhnfi.<T#8eG+$^;BMA-wu?F.K%Ed8ZHJ0S`&g~t)di@dW>Ums' );
define( 'NONCE_KEY',        'Q$M@e9sB.c]mBj`_00l*U7(@(JmK`(0.75$&2:EQw[GBrh.(!6zKv3&X]>Jc`09,' );
define( 'AUTH_SALT',        'i=?Q%]eTDNa~@qJKEv1|$x{8Aa3IcQ2+/b=u{T~fD5:t3SeO$AQ~O8~P#<j26t%+' );
define( 'SECURE_AUTH_SALT', 'zDkoT8yPw.RUiXfg8^-}xA%7AO0DGR6=5gg<0>L?p $Qx{5l0a;0YktLz%FytV/g' );
define( 'LOGGED_IN_SALT',   't&hO:,QyR[$j<B}!F@ym=5asS}@4F,UPVtf3_!4 9Lhi2Mp,>q!kis9/~ov,p`eh' );
define( 'NONCE_SALT',       'yh0XOkc{1WHsldg+yP,&0J.2c_;I5YZV*0CGHFWS<#1cY;BogD{y|dp#N=XR+ff~' );

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
