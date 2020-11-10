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
define( 'DB_NAME', 'base_db' );

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
define( 'AUTH_KEY',         '`x2FoyLW;k>f0no|@s-m^<OT?X%L%&$?4/s8}U=6aSH{Hj?Iq|Iv}8.l]VH-=A_[' );
define( 'SECURE_AUTH_KEY',  ':?o<&H:z7O[vn~MTvcGaadYrS. v1w`i5mUo[6Qhd5LRy;jGpj?t%PQhnG-5@hxG' );
define( 'LOGGED_IN_KEY',    'gt=tT;Mqxob*dVTwQ>|=Z:Y_O78hJhrI;45,Acid&o$pV2aU_@>|koI0@+1N6fx0' );
define( 'NONCE_KEY',        'Yod[?fX<t^Eoi+BTv:h:z,s3d6MT61Q+b|WVh#%C@]eS(?YtZ|D/#-6D*9wK3zNj' );
define( 'AUTH_SALT',        'f}# r7F)jc:>pZ2 K,,%(;Hv8C:ho7tUUv$m}_#f_Q}-nY,!;dQe?em=l@V:a]lG' );
define( 'SECURE_AUTH_SALT', ':n[rC)O[3TXQXwh4Vv44YYFucKj8F4.VL!/mtw++8*%wGLfI7R|#Djmod|{Jbr?Z' );
define( 'LOGGED_IN_SALT',   'aD+y*,Z`;sq8,*&HpD3DF@3uT*z+vP{Xb?TLt^f g[Nx*9pNt4? +s=vSB)Kl|.]' );
define( 'NONCE_SALT',       'u@`og*%!]#ev{B+R_<,DrYbZ+o,DILCx8/9.hq-7P5Os4da9:e9DUZs H_4/iTM[' );

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
