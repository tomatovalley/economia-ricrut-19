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
define( 'DB_NAME', 'ricrut19-db' );

/** MySQL database username */
define( 'DB_USER', 'ricrut19' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LucesYOscuridad73' );

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
define( 'AUTH_KEY',         'kb_!oo2&jvl#KCAmNgco4tlg)MmF$!&kGIb&6fEPs&v,1x:I+&J5%O~] qh2x|y/' );
define( 'SECURE_AUTH_KEY',  'Bsy[dsKXIY9{bqQ.zyi c5}Qm}5_Qi-^K+!ZdmJGfjS8wsx;W8i%R YQ]6zQc8OS' );
define( 'LOGGED_IN_KEY',    'WX5>{rM=0wjCsN.Eq.|Yaxy,xdK47Ml{DhOR&l0yf>x/|[.zQdb5y8lX!N7(+d$h' );
define( 'NONCE_KEY',        '`t;`]TUgj=~)yZSg~>p{[++P@^VMyz )+#j|>S*A];&h1<2N!b`I7PD%7I^$66Z4' );
define( 'AUTH_SALT',        'PD+?N.&DZsOY#~%G)HHU4jI1CV7Ku3Jpq%T>J~PmnE(9NNVLX=:n>Q9A!Uq=89Hr' );
define( 'SECURE_AUTH_SALT', '}gZ!?8rFh4LZ!`!Sr3TLHB$81j8M%$zbnk2+;ghHo];c8;#3Fw{vH@,.n<0NF>L^' );
define( 'LOGGED_IN_SALT',   '!_*A/<co}{,PFyNm<^+s2>z^`*bw{rn/MuimzeL/PiT5q0i/o4/=1KUr(FC}*sDi' );
define( 'NONCE_SALT',       'K]i{v}NVXm_c)2LM|X=ujR)NP_M;7d<v:V@.0Rse`&:.r),J)|BStRYmu@Phf+t,' );

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
