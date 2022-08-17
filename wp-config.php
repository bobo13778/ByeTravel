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
define( 'DB_NAME', 'ByeTravel' );

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
define( 'AUTH_KEY',         '=XKO8aEC:;a|9aY,eHQRzObC(3qPbw0kyN2Ydd8htbPlTW2;-*Wh_:3eV!r>$VcG' );
define( 'SECURE_AUTH_KEY',  '.huGP5C{+n=F.eF2A*V>-R__I*h*=heBnw,=v0l3G#Ru?[FkMVa@qUv:z} lXwr$' );
define( 'LOGGED_IN_KEY',    '-p5~/U#[z/ORt[{>C N2@u:7iKotTga<4~DH@q%uRDj94.o?r&}D.)`G}f=ZJ,0{' );
define( 'NONCE_KEY',        'R|IKXBT|Fs<2(zW3B_3ty:Bh2>.[t|G_4 0O8DX);2ZA<3j3ImgLp2k<Bf? ~Aa?' );
define( 'AUTH_SALT',        '/gy=i3j/Dl]+n]4f7u&:nxL*30ue OjZH5qR&klN35O6Y>jg%rCs2z_Z.wuNS6q_' );
define( 'SECURE_AUTH_SALT', '}M.J*HZ^}HqNK^^-gJ(B|>Y}?@XA5mkQn@UPac+jM+@:ua>.! %edb}Gze(Q4.zP' );
define( 'LOGGED_IN_SALT',   'Tn*,Ei3FC0$&_+2G{Q`f;P?NrDyJ0T&.1;E0c;OL_YL*4O]Q.qke8*p@$_E(g*i;' );
define( 'NONCE_SALT',       '_ZPf_h&t,myUP0i;%HowMM^7<6434lp?{jNuzX&R1+_E;TZ.pC]]t.TQFpz?Sv@o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bt_';

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
