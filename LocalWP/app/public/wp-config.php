<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'qQ0|$jm(/6ew`02h9FP59M7Uk5y>>n6g_>0vPB([ #*{$7wcSEX.a IX/ ,_{B C' );
define( 'SECURE_AUTH_KEY',   't%}I8)vbgSs8Mj[ab_{GrO8`-mhhayIc,B0p<X))_pzH^X#.m9pKS`S^EY6@ns&V' );
define( 'LOGGED_IN_KEY',     ':Pr2N)_:R)!5V;t+)AvOv0T2HznZCJr6CFv{1pEh)vvJ0<|W1*7 wh:1_jUr[/f=' );
define( 'NONCE_KEY',         'YB/]kzEvRC88JGoaerY}2>.qf}68H1jEfa?d?<C(z<?:DFExnG79O/1U1fqB{VS_' );
define( 'AUTH_SALT',         'i%nlj1{C{KtEd%<OB?xvPbe3U:|IP81n&A/]#80`z<l/#!z`bge>Jku3U@/<Yoix' );
define( 'SECURE_AUTH_SALT',  'ZrEBp[l<<_LUI4Wo10}j1Y:ibD~^ At*CkirY,HuYZTH2[m<K,_}lGE|0B>#4FE5' );
define( 'LOGGED_IN_SALT',    '/8#YJ:160PATyMS#f{I~*CkJQb}6h.=s3Ghs861ws$rE{gAQDTqTljp5-3P?~t=J' );
define( 'NONCE_SALT',        '+1D45-z0C^qlZ>U(lv=nUiyY$LM*q6 1E,47lI> y$)-R)?WZK<:czJswsvTl+j,' );
define( 'WP_CACHE_KEY_SALT', 'CKDt/`Ta)e]WLe~0^r,sEu+[#lLZsJQpjg9BW?#)>ke781<`i]K>MEm_>0>@jf;m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
