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
define( 'DB_NAME', 'finals-Castillo' );

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
define( 'AUTH_KEY',         '^|ctl4NTc+:#}I{[Ki!2Q,gu8F8n]X20-3*?P0LqgJs)):[~N-{0W}^VQ):hwMWW' );
define( 'SECURE_AUTH_KEY',  't+Q<6_mv.>I[#aLqH=rV9RfJ~xkWSGajGqG08pdPLuQmQM8n#]{(F$DK%RxAaXrg' );
define( 'LOGGED_IN_KEY',    'kTT]4SH>!@FTB-{wICz|.X$u#%fPM3,of^@Tv8hvQd#i/^dTWEr_4[9J`{8|`%pO' );
define( 'NONCE_KEY',        '7Vly_,EIxzC1q1:6D[;G`9sol&AK{,If]%aEUHgx[<0BmC22r_np2b$ja&Fsv%!z' );
define( 'AUTH_SALT',        'mQPw(IitPE[HC^2F.o;T0TQ.&7k0>=8qB2cHJzRkpMiNFrpc2a9_!5P^cagTeNaZ' );
define( 'SECURE_AUTH_SALT', '.,>Z3gIzji&zPxiA)h6j|,tew}H;AQ!CX,SN5S*>X|Xh>c.`rOQnI69e.|u/z,{|' );
define( 'LOGGED_IN_SALT',   't.:M8{o^ }k@(.<nsj[I85GS2=KtUni`X2@{c>l:=f&-yatVGF8D&ViNaE^MDE%>' );
define( 'NONCE_SALT',       'IUxuhJ&6_EH]M!Q.K2X5r5STJrX]R4(WB9dV>V=/HV)CIAwc_Lh|*Z?>h(8`uq$=' );

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
