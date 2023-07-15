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
define( 'DB_NAME', 'zonadelectura' );

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
define( 'AUTH_KEY',         '+*iE.40$|Pi`q !pLR;Zs:udW*U!NznU+n4,pIsK@jaHy7wc c/>,0mG)1]OkE[y' );
define( 'SECURE_AUTH_KEY',  '~}c^8&&cOc){XjL79[]s:_+MLb/.5*iVrCyoBaiba_~n;1X?ewWs0>/B|lN/-ZoS' );
define( 'LOGGED_IN_KEY',    'Ax4h8Yp:{ FfzQBH6A-:XZ%Q*-V2{2Kn-VK{31^4=1/{L>P1#piI2})HeQp*Zt?6' );
define( 'NONCE_KEY',        'AI*f=_4=qdkpu=Odi-395qf|yRH37$cJ1.02=<M6%q*16]F3%]kP8%nL5K(B4Co%' );
define( 'AUTH_SALT',        '{#a75Cpy>Dpz$ xmYcCa>1&}yx(Z gr`>]= iJ{dmop!?muwynK(^N_l]J4R4zw?' );
define( 'SECURE_AUTH_SALT', 'FOBTOe%9kf1ay5b=yOfAb^L:,dn<QjL{}o8 H+.Se[?21~;A,_hT>gH|E&+Kb6:g' );
define( 'LOGGED_IN_SALT',   'Wc1EuD ;~4aOMtu/rg5z|nSn29yXRlzUfvZEbo2T:]i3G{(CI_:X|urLl=FjlG9.' );
define( 'NONCE_SALT',       ',YH;WZ#y:jA8F+]9sJvx3&Hy-nk/q9|$utSlUMPdP{K`7]Nd>0YocPL,jf&V=:lO' );

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
