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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_cotcot' );

/** Database username */
define( 'DB_USER', 'januszteves' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '&Thf}H:b+V`0=k~z4Qt :UZrok)yIWW0qb#eD@&9COf7zED<@NYQrInF^^x|bcd<' );
define( 'SECURE_AUTH_KEY',  'B}uA=X6(6N>75UQ1JhImxHaZhW-3KC>nC!)lAavBQVL4!XR,z[>6`@S;q4-^sp>g' );
define( 'LOGGED_IN_KEY',    '2^&ciw$fg*: [x!lp4bafJF;(N2=-SAx}mK+fId~&Je(XjRJoOEeDNmR6-Yq^%v#' );
define( 'NONCE_KEY',        'xLO/)w$DT5`A#rlER-lmJITCZ+YESRfJ-p>Wy`B@e24$i>~Wz=rUwPDPkJEfThX=' );
define( 'AUTH_SALT',        '%M^u(3DNI0%k[0YpIVn$oOqA0-{K990_;p08{|FDa6flCoSw@!]d9_tgagd=U[wH' );
define( 'SECURE_AUTH_SALT', 'qd~52[OAH-HrdpqA)eRYt34Qg=3GC*DOMP/F7Ot.6Zt:4x )6<B^)3B/m4->$tWZ' );
define( 'LOGGED_IN_SALT',   'C#d[uyF5]EYz#WT[TqnkV!9{BF.un{zKe8mM(; 328XFQ*1[.^MpC<}:{A@+0P8)' );
define( 'NONCE_SALT',       'lDOBwdf#|5I5(Q|rs]sM?Ne$_0S;@@x He~$R*}6_fJf?)1Rn~7~$<Dw3LO7Wwkg' );

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
