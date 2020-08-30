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
define( 'DB_NAME', 'FXYSV8gh3m' );

/** MySQL database username */
define( 'DB_USER', 'FXYSV8gh3m' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kl707EhABI' );

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
define( 'AUTH_KEY',         ')%DvNhXl@uu540%?*2QDV;qG|{$B~Yb5%Ag]9~jGLrWd{u;vQ2}9NMON%(966T$U' );
define( 'SECURE_AUTH_KEY',  ' xpBU{NX]b2:$Q:r,`vU*6ip{82W5Zmn|_SW+v][7p+HZgEI,=J<S)muPo{]8m$b' );
define( 'LOGGED_IN_KEY',    ':`xkt:q&o7oq}71t;bYLw)6%dCP~xV@udg=QEXvSW8Pi3^S%CC8z{&eG*3%dM-5T' );
define( 'NONCE_KEY',        'cqrT3<h,RUtEA_F(M_ILR2cr=RZR/}k;.F<I{kUr/sdqr:xA?jy.8FG26u8d,!}8' );
define( 'AUTH_SALT',        'y=(A!#RpC}oWbpBr|]I$ofD_I)6Y{#pbT8(ZjXOsxT#KOOPr2(7.w:bz}MK/[%Dl' );
define( 'SECURE_AUTH_SALT', ']i NEuCz6O@k{uw]pRNcpOi> q=ik;)b dYT,O0=r.hljQZO`_+oV8[YyKjKm#:x' );
define( 'LOGGED_IN_SALT',   '/Wc-5XqEDEB68$b5ogmig_?ua~;&j%g}iMOoUuS]$@2VS.e!Xp1QHu(1GqS>Z9`c' );
define( 'NONCE_SALT',       'M/4}T7gy6{}k{ez^zKAd+&!!%0){Vfu+|ZwBYI76(4UNfwE]l>`o_%?^qEi6 #&R' );

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
