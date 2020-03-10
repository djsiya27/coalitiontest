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
define( 'DB_NAME', 'coalitiontest' );

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
define( 'AUTH_KEY',         '*bt_o4s{{=^K];<n}uA~]9m1$a~y[IgcLBBV?0F@jt4ap_Az&dIRt7_7THS&N>dU' );
define( 'SECURE_AUTH_KEY',  '#he<dp=djXf8aX82*s#I+HD9u&Wtow,iB:jiJ!sbMI<<XSqC6?qRmK<9=MR[h^<f' );
define( 'LOGGED_IN_KEY',    '93O3=<x5LD`>7*(((4qO64x%>XrHGID[f_f7Rx0UZcW>M<=myJLqk{K#1tYR!E$(' );
define( 'NONCE_KEY',        '%]BPoyG[pAYa([r ?@C8j.ZxO-Iyb;4>.RNM}Hq<W&9)BM:d^1cCy6]FG8DD/>@f' );
define( 'AUTH_SALT',        'u3sLsB-JDT|<P.7K.KZ>je(D/wv+xQ@d`9m0m/cOXKKIraT=TOU*|X0@:HQlf6X|' );
define( 'SECURE_AUTH_SALT', '7@nk%A|VPjBWL<~Ts8uytIWL-@uQjJvrK0q7viK[=Zr}8}i6I]qX3GjP6)W=6C{>' );
define( 'LOGGED_IN_SALT',   '1eCoebWf8Vn/k55PFPf8z-R^yD?#b/rVOQ7w-n<kmUPpeL1ZB&nd6,xf#wpy]1B.' );
define( 'NONCE_SALT',       'BUvw)5D:gc>}GpSQv~s]I2q*Vj*=<2J/rA]=MbW`=n9cf|^~Q5.-E>_yh+N>g!Y@' );

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
