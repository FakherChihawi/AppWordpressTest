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
define( 'DB_NAME', 'appwordpress' );

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
define( 'AUTH_KEY',         'h-1I`@-bO60zlsB=v}%K6bF*+&JW.@6Qy6Fy,a8ecLwI.5g4.E5,gO<N16;}_W}O' );
define( 'SECURE_AUTH_KEY',  'PyJ*;!>E/|^]C!!2(Sk/?XgqcBZORY_l.A1L Wy.0B}Ze 2[5t3#j:Rrm8W5G>|_' );
define( 'LOGGED_IN_KEY',    '<5LXBbTh*hY@*TwYiA_?bo55[Ax5m/6`&}T@M*q>xPh-}_9w%y[#w;o!X/ aGnz-' );
define( 'NONCE_KEY',        'VYs;ZS5}8/Iq#YGO61^8.>f~!>~y[~g%]JxepgR5hu~%_CXPS:8+o]6W9(Ox)1dn' );
define( 'AUTH_SALT',        '!nTtGEJJT7T1 1?KeUz^:2irjz<2{5TXmcGHvtp{WF2}m?t=&HSQa]#4zdz.koy`' );
define( 'SECURE_AUTH_SALT', 'ELLZB4nEVic8xb]:Y?j(b|/?;9yUO/e|B/OoYbywtNX%,iBo>DKTmfd;rQA(<rD/' );
define( 'LOGGED_IN_SALT',   ':{aD^!DOv^h!Gi0Nx^Yo|4fzXoakj+_]1FX`+@k2TzaTVKKG|WEzg!?IlGVpiWCx' );
define( 'NONCE_SALT',       'FBWl&Re, ]=1w>f*!E<O__U=rTe-E6)&vYdr.=>3S&m,{:w7rJj!Jfy1wm35B*P,' );

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
