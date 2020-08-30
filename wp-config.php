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
define( 'AUTH_KEY',         '|R.<[d~gsXXmu%rBgkUtMzh8dJ!vT>uUcjuQS.-F@^(G#5?<8L|75HA%]f1hg6gK' );
define( 'SECURE_AUTH_KEY',  '$_ 1r*,GjpOveyg2wn|_U?^6BC&{R@[Z,>fB^c?l(q7#@pjiXu(1:JHY5.yM;:7O' );
define( 'LOGGED_IN_KEY',    '1D(jgDH:x#g$qiXBn,}G[J]h78!o;4kd(]mZD$prs@uaNi::?KW9zQVDxIvc%`Em' );
define( 'NONCE_KEY',        '?{:#B4RE/qD%)VTcm1gqU67]usY/IU6KYJLQ?+X+hYqjrK8Q)w(SP}hJ@fvCgH1J' );
define( 'AUTH_SALT',        'l8@a_gA2_azbBcH&A}bV]IBGB,rok+BT]AfwL/N*-pp[#$j`p!F6kV*5<ASI:BN*' );
define( 'SECURE_AUTH_SALT', 'OA0FM;RSdL+FjBEl>_%`bI}rnOe*f,9RiMYUZi(pM%&7<Fde$.6a:l-[:ajWAJ|+' );
define( 'LOGGED_IN_SALT',   'A<WyY!_w[71]oToV`p,16ur4*cH~h~Uppn5owGTlCG-.(sGe*y%RU YzX`pBw]WF' );
define( 'NONCE_SALT',       'e3l+vRU;U=p_@c5R8*iHRc}9rx03RvB)VZK7H>=L?YE7>;@a}=4Ky|/4bkwDMEEG' );

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
