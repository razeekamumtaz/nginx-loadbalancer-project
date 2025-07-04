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
define( 'DB_USER', 'wp_user' );

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
define( 'AUTH_KEY',         'fVL0zW_y31Gc/cY&NqH;@dR!n*l907,)H?%(X=1g >o.J{59P`l4.?J-A@~f+pS1' );
define( 'SECURE_AUTH_KEY',  'p_IdYqJr:(UCE92#d]lX@Fz>L99#sBk!%.((.;.PjLNo9[%>]lcgF_u_/PT*U5p;' );
define( 'LOGGED_IN_KEY',    '<Kv(WeY*93br=EK#ZgEnnkZ13&$Uj3Iwi;SwjmU7jnd$rmVq<5s4;+EbjKUUR0y*' );
define( 'NONCE_KEY',        'Rq+T><,[ziNQ~eM[H-pM>+oby4mc9,0|kQ?QjqPK]BS`= K=:=4hVT[>NpGz5nEv' );
define( 'AUTH_SALT',        '{hlpPHeMu/ug^o@A{meC$T6U?Z^:Q8JGgdvQe=.W7DzC^-D/ }X[R 469pr3k]DT' );
define( 'SECURE_AUTH_SALT', '<SLd(D0#; nW=O8__kQr~FP6;e6vn#}(!8HiS:SMcu@_ U N,VAuxm,6_}34~Sic' );
define( 'LOGGED_IN_SALT',   'h?OTMWp/`V) $s)z=Vhu;L+*&E|q]63q%x-ml.q(|Wa4K7P1<ZBq_aD+pYRhR1sa' );
define( 'NONCE_SALT',       '3Ui<Vu|:~^]#;H#5Z~PX)faX7/a8vJ#ezEQsXze3N_Xoj?TgMZ$Es3-6lZ.OMFb{' );

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

