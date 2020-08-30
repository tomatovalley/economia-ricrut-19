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
define( 'AUTH_KEY',         '3)9U@kDa[oy{nDcOyn>`h%rm3|4:K{kJ//~-(lViGlkf!#>Q~~J[l5XuNuQ:KF&>' );
define( 'SECURE_AUTH_KEY',  '4VU-[J_ Z]]ViOG*}R1nM#8!,w;s/1$+Qx$e-l&bzZWHr&0[&jy&4z@F3zA!3pIv' );
define( 'LOGGED_IN_KEY',    '1}<ehYM3}nCDKTg0<Wm:mSL`[: $VCifuqGCag~_CAHg2C;~_.4GjT :)BW|6am:' );
define( 'NONCE_KEY',        ',;4-*;3_](M{f !)vtFLPL$PgMGZ7re[h~y%jWbSt$}<p4DmQ_8bpMm=vhJPhGEw' );
define( 'AUTH_SALT',        'Ek-b&@v]My:|PuUamrOZ N-4%cS UmyqJg)b+:`Gw5In W|bEf)Bem*Vc[&|LgY*' );
define( 'SECURE_AUTH_SALT', '@&CMa#M+Cm7%T2],ikrw:y/.}ir*76{O?/lUc.Ptw^+(>7eR|.SPz3Q1>W5AEPDE' );
define( 'LOGGED_IN_SALT',   'dkd8~`IG3IZ)0Vqm%hFRcU^<Wh0m!De@07tYTsR-G{yv!uf](mNAa|[Mm^76_L`3' );
define( 'NONCE_SALT',       'rZ4S?Jr6e.Pq]{5tv`uD?1|~hNcik%QAPEaP!k.L{X9:JJAB*(LIH{<@*}|rlh|Z' );

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
