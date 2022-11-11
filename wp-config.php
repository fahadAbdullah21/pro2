<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'fahad' );

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
define( 'AUTH_KEY',         'L%)(UJoAT3%1yY68TLV.L-(Hha^I^#F[.E++D,5Qe mCVQHI^{L^w aW9R+toq6H' );
define( 'SECURE_AUTH_KEY',  'x3QAW7~i,nnssM{uh:?!n&&;Y*M]:mau02h;$-dlaknNe*AcGGSK 8lWb`CrHJoN' );
define( 'LOGGED_IN_KEY',    'L*hieZHsT+`A ZMLuWDxU3luSSnK4cxuBBPjaM-w7X<su3Sp_?9ie}$qQ86;xA@3' );
define( 'NONCE_KEY',        'KAvAI,[)x1TM`pHN+/|o<T{,t?7AuqH~{0bSP%;HmqFXl7+x.PmID9(K>=J,ezvu' );
define( 'AUTH_SALT',        'buSRM1e?hJWj+e^a<vMW@bG`0mHuy0G#U(t`ahq){u{AGTX+^0#Hl>1{tJ|j5H!_' );
define( 'SECURE_AUTH_SALT', 'h(AbPziU#D8W1cZy1Q?FFtR zqx.&mYMkj39&-*q>n:?u(;fM?Y}>:JeKubJp<:<' );
define( 'LOGGED_IN_SALT',   'V($&Sj-[u1l?Bcy.{%)ii<I@lhu@~vPJ;elF$E5%}+2sS5hmT:>+H8N6>T+~!gkA' );
define( 'NONCE_SALT',       'kp4;~uTeNXNL^xuqiZsEn3w]#[shfwW+J8F!p f1vL8WMaBR:wL,I=3HvI&TxAm6' );

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
