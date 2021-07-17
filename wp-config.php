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
define( 'DB_NAME', 'lamgiang_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         '0 8c.ZA#k+?+jRfg?vjd~g7&FS2+)CM+(cTON^Y;w%B+=(Kq>J{sE:jpmzXY|D^I' );
define( 'SECURE_AUTH_KEY',  'sIk<N2pckV~5HPqojN*gu{.YF!&ypi&biEJ(exN1|5Ay!,tCX(XM*O}W&NfCK0[k' );
define( 'LOGGED_IN_KEY',    '?UL5?8hFXkH@oloxR(RkTFd4f0VsXL*dE%7 dkciJv{mrXy#m5|?WwaX20i(u+G[' );
define( 'NONCE_KEY',        'hFV*r;Fr[n<o6h?G G,k!^q Qm$vf-gWm+%5dFX2.qw2Lep$/]RYA5d/xsIAAJ;$' );
define( 'AUTH_SALT',        'y~>LR`2$@jfw%}QRyLNs^78-Fbs)DFhd^oxbvKT;srSNX)O3>E/&]h+U2jf3l3Qr' );
define( 'SECURE_AUTH_SALT', 'Z-P6:gcBau~y`+n*cd)w5/OUla;yn;m*hw^r^B@u[ydeuu6Nb$bYUy(:06(8^Sdt' );
define( 'LOGGED_IN_SALT',   'YS}l=Y<la=mP ;lLmi75K$1 ;sduZ=>gdh|<(-w,WmDE~w>$qxr|6wgu:6bb+.`C' );
define( 'NONCE_SALT',       '.?Yec=;k&lMPaMVRhKkC078z|}v>J|4jZDunm[{nv#|AYD,`[cBpTGzn.b/HD^9;' );

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
