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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '{Jq%/B9QCqe@0v8zwoucRNy>cR>3`o=:IVkSHhCg/a!2*_=[2~jg>RW0fmV`asx`' );
define( 'SECURE_AUTH_KEY',  'PfHf2ecvJHs}78qd6$uC(EaJK_ ?rrJ17(DB}leEPbKk6epx?jwW.6E;>82o?7I-' );
define( 'LOGGED_IN_KEY',    '#o)ofRIE^Q(P~e3}?fYa)c(Rj-*}__^SV~_~o_sC@O,]<iyKYX] <[1nRUSX1AU^' );
define( 'NONCE_KEY',        'P$/51&5y6RoTF9W]$<iH=E%P7N6I,~2Gu TlMDhvVYamEg&weMwG*U1Z?S(LO5Kx' );
define( 'AUTH_SALT',        'zDUqS+v8zN$s`QukDdux(/(T8avFK<.avWgqZz@g*=gCG@b(-attuN^nxrF`vrx*' );
define( 'SECURE_AUTH_SALT', '{<PbNp@<CsEe7coN^S6|Lbv!$1GlSj8H3>* ~QU!*tP&q=PMtUk-%/Xk>]>mU.AB' );
define( 'LOGGED_IN_SALT',   'q=Zy:fB+/nO>0*#q9`;,js=oL[vt_4D.HA8<B_ch_f$oIl8tr`kt9S(XlFh?WllR' );
define( 'NONCE_SALT',       '1k>2Q@&PJ=i}pha(giNj}</axFq>!U+r7f]XJ$G;yUf*B`,Rf-B7K@<bZ&W~%6bQ' );

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
