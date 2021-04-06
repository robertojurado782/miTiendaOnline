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
define( 'DB_NAME', 'nuevatienda' );

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
define( 'AUTH_KEY',         '/zRO!b*dn.{$b<PKD`jK70=4eQ`vuTI]PoFD%m}Z$RK68<-3Y5C)k?{LXe~QC-^M' );
define( 'SECURE_AUTH_KEY',  'AN.{IWIq%Y7^DL.Sk#H~#bX#Emm#}6e ~jOC^/LN_~v:Hyck`WLalm&yyF19rKvH' );
define( 'LOGGED_IN_KEY',    '9mkb9]IQqTTCQ> ynil;,!d+xtgnV=W4p&P1]*kpv(C*Ox0N}.QY3ql(/$mu=ws1' );
define( 'NONCE_KEY',        'lwg<A1_G~hJhW`M* iQZhc)<+.M:^Nu@y!C[C?GV5T[!?yc;.-hq&nvTm5}<bE6h' );
define( 'AUTH_SALT',        'h?ptOGW)h7-<?6,gBy/%61DD8GJ/fn3p7:o:ro#AZrAnF*{e35T9Tg,O4COq|E6[' );
define( 'SECURE_AUTH_SALT', 'R#bDLV@j}{%L#?)Zxoi&R{G_[d klya8*)s&NmUC~/ 4?glWTJ.|$;X8l@O4z6Gd' );
define( 'LOGGED_IN_SALT',   'ZdIlv%)?x9M DgX<||9.mk0n7{)C9,t]Fs=F9~*jP,K(e(uL?S45<*yW0)$%/F*)' );
define( 'NONCE_SALT',       '@bZkO%?3sZ^M3HLE)6To:,`v`$mG%FzooH(}izvd}+v0-kX3&U-4uvcpd[AO_WXZ' );

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
