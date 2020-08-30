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
define( 'DB_NAME', '4qPv4QMz7Q' );

/** MySQL database username */
define( 'DB_USER', '4qPv4QMz7Q' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ep8YdJE2CT' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'tlte0`;e-`1n9:$EfSfo*G7~vpTv=:?~6CYV `V;%/6.(s/&?w=$)=;Wj28M|+!j' );
define( 'SECURE_AUTH_KEY',  '>0jWJXeSL-cg@X;)avnc>mx$w$H47}Sb<UJ-._CuV{_;?c_YI8i4F^x|KR<@S7Xy' );
define( 'LOGGED_IN_KEY',    '3FU$(z1JC<qS}{X3r{THpN-]&bvza2y5Vqh1yg/jUwXHFV0koVC@$5X]9nBKM,-l' );
define( 'NONCE_KEY',        'J1$0m*7Ae;aPv+%OwC!#D~#6S*LsLasSVt}OU`-q<b*U~i]?@X9[VqAP7=)=e(wW' );
define( 'AUTH_SALT',        '~!Y{0:Xmd~IJ>P}oR~6mZ0OM:=9Iben>t`%s~:]20 2qjR_$6=S5^|+-A>X v!Y@' );
define( 'SECURE_AUTH_SALT', '1W?5lUZCS.oM3]!dr-.2,1er3e+32%&7vTas*zYvM*utP&wj{QG%hMYY2I]N3!qc' );
define( 'LOGGED_IN_SALT',   'mFwTFS={08CQ6u8ws~73(DB4ehIkM#^$cZ[N83{mIfC5yoA])@~q8g%r?:IH-Huo' );
define( 'NONCE_SALT',       'ZnFoD(..pXqUitEvTP:M)O $G98>F.jctW;/<`&>2./!}?ZV%ge%Pp./`F6nnI~p' );

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
