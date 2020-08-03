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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql12358402' );

/** MySQL database username */
define( 'DB_USER', 'sql12358402' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fwXWie5H1D' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '0b|~/ig1O=Xr2q)rDvVS[TYiJ4-Nz?)$rdio}.`p[1-()!lpRGI4S!3 nB?ke#G*' );
define( 'SECURE_AUTH_KEY',  'VPI;(FsGO*P,uCLJ43gKqJEcJX^+j_vBRF4X~jRpD%[dS,f?2 xg{2I;9g{O)Y=6' );
define( 'LOGGED_IN_KEY',    'PD.)_@MNU&.m`5F9X#Q}Y=@{5XNr)p5C^a?(5zOhi9~}n`fA<Y hk|k5z6M+JM<q' );
define( 'NONCE_KEY',        ')ClX->w-?Sln]beBhyBBMXitz;o$`@s2`u[5ABd [i#}QVu3sqTRncr7MThHnCxC' );
define( 'AUTH_SALT',        'ko.lZ9,c/fDW>73G+Vls@EKPV!9!T+(Tqot(kRs^#J*QMe  gV)8A?S;`@[4_mOQ' );
define( 'SECURE_AUTH_SALT', '_5h;!o oSVxU$u-.^WZ%jUnf.XF~Ao[&Ow.2nWt`Mwiho;%[/cu{]lBL$!)+FaRW' );
define( 'LOGGED_IN_SALT',   '<JFBz=<#*G{9BtRKXZ|yf,&e~oq4uK/.ko,=F*3F`R>xfw+3C/#zemD* 7jRnl#Q' );
define( 'NONCE_SALT',       'qiY,./;!s)TKTyT|$!g,IH3#p.+1qhe@Bo^F$WIV%NhSRtCOy(24}yT|l!^u9x4=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
