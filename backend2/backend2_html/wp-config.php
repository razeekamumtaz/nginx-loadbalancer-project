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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'wp_user2' );

/** Database password */
define( 'DB_PASSWORD', '2001' );

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
define( 'AUTH_KEY',         '<a Cp3C:ll`^Eui1Iy<h_%r+I?Bt}otWU5Jh<KOlR TsSy24dsxLVhSQgYF|<eC4' );
define( 'SECURE_AUTH_KEY',  'j)YH_Zd1d1>!{m+U.Df N;&qsBk.$RH 9eed;JvkArfM]o0haac)8Mzp:W&mK+gn' );
define( 'LOGGED_IN_KEY',    '`F)(c^f~PpXO-wy`K fgFIM[$>OiFLzJ{4dAj^.6Z0Du_n0063v&E,b?tW vIZ:;' );
define( 'NONCE_KEY',        ']HiAs7$1,*zd>v-L+!hgjdx}bFOQ_Ka{Yh9Eu5Tx;Anwla~_Lzh,%Q~ZYqm_LUI+' );
define( 'AUTH_SALT',        'o[XSk.TmBcrv30FAh,+&`Y;j%#$;6bZ-yQ|DxlB98!D; Ax.>3Vj*6bG;uZl>979' );
define( 'SECURE_AUTH_SALT', 'NoL$:m_|xSFK8ti2bI}C-79j xKyRZJr| v[.c5<N),HZ$MFgw WyWAL) EixLyI' );
define( 'LOGGED_IN_SALT',   '0ca^hSSx*;j&Ro#X-Rbjg3B:0{>OUOB/iH%w*xNGFw]TzEt>#uSp@Kgi/OrLxxQT' );
define( 'NONCE_SALT',       'w;0,j[yM*H;HVpFo]dH)uTA?G`ghG-W{9TX&3}%L}*jTM5|r`Fd*PgT2Bb@:%fwv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
