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
define( 'DB_NAME', 'wordpress_pp' );

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
define( 'AUTH_KEY',         'BC).QP a+4k5sK 1X2IW`Z?;3ne7]/cPgTpU-5vHN-q6&AHJ|e ZWzYl`XdoB51^' );
define( 'SECURE_AUTH_KEY',  '!$U;7Y}`I:uH$hVZI/s`Uvx&&o~l./*nHk!d]#EJ#)s7_<2xBrtM`dc/Ahp8G9?x' );
define( 'LOGGED_IN_KEY',    '<1,cSy$&s0rhV!UIR,X`L=Gu0z;FJ[9yz=_cr!!NOIXfL8T(0bi;$9TW,JO~z sV' );
define( 'NONCE_KEY',        '$J0AuRjz0#AV-P8fjA]Un`Y?&ql`(p[ZZ6Eaw;r[=6]~[X`oP7$:Rnf6bc;..Ox5' );
define( 'AUTH_SALT',        '=ilc5<,i5qJ1CkXop;I<}D_upm_P6k!Z*1(dy`$5Kv4_)NH&e`z6<4B]Ll%M)NbW' );
define( 'SECURE_AUTH_SALT', 'T^##f^-u6zoDzr0~7gd$M<_s{Q/9+S@uaCc:lv3V8tIoi?<p_w_!&BEW%U^SinAO' );
define( 'LOGGED_IN_SALT',   '5!BEFeP0UB(L&>4h[m*cS8l@W<> y5g`;?ze8Q`X2HEbV>Lw,P+0I:`Uv$xRx6*h' );
define( 'NONCE_SALT',       'x5^D{_}T?A|zA<?d0amNKd{%HktV_[@Z67;]`9Yjko?zx$MTBD6$2BY <H%=Ld|k' );

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
