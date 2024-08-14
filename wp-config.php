<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wpinstall' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'bukakunci12345' );

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
define( 'AUTH_KEY',         ').s<3tHY*2Y+?8kH=yWr96-z@vB.;+gD[ytjBNFiImP$dkjh9luGa7f:uzg>jlaJ' );
define( 'SECURE_AUTH_KEY',  'psighw0.{01x4 <0_ Us4;*AP/v@%I]#}6#:g0:b6&UAp|uO?[egzlGs`Kd-xe #' );
define( 'LOGGED_IN_KEY',    'kf1%}=Y4GoT^,,[L#KIp-L&!a$pbcE/}5rZiv019>Uy&5g.3F4IszL5s}xF873b6' );
define( 'NONCE_KEY',        'WC;FZl}YD.u*z=h-sSxo!Tza$J[W.9`LPF)$wr_z2HI*/5Bs<D_|5f755V:8a0`%' );
define( 'AUTH_SALT',        'j~[Sbkw]6FdXI[UUAv*RL1,3FQ64G<7p=L6y%K% EyN$ _,zN[$5L9)-IY%5Ial/' );
define( 'SECURE_AUTH_SALT', '8rb/#0.R[4}%v6u74+Iio6KTK0#I!hy$8 ?mDh`G83.A(d1L+Jw~,:O }@^F/2E6' );
define( 'LOGGED_IN_SALT',   'M<X8 J$|.9Bi)|G?s1/#=8{UB-w? ^$gX8I@enj(Ck2CDvD=mzT 2p{$MHUW6~Yk' );
define( 'NONCE_SALT',       '[8I8ia2BS#hjn@H,A[UsVVDXvT12I8MS~8ogHJLBfV0Z*c^zA}nTn%,ei5)gg4df' );

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
