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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+1B=Pwv11S?;W~z:YK|&(+U|wvAY!2!u[4(z0kPzDpe-0uUMjS1M}[`L[MIFXIo]' );
define( 'SECURE_AUTH_KEY',   'iJb(*CV:Y{j#>}eV(SoAeU`U6dB0bsUN^JG]fo`.1yea,Ch?fM]n23n*YHl,xeyG' );
define( 'LOGGED_IN_KEY',     'QGDrJaI>EH<d5JRz,.L=u+U~0//@-ryIvLzNfV~~PeOuJH}_;.93=WAj~2p1s9Ux' );
define( 'NONCE_KEY',         '[d&x+]LJtZUz,CYS6^OEmNlb;ioO1CD+|&) =Oy.?2X:RL|fEi8hnUf4A)LQl3Ru' );
define( 'AUTH_SALT',         'nN;xt-8g9~q*Gd;hnm.mvgM~9Gexz)5[TjX5OZn$V)_i8?}11q4&(Re6?+T{-5}#' );
define( 'SECURE_AUTH_SALT',  '~ijOs.0G!9,}LaofC6y3+@v1^Bmc5^197@LER<m5xj0.AsuN~B}/V0+]XL~K1heV' );
define( 'LOGGED_IN_SALT',    'fBZBQ$% DAv;Qpi[jL#3wlnP-M3v$BEV0<Cp&fy~*NlWy2bW8ju6:5<uE@[j)7il' );
define( 'NONCE_SALT',        '$}AxWjy#sGsp^V:a8UAjo^gte)9YJMXC{jb#O^_?t0h#/fAX`edE!-EK(YtO=LR@' );
define( 'WP_CACHE_KEY_SALT', ';.%Vm.M&;]vOuh:?!.roq`-;8NkB+.Yw4iC,Og QYHDXen4WlFvaICIh#2{Ncvo>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
