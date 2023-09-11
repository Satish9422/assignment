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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

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
define( 'AUTH_KEY',         'PW&oo[RD >=kL>mRjV~i<a[x9&>tG<^i{G5tatb*_mqXGG(rSHl8,C]O PfE~p:0' );
define( 'SECURE_AUTH_KEY',  'V(RB;CQJPdo@[|$TL+rKCN9%n>0r/tQ:Z?tFN`Z4})S9WkW<wBP^K<)]Ux7fW#^q' );
define( 'LOGGED_IN_KEY',    'p*9,q ZGEFFU*?VP.n_gaB[}(K`/]Or<N?%^s$,AFR(9gI:+W7dNJy~?9+qS=6P~' );
define( 'NONCE_KEY',        '5+`lRO-il$Z`G3Di{MR^#qccGZ=5fitIZXweZ<1l5jF{KOc%ypj][~Nw(7K]9ZPb' );
define( 'AUTH_SALT',        'n&&3[hqCY<iWGa]/bVlmcs*+qSB&ZZd~/HbS~DuA!VJ??#Iji)_3|Al`Bu9MIkFA' );
define( 'SECURE_AUTH_SALT', ';6hG!.2}(LLz$^/N?<qSvb~}E]r|wN:w:+*mFyr.2c&8u%O|7s+U6z<G*i4RzA69' );
define( 'LOGGED_IN_SALT',   'gPpU]MDi)u@pTm(];L|l~abkmULBt;70jXdSG2]rC^=7z+;F@-@6;4wVf=|db{_a' );
define( 'NONCE_SALT',       'U ynq{VC6!,S18 x;jJ1#-o~ffjc0}HyJ)K.7N!5V`G%?!+GXbo5t2}cR:tj>^i^' );

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
