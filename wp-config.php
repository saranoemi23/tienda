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
define( 'DB_NAME', 'enecstar_tienda' );

/** MySQL database username */
define( 'DB_USER', 'enecstar_tienda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tienda' );

/** MySQL hostname */
define( 'DB_HOST', 'gator4113.hostgator.com' );

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
define( 'AUTH_KEY',         'RifqEb{{_Ki=ul=PgskK#wOlbuXf-)1~9`y=;|PYGksS_DJbwx{j|9JU.ku8;,3;' );
define( 'SECURE_AUTH_KEY',  '1Ps|![UMlI*!+^<uZQjFYgm&i(dv5^_Ly[?#}L8pZ!WI+N:ub_U0[@zSWiv:}A>l' );
define( 'LOGGED_IN_KEY',    'uyKz5&?2,h!#>/1t=WFA4ioe@eQQ8(6G&kY&vpg6`DzQN#e2f$eAJO_b>tS[Q](/' );
define( 'NONCE_KEY',        '9Yz#zo*i6BF{0{?%h0Or5U=S-S iwWU@r<uRnz  TJ){.&2o$aHiyIhk>zvTW88%' );
define( 'AUTH_SALT',        '?F$_~@;7]>si&pi]]F,nBeHUCN(MhBgjZOd,NwCeO];xLEC_|_dDd&-1{Ijr-5i9' );
define( 'SECURE_AUTH_SALT', 't/J^,eag4T_bDQySr[;2j.e )RbC)/Cc9H#1%aOz+RVA:]cBA_4pD|y:@1*k@hVm' );
define( 'LOGGED_IN_SALT',   'nP=kgvr=:QCdK>y<xcyWcy]LV|la^8C5eFpIFf^Q:0j0206}}]OQl,5(.;Gtw2,x' );
define( 'NONCE_SALT',       'j*BB!) ru [)Mg&yjekgAM=>cj#7|nb<b+0zh^;|+Y:j(<l!^:=U zp{j.4#Z8G@' );

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
