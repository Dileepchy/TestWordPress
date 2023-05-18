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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '7)FLx&ELBzq~m5#~2~I&]Bd?[gY0P_s[MybK/XD:xvh-Lt-?e]F: DB_8)#P/o22' );
define( 'SECURE_AUTH_KEY',  'F;tq^V$a;V!}O>f+nR_Y/m;AF]m&}jQWtc6}}N !m3vXfa*e) F}RMak.bSe.DA1' );
define( 'LOGGED_IN_KEY',    'nFU`l^hrA{UZ[M~] sUhx^YJ|V/SIdI#~e9m155Vhc%PLt,k-4s$azK2fwWH|]QL' );
define( 'NONCE_KEY',        '6L^{gPkfdSjL0G9AB hNH!y%.*H+ij?HA(fI]~`r(Za0#z0=<u24L%q.&Jdq9=Gt' );
define( 'AUTH_SALT',        '*6YjcK0|~exPX-6[,/tmC}NXBjrS3Ei) 111LjeOH5EPr$s_q}8`V^d~T>ex<];:' );
define( 'SECURE_AUTH_SALT', '.&b|Zt-.GE0,HR1FN$lXDL5M:Bmw!KR1YlXt[y9$D%cz$NN^HBoi0TAP1x*Lk6{1' );
define( 'LOGGED_IN_SALT',   '>lN#SG`o<rsR56&-R+c`r4x7zLA?D[F0cQi;ziEl[(^Vtcr`oV+[(44S0%s%GP%9' );
define( 'NONCE_SALT',       '^M]<J6Tj{xX6I.m2l6h<Y*Yh`XL *HPFS-)B)%KO)g):_=-Iyuw~Oey5xI{>I&u?' );

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
