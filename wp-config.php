<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shangt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3SdIV/07H&jODFoN#lx<vG>G[NTst/2^3G%Qg/mTQ|-<{;b;-(}am]w!Gb![;Ng,' );
define( 'SECURE_AUTH_KEY',  'J00%}?<&woN ? KI<lC~dLpY)A,e!91rr$K ?XLiO/E7$ou6y<gaux,f<Kn/M=xl' );
define( 'LOGGED_IN_KEY',    'YSC34^$.@dV646S#>Q>f+Tp5 (SnxjC6.4ct!C[B8a{r|SNse,-Y&n#=:_SZp);7' );
define( 'NONCE_KEY',        'B9+z)|w2Ouz=6:C:$eHUxW&1o.dYu1:$B-OpNq^3o=bH[TFK9tlcijAE|7VKWg1}' );
define( 'AUTH_SALT',        '1u-F9Z[~Eb)}!<%,|:+L*>=6ZVr5twwgp6h<cMj1=c<K_:G=GH *~WDq tLrS0Vp' );
define( 'SECURE_AUTH_SALT', 'Np&r<FU o7dsiX{LzZM9pH)c/rBX+$kZTYIVMt4V8&w``PcQ<Vg-4(D9bvJ_E(|*' );
define( 'LOGGED_IN_SALT',   '5!<?>,28xSl&<4~X(_Uzv2aXSVi`(LN0+! (#7g)cNDl&3gL=)j41t|/^iUGY60k' );
define( 'NONCE_SALT',       'THM!wpjBp.@h)K/;[`FB&kLtq~*DS.;8C7BA)>>F@n!-qL6OWh::_j5uR[tT%Ep1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
