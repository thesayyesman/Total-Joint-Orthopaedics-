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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%xjBkAV.W+HO,0XUnWY`k[(.qBwZ-|P%mN;-rY+=aA:T%&gch/HQ=@@Yd`frJ`a=' );
define( 'SECURE_AUTH_KEY',  'rX+UuQ.bjiI/8nFHDE{(=@9K`LtCvZ{TrQ2 &&iTHxp&$#jZ*4WXiKZf}bpL^~|W' );
define( 'LOGGED_IN_KEY',    'eb>2`Y5048~S`mf5ku8Xcw|QoI,<Ppv2SHc8HO2INBeE+?tB7sXhYV&>HhEi6>r2' );
define( 'NONCE_KEY',        'tz*d`},u5f^56kX!6uBBn&&v[#qo.ug$(h=;ve_%.~e%evtZ+Czaaqs<MQ*xV(=!' );
define( 'AUTH_SALT',        'DJ`kifH*BI}dC)<&`hUc+l8SM~L0l#jF!J>a^sn uN}Gs}`4D%{MWiD xaRNUqcB' );
define( 'SECURE_AUTH_SALT', '5s$<7^ADrQKvK (zK0e6/%7om?H{L~;&G_cgJ)`X/:?QzI=sT+tWHlNJ(Y%NH=*`' );
define( 'LOGGED_IN_SALT',   '~:OtCe{y=,f1NDG[{p} bq4hhF54|t0zxa>&[Nucb&@cn.]xd-(9.DczRw)l_UQ0' );
define( 'NONCE_SALT',       'fX=9`NhK!Tr=(qBV!(5Jon+_+ErtEUr%[|m8:.TC9s=?WL%X^>M%X$yEZ~a z[@$' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
