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
define( 'DB_NAME', 'allaboutbamboo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ke9_CJv*We~|))n3f1UY,AzK35-RB#2Z4ZQi_/#,>B)D*M(zLmsQk{,66-A@CKi,' );
define( 'SECURE_AUTH_KEY',  'uby1p;.M&v-vNQaZygSw2v|qEBS+DJA?#b?gem$ph:h!B~At~&QLp(Wv(0L$~o$1' );
define( 'LOGGED_IN_KEY',    'm:nhroB3n2!@:;J%{ATeKSb22F;E_E1:zOi<*BI`m-RP:S3H8|$ @,6t0E|hi,X:' );
define( 'NONCE_KEY',        '7+)sDEkVxMYg-q(*uuV$8GPrsb>2J@LUa=;3Or2:T`=XSqME,y lb,hhwE-$Lat$' );
define( 'AUTH_SALT',        '~]$v(H 5;tgf=0,:$p Mk`yg)1dw[s:DL>mVVJb+dazdX/@+Q*UIRcLZIh0~d~<4' );
define( 'SECURE_AUTH_SALT', 'ZU#;h)g@:!}w1&Z:A&ScHFlID5h~sdw*Y,.gC{KnRtEZ-G}|uv$r{OCo[h;2G]5i' );
define( 'LOGGED_IN_SALT',   'iG1[+l1T0_)#5ID3ld{K2TW8BeGXFpLaEgS7LMQMtpj&S0%+p!,,o>3&WK%8(}|&' );
define( 'NONCE_SALT',       '1A({!V5B=NB)%)7cp*MnLBW_E@3t?;F5U/{UuPlf}I,BuiB%l?Usv1<,-Re:XaRH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aab_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
