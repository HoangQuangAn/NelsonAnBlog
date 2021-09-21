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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'NelsonAnBlog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o*`T-J[>P{oEI_b(~QPwR<*/B?PKLU`GHYR/6:VYGf2=2N^n,4jH25|Vk{Jgu+SF' );
define( 'SECURE_AUTH_KEY',  '1@:CRdayH_ao$F?6dZqaek#$go,ma)F4c5?q^GN4^;rYDIt8*(~I{Rlys 1-q2D,' );
define( 'LOGGED_IN_KEY',    'xITVV$n3TWLx&cU?W7<xQ.7iN?i;11~}CrV(npGd/bm3CacR^tRn~bwn6%GC{nKG' );
define( 'NONCE_KEY',        'sZww(@}CW]h {AM{?1=?|Z{Uj9~KS@!0>-;^w&bS9ZB;|8}k(bD<v.>dZ48NaS^z' );
define( 'AUTH_SALT',        '3}J7*~:6#.l{HWJXRwPy5xBz/=tQ,mpZB5.dk^u#8{7>5T+{IP7~wRaUG9eL_O@y' );
define( 'SECURE_AUTH_SALT', '^(TkQaKGNxz~<t96RkfJYUyd)(UMlx4qO)@5$7u0XeNMGT Z}k~arWv~ypMm;^N*' );
define( 'LOGGED_IN_SALT',   'bN9nR 9OVvf*#33?,-O7D.J]-O}k]^YA mbcEx?[@N0c%gKn6<k47cSc<N[+>geI' );
define( 'NONCE_SALT',       '3M{a$]ArR3E=.XCuO1>lX5-SoftEx5unk4qzXMN?:@y`HDl]_Bao_dIFU4oJs6,I' );

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
